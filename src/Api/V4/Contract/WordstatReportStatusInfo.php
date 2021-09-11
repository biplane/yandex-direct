<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V4\Contract;

/**
 * Auto-generated code.
 */
class WordstatReportStatusInfo
{
    protected $ReportID = null;

    protected $StatusReport = null;

    /**
     * Creates a new instance of WordstatReportStatusInfo.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets ReportID.
     */
    public function getReportID(): int
    {
        return $this->ReportID;
    }

    /**
     * Sets ReportID.
     *
     * @return $this
     */
    public function setReportID(int $value)
    {
        $this->ReportID = $value;

        return $this;
    }

    /**
     * Gets StatusReport.
     */
    public function getStatusReport(): string
    {
        return $this->StatusReport;
    }

    /**
     * Sets StatusReport.
     *
     * @return $this
     */
    public function setStatusReport(string $value)
    {
        $this->StatusReport = $value;

        return $this;
    }
}
