<?php

declare(strict_types=1);

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
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets CampaignID.
     */
    public function getCampaignID(): int
    {
        return $this->CampaignID;
    }

    /**
     * Sets CampaignID.
     *
     * @return $this
     */
    public function setCampaignID(int $value)
    {
        $this->CampaignID = $value;

        return $this;
    }

    /**
     * Gets StartDate.
     */
    public function getStartDate(): string
    {
        return $this->StartDate;
    }

    /**
     * Sets StartDate.
     *
     * @return $this
     */
    public function setStartDate(string $value)
    {
        $this->StartDate = $value;

        return $this;
    }

    /**
     * Gets EndDate.
     */
    public function getEndDate(): string
    {
        return $this->EndDate;
    }

    /**
     * Sets EndDate.
     *
     * @return $this
     */
    public function setEndDate(string $value)
    {
        $this->EndDate = $value;

        return $this;
    }

    /**
     * Gets GroupByColumns.
     *
     * @return string[]|null
     */
    public function getGroupByColumns(): ?array
    {
        return $this->GroupByColumns;
    }

    /**
     * Sets GroupByColumns.
     *
     * @param string[]|null $value
     *
     * @return $this
     */
    public function setGroupByColumns(?array $value = null)
    {
        $this->GroupByColumns = $value;

        return $this;
    }

    /**
     * Gets Filter.
     */
    public function getFilter(): ?NewReportFilterInfo
    {
        return $this->Filter;
    }

    /**
     * Sets Filter.
     *
     * @return $this
     */
    public function setFilter(?NewReportFilterInfo $value = null)
    {
        $this->Filter = $value;

        return $this;
    }

    /**
     * Gets Limit.
     */
    public function getLimit(): ?int
    {
        return $this->Limit;
    }

    /**
     * Sets Limit.
     *
     * @return $this
     */
    public function setLimit(?int $value = null)
    {
        $this->Limit = $value;

        return $this;
    }

    /**
     * Gets Offset.
     */
    public function getOffset(): ?int
    {
        return $this->Offset;
    }

    /**
     * Sets Offset.
     *
     * @return $this
     */
    public function setOffset(?int $value = null)
    {
        $this->Offset = $value;

        return $this;
    }

    /**
     * Gets GroupByDate.
     */
    public function getGroupByDate(): ?string
    {
        return $this->GroupByDate;
    }

    /**
     * Sets GroupByDate.
     *
     * @return $this
     */
    public function setGroupByDate(?string $value = null)
    {
        $this->GroupByDate = $value;

        return $this;
    }

    /**
     * Gets OrderBy.
     *
     * @return string[]|null
     */
    public function getOrderBy(): ?array
    {
        return $this->OrderBy;
    }

    /**
     * Sets OrderBy.
     *
     * @param string[]|null $value
     *
     * @return $this
     */
    public function setOrderBy(?array $value = null)
    {
        $this->OrderBy = $value;

        return $this;
    }

    /**
     * Gets TypeResultReport.
     */
    public function getTypeResultReport(): ?string
    {
        return $this->TypeResultReport;
    }

    /**
     * Sets TypeResultReport.
     *
     * @return $this
     */
    public function setTypeResultReport(?string $value = null)
    {
        $this->TypeResultReport = $value;

        return $this;
    }

    /**
     * Gets CompressReport.
     */
    public function getCompressReport(): ?int
    {
        return $this->CompressReport;
    }

    /**
     * Sets CompressReport.
     *
     * @return $this
     */
    public function setCompressReport(?int $value = null)
    {
        $this->CompressReport = $value;

        return $this;
    }

    /**
     * Gets Currency.
     */
    public function getCurrency(): ?string
    {
        return $this->Currency;
    }

    /**
     * Sets Currency.
     *
     * @return $this
     */
    public function setCurrency(?string $value = null)
    {
        $this->Currency = $value;

        return $this;
    }

    /**
     * Gets IncludeVAT.
     */
    public function getIncludeVAT(): ?string
    {
        return $this->IncludeVAT;
    }

    /**
     * Sets IncludeVAT.
     *
     * @return $this
     */
    public function setIncludeVAT(?string $value = null)
    {
        $this->IncludeVAT = $value;

        return $this;
    }

    /**
     * Gets IncludeDiscount.
     */
    public function getIncludeDiscount(): ?string
    {
        return $this->IncludeDiscount;
    }

    /**
     * Sets IncludeDiscount.
     *
     * @return $this
     */
    public function setIncludeDiscount(?string $value = null)
    {
        $this->IncludeDiscount = $value;

        return $this;
    }
}
