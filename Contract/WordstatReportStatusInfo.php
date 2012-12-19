<?php

namespace Biplane\YandexDirectBundle\Contract;

/**
 * @codeCoverageIgnore
 * @SuppressWarnings(PHPMD)
 */
class WordstatReportStatusInfo
{
    /**
     * @var int
     */
    protected $ReportID;
    /**
     * @var string
     */
    protected $StatusReport;

    /**
     * Creates a new instance.
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets the ReportID.
     *
     * @return int
     */
    public function getReportID()
    {
        return $this->ReportID;
    }

    /**
     * Sets the ReportID.
     *
     * @param int $ReportID
     *
     * @return WordstatReportStatusInfo
     */
    public function setReportID($ReportID)
    {
        $this->ReportID = $ReportID;

        return $this;
    }

    /**
     * Gets the StatusReport.
     *
     * @return string
     */
    public function getStatusReport()
    {
        return $this->StatusReport;
    }

    /**
     * Sets the StatusReport.
     *
     * @param string $StatusReport
     *
     * @return WordstatReportStatusInfo
     */
    public function setStatusReport($StatusReport)
    {
        $this->StatusReport = $StatusReport;

        return $this;
    }
}