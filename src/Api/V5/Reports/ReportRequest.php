<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Reports;

final class ReportRequest
{
    public const PROCESSING_MODE_AUTO = 'auto';
    public const PROCESSING_MODE_ONLINE = 'online';
    public const PROCESSING_MODE_OFFLINE = 'offline';

    /** @var string */
    private $processingMode;

    /** @var bool */
    private $returnMoneyInMicros;

    /** @var bool */
    private $skipReportHeader;

    /** @var bool */
    private $skipReportSummary;

    /** @var bool */
    private $skipColumnHeader;

    /** @var ReportDefinition */
    private $reportDefinition;

    public function __construct(
        ReportDefinition $reportDefinition,
        string $processingMode = self::PROCESSING_MODE_AUTO,
        bool $returnMoneyInMicros = false,
        bool $skipReportHeader = false,
        bool $skipReportSummary = false,
        bool $skipColumnHeader = false
    ) {
        $this->reportDefinition = $reportDefinition;
        $this->processingMode = $processingMode;
        $this->returnMoneyInMicros = $returnMoneyInMicros;
        $this->skipReportHeader = $skipReportHeader;
        $this->skipReportSummary = $skipReportSummary;
        $this->skipColumnHeader = $skipColumnHeader;
    }

    public function processingMode(): string
    {
        return $this->processingMode;
    }

    public function returnMoneyInMicros(): bool
    {
        return $this->returnMoneyInMicros;
    }

    public function skipReportHeader(): bool
    {
        return $this->skipReportHeader;
    }

    public function skipReportSummary(): bool
    {
        return $this->skipReportSummary;
    }

    public function skipColumnHeader(): bool
    {
        return $this->skipColumnHeader;
    }

    public function reportDefinition(): ReportDefinition
    {
        return $this->reportDefinition;
    }
}
