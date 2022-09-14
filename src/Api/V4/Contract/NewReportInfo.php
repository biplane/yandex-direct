<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V4\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
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
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    public function getCampaignID(): int
    {
        return $this->CampaignID;
    }

    /**
     * @return $this
     */
    public function setCampaignID(int $value)
    {
        $this->CampaignID = $value;

        return $this;
    }

    public function getStartDate(): string
    {
        return $this->StartDate;
    }

    /**
     * @return $this
     */
    public function setStartDate(string $value)
    {
        $this->StartDate = $value;

        return $this;
    }

    public function getEndDate(): string
    {
        return $this->EndDate;
    }

    /**
     * @return $this
     */
    public function setEndDate(string $value)
    {
        $this->EndDate = $value;

        return $this;
    }

    /**
     * @return string[]|null
     */
    public function getGroupByColumns(): ?array
    {
        return $this->GroupByColumns;
    }

    /**
     * @param string[]|null $value
     *
     * @return $this
     */
    public function setGroupByColumns(?array $value = null)
    {
        $this->GroupByColumns = $value;

        return $this;
    }

    public function getFilter(): ?NewReportFilterInfo
    {
        return $this->Filter;
    }

    /**
     * @return $this
     */
    public function setFilter(?NewReportFilterInfo $value = null)
    {
        $this->Filter = $value;

        return $this;
    }

    public function getLimit(): ?int
    {
        return $this->Limit;
    }

    /**
     * @return $this
     */
    public function setLimit(?int $value = null)
    {
        $this->Limit = $value;

        return $this;
    }

    public function getOffset(): ?int
    {
        return $this->Offset;
    }

    /**
     * @return $this
     */
    public function setOffset(?int $value = null)
    {
        $this->Offset = $value;

        return $this;
    }

    public function getGroupByDate(): ?string
    {
        return $this->GroupByDate;
    }

    /**
     * @return $this
     */
    public function setGroupByDate(?string $value = null)
    {
        $this->GroupByDate = $value;

        return $this;
    }

    /**
     * @return string[]|null
     */
    public function getOrderBy(): ?array
    {
        return $this->OrderBy;
    }

    /**
     * @param string[]|null $value
     *
     * @return $this
     */
    public function setOrderBy(?array $value = null)
    {
        $this->OrderBy = $value;

        return $this;
    }

    public function getTypeResultReport(): ?string
    {
        return $this->TypeResultReport;
    }

    /**
     * @return $this
     */
    public function setTypeResultReport(?string $value = null)
    {
        $this->TypeResultReport = $value;

        return $this;
    }

    public function getCompressReport(): ?int
    {
        return $this->CompressReport;
    }

    /**
     * @return $this
     */
    public function setCompressReport(?int $value = null)
    {
        $this->CompressReport = $value;

        return $this;
    }

    public function getCurrency(): ?string
    {
        return $this->Currency;
    }

    /**
     * @return $this
     */
    public function setCurrency(?string $value = null)
    {
        $this->Currency = $value;

        return $this;
    }

    public function getIncludeVAT(): ?string
    {
        return $this->IncludeVAT;
    }

    /**
     * @return $this
     */
    public function setIncludeVAT(?string $value = null)
    {
        $this->IncludeVAT = $value;

        return $this;
    }

    public function getIncludeDiscount(): ?string
    {
        return $this->IncludeDiscount;
    }

    /**
     * @return $this
     */
    public function setIncludeDiscount(?string $value = null)
    {
        $this->IncludeDiscount = $value;

        return $this;
    }
}
