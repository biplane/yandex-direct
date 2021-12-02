<?php

declare(strict_types=1);

namespace Biplane\Tests\YandexDirect\Api\V5\Reports;

use Biplane\YandexDirect\Api\V5\Reports\ReportResult;
use Biplane\YandexDirect\Exception\ReportNotReadyException;
use Nyholm\Psr7\Response;
use PHPUnit\Framework\TestCase;
use Psr\Http\Message\StreamInterface;

use function file_get_contents;
use function sys_get_temp_dir;
use function tempnam;
use function unlink;

final class ReportResultTest extends TestCase
{
    public function testGetHeaderValue(): void
    {
        $result = new ReportResult(
            new Response(200, [
                'retryIn' => '5',
                'requestId' => '1637522068',
                'reportsInQueue' => '1',
            ])
        );

        self::assertSame(5, $result->retryIn());
        self::assertSame(1, $result->reportsInQueue());
        self::assertSame('1637522068', $result->getRequestId());
    }

    public function testGetStreamWhenReportIsReady(): void
    {
        $stream = $this->createMock(StreamInterface::class);

        $result = new ReportResult(new Response(200, [], $stream));

        self::assertSame($stream, $result->getStream());
    }

    public function testGetStreamWhenReportNotReady(): void
    {
        $result = new ReportResult(new Response(201));

        $this->expectException(ReportNotReadyException::class);

        $result->getStream();
    }

    public function testGetAsString(): void
    {
        $result = new ReportResult(new Response(200, [], 'report content'));

        self::assertEquals('report content', $result->getAsString());
    }

    public function testSaveToFile(): void
    {
        $result = new ReportResult(new Response(200, [], 'report content'));
        $destFile = tempnam(sys_get_temp_dir(), 'test_report_result');

        try {
            $result->saveToFile($destFile);

            self::assertEquals('report content', file_get_contents($destFile));
        } finally {
            unlink($destFile);
        }
    }
}
