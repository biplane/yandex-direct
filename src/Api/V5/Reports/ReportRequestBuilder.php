<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Reports;

use InvalidArgumentException;
use LogicException;

use function implode;
use function in_array;
use function sprintf;

final class ReportRequestBuilder
{
    /** @var string */
    private $processingMode = ReportRequest::PROCESSING_MODE_AUTO;

    /** @var bool */
    private $returnMoneyInMicros = true;

    /** @var bool */
    private $skipReportHeader = false;

    /** @var bool */
    private $skipReportSummary = false;

    /** @var bool */
    private $skipColumnHeader = false;

    /** @var ReportDefinition|null  */
    private $reportDefinition = null;

    private function __construct()
    {
    }

    public static function create(): self
    {
        return new self();
    }

    public function setReportDefinition(ReportDefinition $reportDefinition): self
    {
        $this->reportDefinition = $reportDefinition;

        return $this;
    }

    /**
     * @psalm-param ReportRequest::PROCESSING_MODE_* $value
     */
    public function setProcessingMode(string $value): self
    {
        $allowedModes = [
            ReportRequest::PROCESSING_MODE_AUTO,
            ReportRequest::PROCESSING_MODE_ONLINE,
            ReportRequest::PROCESSING_MODE_OFFLINE,
        ];

        if (! in_array($value, $allowedModes, true)) {
            throw new InvalidArgumentException(sprintf(
                'The processing mode must be one of the following values: %s',
                implode(', ', $allowedModes)
            ));
        }

        $this->processingMode = $value;

        return $this;
    }

    public function returnMoneyInMicros(bool $enable): self
    {
        $this->returnMoneyInMicros = $enable;

        return $this;
    }

    public function skipColumnHeader(bool $enable): self
    {
        $this->skipColumnHeader = $enable;

        return $this;
    }

    public function skipReportHeader(bool $enable): self
    {
        $this->skipReportHeader = $enable;

        return $this;
    }

    public function skipReportSummary(bool $enable): self
    {
        $this->skipReportSummary = $enable;

        return $this;
    }

    public function build(): ReportRequest
    {
        if ($this->reportDefinition === null) {
            throw new LogicException('ReportRequest cannot be created. Missing the report definition.');
        }

        return new ReportRequest(
            $this->reportDefinition,
            $this->processingMode,
            $this->returnMoneyInMicros,
            $this->skipReportHeader,
            $this->skipReportSummary,
            $this->skipColumnHeader
        );
    }
}
