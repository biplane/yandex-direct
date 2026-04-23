<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Reports;

final class ReportRequest
{
    public const string PROCESSING_MODE_AUTO = 'auto';
    public const string PROCESSING_MODE_ONLINE = 'online';
    public const string PROCESSING_MODE_OFFLINE = 'offline';

    public function __construct(
        private ReportDefinition $reportDefinition,
        private string $processingMode = self::PROCESSING_MODE_AUTO,
        private bool $returnMoneyInMicros = false,
        private bool $skipReportHeader = false,
        private bool $skipReportSummary = false,
        private bool $skipColumnHeader = false,
    ) {
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
