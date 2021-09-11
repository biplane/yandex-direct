<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V4\Contract;

/**
 * Auto-generated code.
 */
class ReportInfo
{
    protected $ReportID = null;

    protected $Url = null;

    protected $StatusReport = null;

    /**
     * Creates a new instance of ReportInfo.
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
     * Gets Url.
     */
    public function getUrl(): string
    {
        return $this->Url;
    }

    /**
     * Sets Url.
     *
     * @return $this
     */
    public function setUrl(string $value)
    {
        $this->Url = $value;

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
