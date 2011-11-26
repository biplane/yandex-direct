<?php

namespace Biplane\YandexDirectBundle\Contract;

/**
 * @codeCoverageIgnore
 * @SuppressWarnings(PHPMD)
 */
class NewReportInfo
{
    /**
     * @var int
     */
    protected $CampaignID;
    /**
     * @var date
     */
    protected $StartDate;
    /**
     * @var date
     */
    protected $EndDate;
    /**
     * @var string[]
     */
    protected $GroupByColumns;
    /**
     * @var NewReportFilterInfo
     */
    protected $Filter;
    /**
     * @var int
     */
    protected $Limit;
    /**
     * @var int
     */
    protected $Offset;
    /**
     * @var string
     */
    protected $GroupByDate;
    /**
     * @var string[]
     */
    protected $OrderBy;
    /**
     * @var string
     */
    protected $TypeResultReport;
    /**
     * @var int
     */
    protected $CompressReport;

    /**
     * @return int
     */
    public function getCampaignID()
    {
        return $this->CampaignID;
    }

    /**
     * @param int $CampaignID
     * @return NewReportInfo
     */
    public function setCampaignID($CampaignID)
    {
        $this->CampaignID = $CampaignID;

        return $this;
    }

    /**
     * @return date
     */
    public function getStartDate()
    {
        return $this->StartDate;
    }

    /**
     * @param date $StartDate
     * @return NewReportInfo
     */
    public function setStartDate($StartDate)
    {
        $this->StartDate = $StartDate;

        return $this;
    }

    /**
     * @return date
     */
    public function getEndDate()
    {
        return $this->EndDate;
    }

    /**
     * @param date $EndDate
     * @return NewReportInfo
     */
    public function setEndDate($EndDate)
    {
        $this->EndDate = $EndDate;

        return $this;
    }

    /**
     * @return string[]
     */
    public function getGroupByColumns()
    {
        return $this->GroupByColumns;
    }

    /**
     * @param string[] $GroupByColumns
     * @return NewReportInfo
     */
    public function setGroupByColumns(array $GroupByColumns)
    {
        $this->GroupByColumns = $GroupByColumns;

        return $this;
    }

    /**
     * @return NewReportFilterInfo
     */
    public function getFilter()
    {
        return $this->Filter;
    }

    /**
     * @param NewReportFilterInfo $Filter
     * @return NewReportInfo
     */
    public function setFilter(NewReportFilterInfo $Filter)
    {
        $this->Filter = $Filter;

        return $this;
    }

    /**
     * @return int
     */
    public function getLimit()
    {
        return $this->Limit;
    }

    /**
     * @param int $Limit
     * @return NewReportInfo
     */
    public function setLimit($Limit)
    {
        $this->Limit = $Limit;

        return $this;
    }

    /**
     * @return int
     */
    public function getOffset()
    {
        return $this->Offset;
    }

    /**
     * @param int $Offset
     * @return NewReportInfo
     */
    public function setOffset($Offset)
    {
        $this->Offset = $Offset;

        return $this;
    }

    /**
     * @return string
     */
    public function getGroupByDate()
    {
        return $this->GroupByDate;
    }

    /**
     * @param string $GroupByDate
     * @return NewReportInfo
     */
    public function setGroupByDate($GroupByDate)
    {
        $this->GroupByDate = $GroupByDate;

        return $this;
    }

    /**
     * @return string[]
     */
    public function getOrderBy()
    {
        return $this->OrderBy;
    }

    /**
     * @param string[] $OrderBy
     * @return NewReportInfo
     */
    public function setOrderBy(array $OrderBy)
    {
        $this->OrderBy = $OrderBy;

        return $this;
    }

    /**
     * @return string
     */
    public function getTypeResultReport()
    {
        return $this->TypeResultReport;
    }

    /**
     * @param string $TypeResultReport
     * @return NewReportInfo
     */
    public function setTypeResultReport($TypeResultReport)
    {
        $this->TypeResultReport = $TypeResultReport;

        return $this;
    }

    /**
     * @return int
     */
    public function getCompressReport()
    {
        return $this->CompressReport;
    }

    /**
     * @param int $CompressReport
     * @return NewReportInfo
     */
    public function setCompressReport($CompressReport)
    {
        $this->CompressReport = $CompressReport;

        return $this;
    }
}