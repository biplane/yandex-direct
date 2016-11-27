<?php

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
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets ReportID.
     *
     * @return int
     */
    public function getReportID()
    {
        return $this->ReportID;
    }

    /**
     * Sets ReportID.
     *
     * @param int $value
     * @return self
     */
    public function setReportID($value)
    {
        $this->ReportID = $value;

        return $this;
    }

    /**
     * Gets Url.
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->Url;
    }

    /**
     * Sets Url.
     *
     * @param string $value
     * @return self
     */
    public function setUrl($value)
    {
        $this->Url = $value;

        return $this;
    }

    /**
     * Gets StatusReport.
     *
     * @return string
     */
    public function getStatusReport()
    {
        return $this->StatusReport;
    }

    /**
     * Sets StatusReport.
     *
     * @param string $value
     * @return self
     */
    public function setStatusReport($value)
    {
        $this->StatusReport = $value;

        return $this;
    }


}

