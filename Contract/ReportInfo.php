<?php

namespace Biplane\YandexDirectBundle\Contract;

/**
 * @codeCoverageIgnore
 * @SuppressWarnings(PHPMD)
 */
class ReportInfo
{
    const STATUS_DONE = 'Done';
    const STATUS_PENDING = 'Pending';

    /**
     * @var int
     */
    protected $ReportID;
    /**
     * @var string
     */
    protected $Url;
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
     * @return ReportInfo
     */
    public function setReportID($ReportID)
    {
        $this->ReportID = $ReportID;

        return $this;
    }

    /**
     * @return string
     */
    public function getUrl()
    {
        return $this->Url;
    }

    /**
     * @param string $Url
     * @return ReportInfo
     */
    public function setUrl($Url)
    {
        $this->Url = $Url;

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
     * @return ReportInfo
     */
    public function setStatusReport($StatusReport)
    {
        $this->StatusReport = $StatusReport;

        return $this;
    }
}