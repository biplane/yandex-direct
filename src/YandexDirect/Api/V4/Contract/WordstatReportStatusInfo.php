<?php

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

