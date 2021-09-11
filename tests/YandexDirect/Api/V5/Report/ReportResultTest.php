<?php

declare(strict_types=1);

namespace Biplane\Tests\YandexDirect\Api\V5\Report;

use Biplane\YandexDirect\Api\V5\Report\ReportResult;
use GuzzleHttp\Psr7\Response;
use PHPUnit\Framework\TestCase;

use function file_exists;
use function file_get_contents;
use function fopen;
use function sys_get_temp_dir;
use function unlink;

class ReportResultTest extends TestCase
{
    /** @var string */
    private $reportFile;

    protected function setUp(): void
    {
        $this->reportFile = sys_get_temp_dir() . '/yandex_direct_report.tsv';

        if (! file_exists($this->reportFile)) {
            return;
        }

        unlink($this->reportFile);
    }

    protected function tearDown(): void
    {
        if (! file_exists($this->reportFile)) {
            return;
        }

        unlink($this->reportFile);
    }

    public function testReportShouldBeSavedWhenPassString(): void
    {
        $response = new Response(200, [], 'content of report');
        $report = new ReportResult($response);

        $report->save($this->reportFile);

        self::assertFileExists($this->reportFile);
        self::assertEquals('content of report', file_get_contents($this->reportFile));
    }

    public function testReportShouldBeSavedWhenPassResource(): void
    {
        $response = new Response(200, [], 'content of report');
        $report = new ReportResult($response);

        $destination = fopen($this->reportFile, 'w');

        self::assertIsResource($destination);

        $report->save($destination);

        self::assertEquals('content of report', file_get_contents($this->reportFile));
    }
}
