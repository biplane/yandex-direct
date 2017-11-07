<?php

namespace Biplane\Tests\YandexDirect\Api\V5\Report;

use Biplane\YandexDirect\Api\V5\Report\ReportResult;
use GuzzleHttp\Psr7\Response;

class ReportResultTest extends \PHPUnit_Framework_TestCase
{
    private $reportFile;

    public function testReportShouldBeSavedWhenPassString()
    {
        $response = new Response(200, [], 'content of report');
        $report = new ReportResult($response);

        $report->save($this->reportFile);

        $this->assertFileExists($this->reportFile);
        $this->assertEquals('content of report', file_get_contents($this->reportFile));
    }

    public function testReportShouldBeSavedWhenPassResource()
    {
        $response = new Response(200, [], 'content of report');
        $report = new ReportResult($response);

        $destination = fopen($this->reportFile, 'w');
        $this->assertInternalType('resource', $destination);

        $report->save($destination);

        $this->assertEquals('content of report', file_get_contents($this->reportFile));
    }

    protected function setUp()
    {
        $this->reportFile = sys_get_temp_dir() . '/yandex_direct_report.tsv';

        if (file_exists($this->reportFile)) {
            unlink($this->reportFile);
        }
    }

    protected function tearDown()
    {
        if (file_exists($this->reportFile)) {
            unlink($this->reportFile);
        }
    }
}
