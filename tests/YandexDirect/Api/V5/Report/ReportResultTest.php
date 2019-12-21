<?php

namespace Biplane\Tests\YandexDirect\Api\V5\Report;

use Biplane\YandexDirect\Api\V5\Report\ReportResult;
use GuzzleHttp\Psr7\Response;
use PHPUnit\Framework\TestCase;

class ReportResultTest extends TestCase
{
    private $reportFile;

    protected function setUp(): void
    {
        $this->reportFile = sys_get_temp_dir() . '/yandex_direct_report.tsv';

        if (file_exists($this->reportFile)) {
            unlink($this->reportFile);
        }
    }

    protected function tearDown(): void
    {
        if (file_exists($this->reportFile)) {
            unlink($this->reportFile);
        }
    }

    public function testReportShouldBeSavedWhenPassString()
    {
        $response = new Response(200, [], 'content of report');
        $report = new ReportResult($response);

        $report->save($this->reportFile);

        self::assertFileExists($this->reportFile);
        self::assertEquals('content of report', file_get_contents($this->reportFile));
    }

    public function testReportShouldBeSavedWhenPassResource()
    {
        $response = new Response(200, [], 'content of report');
        $report = new ReportResult($response);

        $destination = fopen($this->reportFile, 'w');

        self::assertIsResource($destination);

        $report->save($destination);

        self::assertEquals('content of report', file_get_contents($this->reportFile));
    }
}
