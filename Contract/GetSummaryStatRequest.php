<?php

namespace Biplane\YandexDirectBundle\Contract;

/**
 * @codeCoverageIgnore
 * @SuppressWarnings(PHPMD)
 */
class GetSummaryStatRequest
{
    /**
     * @var int[]
     */
    protected $CampaignIDS;
    /**
     * @var string
     */
    protected $StartDate;
    /**
     * @var string
     */
    protected $EndDate;
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
     * Gets the CampaignIDS.
     *
     * @return int[]
     */
    public function getCampaignIDS()
    {
        return $this->CampaignIDS;
    }

    /**
     * Sets the CampaignIDS.
     *
     * @param int[] $CampaignIDS
     *
     * @return GetSummaryStatRequest
     */
    public function setCampaignIDS(array $CampaignIDS)
    {
        $this->CampaignIDS = $CampaignIDS;

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
     * @return GetSummaryStatRequest
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
     * @return GetSummaryStatRequest
     */
    public function setEndDate($EndDate)
    {
        $this->EndDate = $EndDate;

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
     * @return GetSummaryStatRequest
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
     * @return GetSummaryStatRequest
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
     * @return GetSummaryStatRequest
     */
    public function setIncludeDiscount($IncludeDiscount)
    {
        $this->IncludeDiscount = $IncludeDiscount;

        return $this;
    }
}