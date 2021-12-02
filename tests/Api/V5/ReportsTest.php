<?php

declare(strict_types=1);

namespace Biplane\Tests\YandexDirect\Api\V5;

use Biplane\YandexDirect\Api\V5\Reports;
use Biplane\YandexDirect\Config;
use Biplane\YandexDirect\Exception\ApiException;
use Nyholm\Psr7\Request;
use Nyholm\Psr7\Response;
use Nyholm\Psr7\Stream;
use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;
use Psr\Http\Client\ClientInterface;
use Psr\Http\Message\RequestFactoryInterface;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\StreamFactoryInterface;
use Psr\Http\Message\StreamInterface;

use function is_array;

class ReportsTest extends TestCase
{
    /** @var MockObject&ClientInterface */
    private $httpClient;

    protected function setUp(): void
    {
        $this->httpClient = $this->createMock(ClientInterface::class);
    }

    public function testFetch(): void
    {
        $service = $this->createService([
            'access_token' => 'secr3t',
            'client_login' => 'agrom',
        ]);
        $reportRequest = Reports\ReportRequestBuilder::create()
            ->skipReportHeader(true)
            ->setReportDefinition(Reports\ReportDefinition::create())
            ->getReportRequest();

        $this->httpClient->method('sendRequest')
            ->with(self::callback(static function (RequestInterface $request): bool {
                self::assertEquals(Reports::ENDPOINT, $request->getUri());
                self::assertEquals('POST', $request->getMethod());
                self::assertEquals('en', $request->getHeaderLine('accept-language'));
                self::assertEquals('Bearer secr3t', $request->getHeaderLine('authorization'));
                self::assertEquals('agrom', $request->getHeaderLine('client-login'));
                self::assertEquals('auto', $request->getHeaderLine('processingMode'));
                self::assertEquals('true', $request->getHeaderLine('skipReportHeader'));

                return true;
            }))
            ->willReturn(new Response());

        $reportResult = $service->get($reportRequest);

        self::assertTrue($reportResult->isReady());
    }

    public function testWaitForReadyReport(): void
    {
        $service = $this->createService([
            'access_token' => 'secr3t',
            'client_login' => 'agrom',
        ]);
        $reportRequest = Reports\ReportRequestBuilder::create()
            ->setReportDefinition(Reports\ReportDefinition::create())
            ->getReportRequest();

        $this->httpClient->expects(self::exactly(2))
            ->method('sendRequest')
            ->willReturnOnConsecutiveCalls(
                new Response(202, ['retryIn' => '1']),
                new Response()
            );

        $reportResult = $service->getReady($reportRequest);

        self::assertTrue($reportResult->isReady());
    }

    public function testProcessApiError(): void
    {
        $service = $this->createService([
            'access_token' => 'secr3t',
            'client_login' => 'agrom',
        ]);
        $reportRequest = Reports\ReportRequestBuilder::create()
            ->setReportDefinition(Reports\ReportDefinition::create())
            ->getReportRequest();

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

        $this->httpClient->method('sendRequest')->willReturn(
            new Response(400, [], $reportDownloadError)
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

    /**
     * @param array<string, mixed> $options
     */
    private function createConfig(array $options): Config
    {
        return new Config($options);
    }

    /**
     * @param Config|array<string, mixed> $config
     */
    private function createService($config): Reports
    {
        if (is_array($config)) {
            $config = $this->createConfig($config);
        }

        $requestFactory = $this->createMock(RequestFactoryInterface::class);
        $requestFactory->method('createRequest')->willReturnCallback(static function ($method, $uri): RequestInterface {
            return new Request($method, $uri);
        });

        $streamFactory = $this->createMock(StreamFactoryInterface::class);
        $streamFactory->method('createStream')->willReturnCallback(static function ($content): StreamInterface {
            return Stream::create($content);
        });

        return new Reports($config, $this->httpClient, $requestFactory, $streamFactory);
    }
}
