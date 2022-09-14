<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V4\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class GetSummaryStatRequest
{
    protected $CampaignIDS = [];

    protected $StartDate = null;

    protected $EndDate = null;

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

    /**
     * @return int[]
     */
    public function getCampaignIDS(): array
    {
        return $this->CampaignIDS;
    }

    /**
     * @param int[] $value
     *
     * @return $this
     */
    public function setCampaignIDS(array $value)
    {
        $this->CampaignIDS = $value;

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
