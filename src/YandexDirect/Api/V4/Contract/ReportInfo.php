<?php

namespace Biplane\YandexDirect\Api\V4\Contract;

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
     * @return ReportInfo
     */
    public function setReportID($ReportID)
    {
        $this->ReportID = $ReportID;

        return $this;
    }

    /**
     * Gets the Url.
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->Url;
    }

    /**
     * Sets the Url.
     *
     * @param string $Url
     *
     * @return ReportInfo
     */
    public function setUrl($Url)
    {
        $this->Url = $Url;

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
     * @return ReportInfo
     */
    public function setStatusReport($StatusReport)
    {
        $this->StatusReport = $StatusReport;

        return $this;
    }
}