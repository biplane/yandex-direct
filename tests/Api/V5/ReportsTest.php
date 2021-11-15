<?php

declare(strict_types=1);

namespace Biplane\Tests\YandexDirect\Api\V5;

use Biplane\YandexDirect\Api\V5\Report\ReportRequest;
use Biplane\YandexDirect\Api\V5\Reports;
use Biplane\YandexDirect\Event\FailCallEvent;
use Biplane\YandexDirect\Event\PostCallEvent;
use Biplane\YandexDirect\Event\PreCallEvent;
use Biplane\YandexDirect\Events;
use Biplane\YandexDirect\Exception\ApiException;
use Biplane\YandexDirect\Exception\NetworkException;
use Biplane\YandexDirect\User;
use GuzzleHttp\Client;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Psr7\Response;
use GuzzleHttp\RequestOptions;
use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;
use Psr\Http\Message\RequestInterface;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;
use Throwable;

use function file_get_contents;
use function is_array;
use function is_file;
use function sprintf;
use function str_replace;
use function sys_get_temp_dir;
use function unlink;

class ReportsTest extends TestCase
{
    /** @var MockObject&EventDispatcherInterface */
    private $dispatcher;

    /** @var MockHandler */
    private $mockHandler;

    /** @var string */
    private $reportFile;

    protected function setUp(): void
    {
        $this->dispatcher = $this->getMockBuilder(EventDispatcherInterface::class)->getMock();
        $this->mockHandler = new MockHandler();
        $this->reportFile = sys_get_temp_dir() . '/report.tsv';

        if (! is_file($this->reportFile)) {
            return;
        }

        unlink($this->reportFile);
    }

    protected function tearDown(): void
    {
        unset($this->mockHandler, $this->dispatcher);

        if (! is_file($this->reportFile)) {
            return;
        }

        unlink($this->reportFile);
    }

    public function testGetResultWhenNewReportIsCreated(): void
    {
        $reportRequest = (new ReportRequest())
            ->setDefinition('<ReportDefinition />');

        $this->mockHandler->append($response = new Response(201));

        $user = $this->createUser([
            'access_token' => 'foo',
            'login' => 'bar',
        ]);
        $service = $this->createService($user);

        $this->dispatcher->expects(self::exactly(2))
            ->method('dispatch')
            ->withConsecutive(
                [
                    new PreCallEvent('Reports:request', [$reportRequest], $user),
                    Events::BEFORE_REQUEST,
                ],
                [
                    new PostCallEvent(
                        'Reports:request',
                        [$reportRequest],
                        $user,
                        $service,
                        $response->getBody()
                    ),
                    Events::AFTER_REQUEST,
                ]
            );

        $result = $service->get($reportRequest);

        self::assertFalse($result->isReady());
        self::assertRequest($this->mockHandler->getLastRequest(), $reportRequest->getDefinition(), [
            'Authorization' => 'Bearer foo',
            'Accept-Language' => 'en',
            'Client-Login' => 'bar',
            'processingMode' => 'auto',
        ]);
    }

    public function testGetResultWhenReportIsProcessing(): void
    {
        $reportRequest = (new ReportRequest())
            ->setDefinition('<ReportDefinition />');

        $this->mockHandler->append(new Response(202));

        $service = $this->createService([
            'access_token' => 'foo',
            'locale' => 'ru',
            'login' => 'bar',
        ]);

        $result = $service->get($reportRequest);

        self::assertFalse($result->isReady());
        self::assertRequest($this->mockHandler->getLastRequest(), $reportRequest->getDefinition(), [
            'Authorization' => 'Bearer foo',
            'Accept-Language' => 'ru',
            'Client-Login' => 'bar',
            'processingMode' => 'auto',
        ]);
    }

    public function testGetResultWhenReportIsReady(): void
    {
        $reportRequest = (new ReportRequest())
            ->setDefinition('<ReportDefinition />');
        $reportContent = 'report data';

        $this->mockHandler->append(new Response(200, [], $reportContent));

        $service = $this->createService([
            'access_token' => 'foo',
            'login' => 'bar',
        ]);

        $result = $service->get($reportRequest);

        self::assertTrue($result->isReady());
        self::assertEquals($reportContent, $result->getData());
    }

    public function testCreateReportWithCustomOptions(): void
    {
        $reportRequest = (new ReportRequest())
            ->setDefinition('<ReportDefinition />')
            ->setProcessingMode(ReportRequest::PROCESSING_MODE_OFFLINE)
            ->returnMoneyAsFloat()
            ->skipColumnHeader()
            ->skipReportHeader()
            ->skipReportSummary();

        $this->mockHandler->append(new Response(201));

        $service = $this->createService([
            'access_token' => 'foo',
            'login' => 'bar',
        ]);

        $result = $service->get($reportRequest);

        self::assertFalse($result->isReady());
        self::assertRequest($this->mockHandler->getLastRequest(), $reportRequest->getDefinition(), [
            'Authorization' => 'Bearer foo',
            'Accept-Language' => 'en',
            'Client-Login' => 'bar',
            'processingMode' => 'offline',
            'returnMoneyInMicros' => 'false',
            'skipReportHeader' => 'true',
            'skipColumnHeader' => 'true',
            'skipReportSummary' => 'true',
        ]);
    }

    public function testWaitBuildingReport(): void
    {
        $reportRequest = (new ReportRequest())
            ->setDefinition('<ReportDefinition />');
        $reportContent = 'report data';

        $this->mockHandler->append(
            new Response(201),
            new Response(202, ['retryIn' => '1']),
            new Response(200, [], $reportContent)
        );

        $service = $this->createService([
            'access_token' => 'foo',
            'login' => 'bar',
        ]);

        $result = $service->getReady($reportRequest);

        self::assertTrue($result->isReady());
        self::assertEquals($reportContent, $result->getData());
    }

    public function testDownloadReport(): void
    {
        $reportRequest = (new ReportRequest())
            ->setDefinition('<ReportDefinition />');
        $reportContent = 'report data';

        $this->mockHandler->append(
            new Response(201),
            new Response(200, [], $reportContent)
        );

        $service = $this->createService([
            'access_token' => 'foo',
            'login' => 'bar',
        ]);

        $service->download($this->reportFile, $reportRequest);

        $requestOptions = $this->mockHandler->getLastOptions();

        self::assertArrayHasKey(RequestOptions::SINK, $requestOptions);
        self::assertEquals($this->reportFile, $requestOptions[RequestOptions::SINK]);
        self::assertEquals($reportContent, file_get_contents($this->reportFile));
    }

    public function testThrowApiExceptionWhenBadRequest(): void
    {
        $reportRequest = (new ReportRequest())
            ->setDefinition('<ReportDefinition />');

        $reportDownloadError = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<reports:reportDownloadError xmlns:reports="http://api.direct.yandex.com/v5/reports">
    <reports:ApiError>
        <reports:requestId>2773184281650080533</reports:requestId>
        <reports:errorCode>53</reports:errorCode>
        <reports:errorMessage>Authorization error</reports:errorMessage>
        <reports:errorDetail>Token not entered</reports:errorDetail>
    </reports:ApiError>
</reports:reportDownloadError>
XML;
        $this->mockHandler->append(new Response(400, [], $reportDownloadError));

        $user = $this->createUser([
            'access_token' => 'foo',
            'login' => 'bar',
        ]);
        $service = $this->createService($user);

        $exception = new ApiException('Authorization error', 53, 'Token not entered');
        $exception->setRequestId('2773184281650080533');

        $this->dispatcher->expects(self::exactly(2))
            ->method('dispatch')
            ->withConsecutive(
                [
                    new PreCallEvent('Reports:request', [$reportRequest], $user),
                    Events::BEFORE_REQUEST,
                ],
                [
                    new FailCallEvent(
                        'Reports:request',
                        [$reportRequest],
                        $user,
                        $service,
                        $exception
                    ),
                    Events::FAIL_REQUEST,
                ]
            );

        $this->expectException(ApiException::class);

        try {
            $service->get($reportRequest);
        } catch (ApiException $e) {
            self::assertEquals('2773184281650080533', $e->getRequestId());
            self::assertEquals('Authorization error: Token not entered', $e->getMessage());
            self::assertEquals('Token not entered', $e->getDetailMessage());
            self::assertSame(53, $e->getCode());

            throw $e;
        }
    }

    public function testThrowNetworkException(): void
    {
        $this->expectException(NetworkException::class);
        $this->expectExceptionCode(500);

        $reportRequest = (new ReportRequest())
            ->setDefinition('<ReportDefinition />');

        $this->mockHandler->append(new Response(500, [], 'Internal server error'));

        $service = $this->createService([
            'access_token' => 'foo',
            'login' => 'bar',
        ]);

        $service->get($reportRequest);
    }

    public function testReportFileShouldBeEmptyWhenDownloadFailed(): void
    {
        $reportRequest = (new ReportRequest())
            ->setDefinition('<ReportDefinition />');
        $reportDownloadError = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<reports:reportDownloadError xmlns:reports="http://api.direct.yandex.com/v5/reports">
    <reports:ApiError>
        <reports:requestId>2773184281650080533</reports:requestId>
        <reports:errorCode>53</reports:errorCode>
        <reports:errorMessage>Authorization error</reports:errorMessage>
        <reports:errorDetail>Token not entered</reports:errorDetail>
    </reports:ApiError>
</reports:reportDownloadError>
XML;
        $this->mockHandler->append(new Response(400, [], $reportDownloadError));

        $service = $this->createService([
            'access_token' => 'foo',
            'login' => 'bar',
        ]);

        try {
            $service->download($this->reportFile, $reportRequest);
        } catch (Throwable $ex) {
        }

        self::assertEmpty(file_get_contents($this->reportFile));
    }

    public function testLastRequest(): void
    {
        $reportRequest = (new ReportRequest())
            ->setDefinition('<ReportDefinition />')
            ->setProcessingMode(ReportRequest::PROCESSING_MODE_OFFLINE)
            ->returnMoneyAsFloat();

        $this->mockHandler->append(new Response(201));

        $service = $this->createService([
            'access_token' => 'foo',
            'login' => 'bar',
        ]);

        $service->get($reportRequest);

        $request = <<<REQ
POST /v5/reports HTTP/1.1
Host: api.direct.yandex.com
Authorization: Bearer foo
Accept-Language: en
Client-Login: bar
processingMode: offline
returnMoneyInMicros: false

<ReportDefinition />
REQ;

        self::assertEquals(str_replace("\n", "\r\n", $request), $service->getLastRequest());
    }

    public function testLastResponse(): void
    {
        $reportRequest = (new ReportRequest())
            ->setDefinition('<ReportDefinition />');

        $this->mockHandler->append(new Response(201));

        $service = $this->createService([
            'access_token' => 'foo',
            'login' => 'bar',
        ]);

        $service->get($reportRequest);

        self::assertEquals("HTTP/1.1 201 Created\r\n\r\n", $service->getLastResponse());
    }

    public function testRequestId(): void
    {
        $reportRequest = (new ReportRequest())
            ->setDefinition('<ReportDefinition />');

        $this->mockHandler->append(new Response(202, [
            'retryIn' => '1',
            'RequestId' => 'request-id',
        ]));

        $service = $this->createService([
            'access_token' => 'foo',
            'login' => 'bar',
        ]);

        $service->get($reportRequest);

        $response = <<<RESP
HTTP/1.1 202 Accepted
retryIn: 1
RequestId: request-id


RESP;

        self::assertEquals('request-id', $service->getRequestId());
        self::assertEquals(str_replace("\n", "\r\n", $response), $service->getLastResponse());
    }

    /**
     * @param array<string, mixed> $options
     */
    private function createUser(array $options): User
    {
        return new User($options, $this->dispatcher);
    }

    /**
     * @param User|array<string, mixed> $user
     */
    private function createService($user): Reports
    {
        $httpClient = new Client([
            'handler' => HandlerStack::create($this->mockHandler),
        ]);

        if (is_array($user)) {
            $user = $this->createUser($user);
        }

        return new Reports($user, $httpClient);
    }

    /**
     * @param array<string, mixed> $headers
     */
    private static function assertRequest(
        RequestInterface $request,
        string $body,
        array $headers,
        string $endpoint = Reports::ENDPOINT
    ): void {
        self::assertEquals($endpoint, $request->getUri());
        self::assertEquals($body, $request->getBody());

        foreach ($headers as $name => $expected) {
            self::assertTrue($request->hasHeader($name), sprintf('Header "%s" is missing.', $name));

            if (is_array($expected)) {
                self::assertEquals($expected, $request->getHeader($name), sprintf('Header "%s"', $name));
            } else {
                self::assertContains($expected, $request->getHeader($name), sprintf('Header "%s"', $name));
            }
        }
    }
}
