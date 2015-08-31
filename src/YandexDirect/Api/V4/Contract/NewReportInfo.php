<?php

namespace Biplane\YandexDirect\Api\V4\Contract;

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
     * @var string
     */
    protected $StartDate;
    /**
     * @var string
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
     * @var string
     */
    protected $Currency;
    /**
     * @var string
     */
    protected $IncludeVAT;
    /**
     * @var string
     */
    protected $IncludeDiscount;

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
     * Gets the CampaignID.
     *
     * @return int
     */
    public function getCampaignID()
    {
        return $this->CampaignID;
    }

    /**
     * Sets the CampaignID.
     *
     * @param int $CampaignID
     *
     * @return NewReportInfo
     */
    public function setCampaignID($CampaignID)
    {
        $this->CampaignID = $CampaignID;

        return $this;
    }

    /**
     * Gets the StartDate.
     *
     * @return string
     */
    public function getStartDate()
    {
        return $this->StartDate;
    }

    /**
     * Sets the StartDate.
     *
     * @param string $StartDate
     *
     * @return NewReportInfo
     */
    public function setStartDate($StartDate)
    {
        $this->StartDate = $StartDate;

        return $this;
    }

    /**
     * Gets the EndDate.
     *
     * @return string
     */
    public function getEndDate()
    {
        return $this->EndDate;
    }

    /**
     * Sets the EndDate.
     *
     * @param string $EndDate
     *
     * @return NewReportInfo
     */
    public function setEndDate($EndDate)
    {
        $this->EndDate = $EndDate;

        return $this;
    }

    /**
     * Gets the GroupByColumns.
     *
     * @return string[]
     */
    public function getGroupByColumns()
    {
        return $this->GroupByColumns;
    }

    /**
     * Sets the GroupByColumns.
     *
     * @param string[] $GroupByColumns
     *
     * @return NewReportInfo
     */
    public function setGroupByColumns(array $GroupByColumns)
    {
        $this->GroupByColumns = $GroupByColumns;

        return $this;
    }

    /**
     * Gets the Filter.
     *
     * @return NewReportFilterInfo
     */
    public function getFilter()
    {
        return $this->Filter;
    }

    /**
     * Sets the Filter.
     *
     * @param NewReportFilterInfo $Filter
     *
     * @return NewReportInfo
     */
    public function setFilter(NewReportFilterInfo $Filter)
    {
        $this->Filter = $Filter;

        return $this;
    }

    /**
     * Gets the Limit.
     *
     * @return int
     */
    public function getLimit()
    {
        return $this->Limit;
    }

    /**
     * Sets the Limit.
     *
     * @param int $Limit
     *
     * @return NewReportInfo
     */
    public function setLimit($Limit)
    {
        $this->Limit = $Limit;

        return $this;
    }

    /**
     * Gets the Offset.
     *
     * @return int
     */
    public function getOffset()
    {
        return $this->Offset;
    }

    /**
     * Sets the Offset.
     *
     * @param int $Offset
     *
     * @return NewReportInfo
     */
    public function setOffset($Offset)
    {
        $this->Offset = $Offset;

        return $this;
    }

    /**
     * Gets the GroupByDate.
     *
     * @return string
     */
    public function getGroupByDate()
    {
        return $this->GroupByDate;
    }

    /**
     * Sets the GroupByDate.
     *
     * @param string $GroupByDate
     *
     * @return NewReportInfo
     */
    public function setGroupByDate($GroupByDate)
    {
        $this->GroupByDate = $GroupByDate;

        return $this;
    }

    /**
     * Gets the OrderBy.
     *
     * @return string[]
     */
    public function getOrderBy()
    {
        return $this->OrderBy;
    }

    /**
     * Sets the OrderBy.
     *
     * @param string[] $OrderBy
     *
     * @return NewReportInfo
     */
    public function setOrderBy(array $OrderBy)
    {
        $this->OrderBy = $OrderBy;

        return $this;
    }

    /**
     * Gets the TypeResultReport.
     *
     * @return string
     */
    public function getTypeResultReport()
    {
        return $this->TypeResultReport;
    }

    /**
     * Sets the TypeResultReport.
     *
     * @param string $TypeResultReport
     *
     * @return NewReportInfo
     */
    public function setTypeResultReport($TypeResultReport)
    {
        $this->TypeResultReport = $TypeResultReport;

        return $this;
    }

    /**
     * Gets the CompressReport.
     *
     * @return int
     */
    public function getCompressReport()
    {
        return $this->CompressReport;
    }

    /**
     * Sets the CompressReport.
     *
     * @param int $CompressReport
     *
     * @return NewReportInfo
     */
    public function setCompressReport($CompressReport)
    {
        $this->CompressReport = $CompressReport;

        return $this;
    }

    /**
     * Gets the Currency.
     *
     * @return string
     */
    public function getCurrency()
    {
        return $this->Currency;
    }

    /**
     * Sets the Currency.
     *
     * @param string $Currency
     *
     * @return NewReportInfo
     */
    public function setCurrency($Currency)
    {
        $this->Currency = $Currency;

        return $this;
    }

    /**
     * Gets the IncludeVAT.
     *
     * @return string
     */
    public function getIncludeVAT()
    {
        return $this->IncludeVAT;
    }

    /**
     * Sets the IncludeVAT.
     *
     * @param string $IncludeVAT
     *
     * @return NewReportInfo
     */
    public function setIncludeVAT($IncludeVAT)
    {
        $this->IncludeVAT = $IncludeVAT;

        return $this;
    }

    /**
     * Gets the IncludeDiscount.
     *
     * @return string
     */
    public function getIncludeDiscount()
    {
        return $this->IncludeDiscount;
    }

    /**
     * Sets the IncludeDiscount.
     *
     * @param string $IncludeDiscount
     *
     * @return NewReportInfo
     */
    public function setIncludeDiscount($IncludeDiscount)
    {
        $this->IncludeDiscount = $IncludeDiscount;

        return $this;
    }
}