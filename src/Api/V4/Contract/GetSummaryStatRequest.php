<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V4\Contract;

/**
 * Auto-generated code.
 */
class GetSummaryStatRequest
{
    protected $CampaignIDS = [];

    protected $StartDate = null;

    protected $EndDate = null;

    protected $Currency = null;

    protected $IncludeVAT = null;

    protected $IncludeDiscount = null;

    /**
     * Creates a new instance of GetSummaryStatRequest.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets CampaignIDS.
     *
     * @return int[]
     */
    public function getCampaignIDS(): array
    {
        return $this->CampaignIDS;
    }

    /**
     * Sets CampaignIDS.
     *
     * @param int[] $value
     *
     * @return $this
     */
    public function setCampaignIDS(array $value)
    {
        $this->CampaignIDS = $value;

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
