<?php

namespace Biplane\YandexDirect\Api\V4\Contract;

/**
 * Auto-generated code.
 */
class GetSummaryStatRequest
{

    protected $CampaignIDS = array(
        
    );

    protected $StartDate = null;

    protected $EndDate = null;

    protected $Currency = null;

    protected $IncludeVAT = null;

    protected $IncludeDiscount = null;

    /**
     * Creates a new instance of GetSummaryStatRequest.
     *
     * @return GetSummaryStatRequest
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets CampaignIDS.
     *
     * @return int[]
     */
    public function getCampaignIDS()
    {
        return $this->CampaignIDS;
    }

    /**
     * Sets CampaignIDS.
     *
     * @param int[] $value
     * @return $this
     */
    public function setCampaignIDS(array $value)
    {
        $this->CampaignIDS = $value;

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

