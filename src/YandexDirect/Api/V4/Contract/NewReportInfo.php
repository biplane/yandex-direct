<?php

namespace Biplane\YandexDirect\Api\V4\Contract;

/**
 * Auto-generated code.
 */
class NewReportInfo
{

    protected $CampaignID = null;

    protected $StartDate = null;

    protected $EndDate = null;

    protected $GroupByColumns = null;

    protected $Filter = null;

    protected $Limit = null;

    protected $Offset = null;

    protected $GroupByDate = null;

    protected $OrderBy = null;

    protected $TypeResultReport = null;

    protected $CompressReport = null;

    protected $Currency = null;

    protected $IncludeVAT = null;

    protected $IncludeDiscount = null;

    /**
     * Creates a new instance of NewReportInfo.
     *
     * @return NewReportInfo
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets CampaignID.
     *
     * @return int
     */
    public function getCampaignID()
    {
        return $this->CampaignID;
    }

    /**
     * Sets CampaignID.
     *
     * @param int $value
     * @return $this
     */
    public function setCampaignID($value)
    {
        $this->CampaignID = $value;

        return $this;
    }

    /**
     * Gets StartDate.
     *
     * @return string
     */
    public function getStartDate()
    {
        return $this->StartDate;
    }

    /**
     * Sets StartDate.
     *
     * @param string $value
     * @return $this
     */
    public function setStartDate($value)
    {
        $this->StartDate = $value;

        return $this;
    }

    /**
     * Gets EndDate.
     *
     * @return string
     */
    public function getEndDate()
    {
        return $this->EndDate;
    }

    /**
     * Sets EndDate.
     *
     * @param string $value
     * @return $this
     */
    public function setEndDate($value)
    {
        $this->EndDate = $value;

        return $this;
    }

    /**
     * Gets GroupByColumns.
     *
     * @return string[]|null
     */
    public function getGroupByColumns()
    {
        return $this->GroupByColumns;
    }

    /**
     * Sets GroupByColumns.
     *
     * @param array|null $value
     * @return $this
     */
    public function setGroupByColumns(array $value = null)
    {
        $this->GroupByColumns = $value;

        return $this;
    }

    /**
     * Gets Filter.
     *
     * @return NewReportFilterInfo|null
     */
    public function getFilter()
    {
        return $this->Filter;
    }

    /**
     * Sets Filter.
     *
     * @param NewReportFilterInfo|null $value
     * @return $this
     */
    public function setFilter(NewReportFilterInfo $value = null)
    {
        $this->Filter = $value;

        return $this;
    }

    /**
     * Gets Limit.
     *
     * @return int|null
     */
    public function getLimit()
    {
        return $this->Limit;
    }

    /**
     * Sets Limit.
     *
     * @param int|null $value
     * @return $this
     */
    public function setLimit($value = null)
    {
        $this->Limit = $value;

        return $this;
    }

    /**
     * Gets Offset.
     *
     * @return int|null
     */
    public function getOffset()
    {
        return $this->Offset;
    }

    /**
     * Sets Offset.
     *
     * @param int|null $value
     * @return $this
     */
    public function setOffset($value = null)
    {
        $this->Offset = $value;

        return $this;
    }

    /**
     * Gets GroupByDate.
     *
     * @return string|null
     */
    public function getGroupByDate()
    {
        return $this->GroupByDate;
    }

    /**
     * Sets GroupByDate.
     *
     * @param string|null $value
     * @return $this
     */
    public function setGroupByDate($value = null)
    {
        $this->GroupByDate = $value;

        return $this;
    }

    /**
     * Gets OrderBy.
     *
     * @return string[]|null
     */
    public function getOrderBy()
    {
        return $this->OrderBy;
    }

    /**
     * Sets OrderBy.
     *
     * @param array|null $value
     * @return $this
     */
    public function setOrderBy(array $value = null)
    {
        $this->OrderBy = $value;

        return $this;
    }

    /**
     * Gets TypeResultReport.
     *
     * @return string|null
     */
    public function getTypeResultReport()
    {
        return $this->TypeResultReport;
    }

    /**
     * Sets TypeResultReport.
     *
     * @param string|null $value
     * @return $this
     */
    public function setTypeResultReport($value = null)
    {
        $this->TypeResultReport = $value;

        return $this;
    }

    /**
     * Gets CompressReport.
     *
     * @return int|null
     */
    public function getCompressReport()
    {
        return $this->CompressReport;
    }

    /**
     * Sets CompressReport.
     *
     * @param int|null $value
     * @return $this
     */
    public function setCompressReport($value = null)
    {
        $this->CompressReport = $value;

        return $this;
    }

    /**
     * Gets Currency.
     *
     * @return string|null
     */
    public function getCurrency()
    {
        return $this->Currency;
    }

    /**
     * Sets Currency.
     *
     * @param string|null $value
     * @return $this
     */
    public function setCurrency($value = null)
    {
        $this->Currency = $value;

        return $this;
    }

    /**
     * Gets IncludeVAT.
     *
     * @return string|null
     */
    public function getIncludeVAT()
    {
        return $this->IncludeVAT;
    }

    /**
     * Sets IncludeVAT.
     *
     * @param string|null $value
     * @return $this
     */
    public function setIncludeVAT($value = null)
    {
        $this->IncludeVAT = $value;

        return $this;
    }

    /**
     * Gets IncludeDiscount.
     *
     * @return string|null
     */
    public function getIncludeDiscount()
    {
        return $this->IncludeDiscount;
    }

    /**
     * Sets IncludeDiscount.
     *
     * @param string|null $value
     * @return $this
     */
    public function setIncludeDiscount($value = null)
    {
        $this->IncludeDiscount = $value;

        return $this;
    }


}

