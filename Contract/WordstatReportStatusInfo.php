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
     * @return int
     */
    public function getReportID()
    {
        return $this->ReportID;
    }

    /**
     * @param int $ReportID
     * @return WordstatReportStatusInfo
     */
    public function setReportID($ReportID)
    {
        $this->ReportID = $ReportID;

        return $this;
    }

    /**
     * @return string
     */
    public function getStatusReport()
    {
        return $this->StatusReport;
    }

    /**
     * @param string $StatusReport
     * @return WordstatReportStatusInfo
     */
    public function setStatusReport($StatusReport)
    {
        $this->StatusReport = $StatusReport;

        return $this;
    }
}