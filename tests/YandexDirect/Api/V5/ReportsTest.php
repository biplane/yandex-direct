<?php

namespace Biplane\Tests\YandexDirect\Api\V5;

use Biplane\YandexDirect\Api\V5\Report\ReportRequest;
use Biplane\YandexDirect\Api\V5\Reports;
use Biplane\YandexDirect\Event\FailCallEvent;
use Biplane\YandexDirect\Event\PostCallEvent;
use Biplane\YandexDirect\Event\PreCallEvent;
use Biplane\YandexDirect\Events;
use Biplane\YandexDirect\Exception\ApiException;
use Biplane\YandexDirect\User;
use GuzzleHttp\Client;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Psr7\Response;
use GuzzleHttp\RequestOptions;
use Psr\Http\Message\RequestInterface;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;

/**
 * @author Denis Vasilev
 */
class ReportsTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var \PHPUnit_Framework_MockObject_MockObject
     */
    private $dispatcher;

    /**
     * @var MockHandler
     */
    private $mockHandler;

    private $reportFile;

    public function testGetResultWhenNewReportIsCreated()
    {
        $reportRequest = (new ReportRequest())
            ->setDefinition('<ReportDefinition />');

        $this->mockHandler->append($response = new Response(201));

        $user = $this->createUser([
            'access_token' => 'foo',
            'login' => 'bar',
        ]);
        $service = $this->createService($user);

        $this->dispatcher->expects($this->at(0))
            ->method('dispatch')
            ->with(Events::BEFORE_REQUEST, new PreCallEvent('Reports:request', [$reportRequest], $user));

        $this->dispatcher->expects($this->at(1))
            ->method('dispatch')
            ->with(Events::AFTER_REQUEST, new PostCallEvent(
                'Reports:request',
                [$reportRequest],
                $user,
                $service,
                $response->getBody()
            ));

        $result = $service->get($reportRequest);

        $this->assertFalse($result->isReady());
        $this->assertRequest($this->mockHandler->getLastRequest(), $reportRequest->getDefinition(), [
            'Authorization' => 'Bearer foo',
            'Accept-Language' => 'en',
            'Client-Login' => 'bar',
            'processingMode' => 'auto',
        ]);
    }

    public function testGetResultWhenReportIsProcessing()
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

        $this->assertFalse($result->isReady());
        $this->assertRequest($this->mockHandler->getLastRequest(), $reportRequest->getDefinition(), [
            'Authorization' => 'Bearer foo',
            'Accept-Language' => 'ru',
            'Client-Login' => 'bar',
            'processingMode' => 'auto',
        ]);
    }

    public function testGetResultWhenReportIsReady()
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

        $this->assertTrue($result->isReady());
        $this->assertEquals($reportContent, $result->getData());
    }

    public function testCreateReportWithCustomOptions()
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

        $this->assertFalse($result->isReady());
        $this->assertRequest($this->mockHandler->getLastRequest(), $reportRequest->getDefinition(), [
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

    public function testConnectToSandbox()
    {
        $reportRequest = (new ReportRequest())
            ->setDefinition('<ReportDefinition />')
            ->setProcessingMode(ReportRequest::PROCESSING_MODE_OFFLINE);

        $this->mockHandler->append(new Response(201));

        $service = $this->createService([
            'access_token' => 'foo',
            'login' => 'bar',
            'sandbox' => true,
        ]);

        $result = $service->get($reportRequest);

        $this->assertFalse($result->isReady());
        $this->assertRequest($this->mockHandler->getLastRequest(), $reportRequest->getDefinition(), [
            'Authorization' => 'Bearer foo',
            'Accept-Language' => 'en',
            'Client-Login' => 'bar',
            'processingMode' => 'offline',
        ], 'https://api-sandbox.direct.yandex.com/v5/reports');
    }

    public function testWaitBuildingReport()
    {
        $reportRequest = (new ReportRequest())
            ->setDefinition('<ReportDefinition />');
        $reportContent = 'report data';

        $this->mockHandler->append(
            new Response(201),
            new Response(202, [
                'retryIn' => '1',
            ]),
            new Response(200, [], $reportContent)
        );

        $service = $this->createService([
            'access_token' => 'foo',
            'login' => 'bar',
        ]);

        $result = $service->getReady($reportRequest);

        $this->assertTrue($result->isReady());
        $this->assertEquals($reportContent, $result->getData());
    }

    public function testDownloadReport()
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
            'login' => 'bar'
        ]);

        $service->download($this->reportFile, $reportRequest);

        $requestOptions = $this->mockHandler->getLastOptions();

        $this->assertArrayHasKey(RequestOptions::SINK, $requestOptions);
        $this->assertEquals($this->reportFile, $requestOptions[RequestOptions::SINK]);
        $this->assertEquals($reportContent, file_get_contents($this->reportFile));
    }

    /**
     * @expectedException \Biplane\YandexDirect\Exception\ApiException
     */
    public function testThrowApiExceptionWhenBadRequest()
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
            'login' => 'bar'
        ]);
        $service = $this->createService($user);

        $this->dispatcher->expects($this->at(0))
            ->method('dispatch')
            ->with(Events::BEFORE_REQUEST, new PreCallEvent('Reports:request', [$reportRequest], $user));

        $this->dispatcher->expects($this->at(1))
            ->method('dispatch')
            ->with(Events::FAIL_REQUEST, new FailCallEvent(
                'Reports:request',
                [$reportRequest],
                $user,
                $service,
                new ApiException('Reports:request', 'Token not entered', 53, null, '2773184281650080533')
            ));

        try {
            $service->get($reportRequest);
        } catch (ApiException $ex) {
            $this->assertEquals('Reports:request', $ex->getMethodRef());
            $this->assertEquals('2773184281650080533', $ex->getRequestId());
            $this->assertEquals('Token not entered', $ex->getMessage());
            $this->assertSame(53, $ex->getCode());

            throw $ex;
        }
    }

    /**
     * @expectedException \Biplane\YandexDirect\Exception\NetworkException
     * @expectedExceptionCode 500
     */
    public function testThrowNetworkException()
    {
        $reportRequest = (new ReportRequest())
            ->setDefinition('<ReportDefinition />');

        $this->mockHandler->append(new Response(500, [], 'Internal server error'));

        $service = $this->createService([
            'access_token' => 'foo',
            'login' => 'bar',
            'invoker' => function (callable $callback) {
                return $callback();
            }
        ]);

        $service->get($reportRequest);
    }

    public function testReportFileShouldBeEmptyWhenDownloadFailed()
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
            'login' => 'bar'
        ]);

        try {
            $service->download($this->reportFile, $reportRequest);
        } catch (\Exception $ex) {
        }

        $this->assertEmpty(file_get_contents($this->reportFile));
    }

    public function testLastRequest()
    {
        $reportRequest = (new ReportRequest())
            ->setDefinition('<ReportDefinition />')
            ->setProcessingMode(ReportRequest::PROCESSING_MODE_OFFLINE)
            ->returnMoneyAsFloat();

        $this->mockHandler->append(new Response(201));

        $service = $this->createService([
            'access_token' => 'foo',
            'login' => 'bar'
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

        $this->assertEquals(str_replace("\n", "\r\n", $request), $service->getLastRequest());
    }

    public function testLastResponse()
    {
        $reportRequest = (new ReportRequest())
            ->setDefinition('<ReportDefinition />');

        $this->mockHandler->append(new Response(201));

        $service = $this->createService([
            'access_token' => 'foo',
            'login' => 'bar'
        ]);

        $service->get($reportRequest);

        $this->assertEquals("HTTP/1.1 201 Created\r\n\r\n", $service->getLastResponse());
    }

    public function testRequestId()
    {
        $reportRequest = (new ReportRequest())
            ->setDefinition('<ReportDefinition />');

        $this->mockHandler->append(new Response(202, [
            'retryIn' => '1',
            'RequestId' => 'request-id',
        ]));

        $service = $this->createService([
            'access_token' => 'foo',
            'login' => 'bar'
        ]);

        $service->get($reportRequest);

        $response = <<<RESP
HTTP/1.1 202 Accepted
retryIn: 1
RequestId: request-id


RESP;

        $this->assertEquals('request-id', $service->getRequestId());
        $this->assertEquals(str_replace("\n", "\r\n", $response), $service->getLastResponse());
    }

    protected function setUp()
    {
        $this->dispatcher = $this->getMockBuilder(EventDispatcherInterface::class)
            ->getMock();
        $this->mockHandler = new MockHandler();
        $this->reportFile = sys_get_temp_dir() . '/report.tsv';

        if (is_file($this->reportFile)) {
            unlink($this->reportFile);
        }
    }

    protected function tearDown()
    {
        unset($this->mockHandler, $this->dispatcher);

        if (is_file($this->reportFile)) {
            unlink($this->reportFile);
        }
    }

    private function createUser(array $options)
    {
        return new User($options, $this->dispatcher);
    }

    private function createService($user)
    {
        $httpClient = new Client([
            'handler' => HandlerStack::create($this->mockHandler),
        ]);

        if (is_array($user)) {
            $user = $this->createUser($user);
        }

        return new Reports($user, $httpClient);
    }

    private function assertRequest(RequestInterface $request, $body, array $headers, $endpoint = Reports::ENDPOINT)
    {
        $this->assertEquals($endpoint, $request->getUri());
        $this->assertEquals($body, $request->getBody());

        foreach ($headers as $name => $expected) {
            $this->assertTrue($request->hasHeader($name), sprintf('Header "%s" is missing.', $name));
            if (is_array($expected)) {
                $this->assertEquals($expected, $request->getHeader($name), sprintf('Header "%s"', $name));
            } else {
                $this->assertContains($expected, $request->getHeader($name), sprintf('Header "%s"', $name));
            }
        }
    }
}
