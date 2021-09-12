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
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    public function getReportID(): int
    {
        return $this->ReportID;
    }

    /**
     * @return $this
     */
    public function setReportID(int $value)
    {
        $this->ReportID = $value;

        return $this;
    }

    public function getUrl(): string
    {
        return $this->Url;
    }

    /**
     * @return $this
     */
    public function setUrl(string $value)
    {
        $this->Url = $value;

        return $this;
    }

    public function getStatusReport(): string
    {
        return $this->StatusReport;
    }

    /**
     * @return $this
     */
    public function setStatusReport(string $value)
    {
        $this->StatusReport = $value;

        return $this;
    }
}
