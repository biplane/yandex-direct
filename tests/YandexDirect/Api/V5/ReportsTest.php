<?php

namespace Biplane\Tests\YandexDirect\Api\V5;

use Biplane\YandexDirect\Api\V5\Report\ReportRequest;
use Biplane\YandexDirect\Api\V5\Reports;
use Biplane\YandexDirect\Exception\ApiException;
use Biplane\YandexDirect\User;
use GuzzleHttp\Client;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Psr7\Response;
use GuzzleHttp\RequestOptions;
use Psr\Http\Message\RequestInterface;

/**
 * @author Denis Vasilev
 */
class ReportsTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var MockHandler
     */
    private $mockHandler;
    private $reportFile;

    public function testGetResultWhenNewReportIsCreated()
    {
        $reportRequest = (new ReportRequest())
            ->setDefinition('<ReportDefinition />');

        $this->mockHandler->append(new Response(201));

        $service = $this->createService([
            'access_token' => 'foo',
            'login' => 'bar'
        ]);

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
            'login' => 'bar'
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
            'login' => 'bar'
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
            'login' => 'bar'
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
            'login' => 'bar'
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

        $service = $this->createService([
            'access_token' => 'foo',
            'login' => 'bar'
        ]);

        try {
            $service->get($reportRequest);
        } catch (ApiException $ex) {
            $this->assertEquals('Reports:get', $ex->getMethodRef());
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

    protected function setUp()
    {
        $this->mockHandler = new MockHandler();
        $this->reportFile = sys_get_temp_dir() . '/report.tsv';

        if (is_file($this->reportFile)) {
            unlink($this->reportFile);
        }
    }

    protected function tearDown()
    {
        unset($this->mockHandler);

        if (is_file($this->reportFile)) {
            unlink($this->reportFile);
        }
    }

    private function createService(array $userOptions)
    {
        $user = new User($userOptions);
        $httpClient = new Client([
            'handler' => HandlerStack::create($this->mockHandler),
        ]);

        return new Reports($user, $httpClient);
    }

    private function assertRequest(RequestInterface $request, $body, array $headers)
    {
        $this->assertEquals(Reports::ENDPOINT, $request->getUri());
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
