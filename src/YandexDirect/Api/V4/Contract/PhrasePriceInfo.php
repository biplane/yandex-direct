<?php

namespace Biplane\YandexDirect\Api\V4\Contract;

/**
 * Auto-generated code.
 */
class PhrasePriceInfo
{

    protected $PhraseID = null;

    protected $BannerID = null;

    protected $CampaignID = null;

    protected $Price = null;

    protected $AutoBroker = null;

    protected $AutoBudgetPriority = null;

    protected $ContextPrice = null;

    protected $Currency = null;

    /**
     * Creates a new instance of PhrasePriceInfo.
     *
     * @return PhrasePriceInfo
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets PhraseID.
     *
     * @return int
     */
    public function getPhraseID()
    {
        return $this->PhraseID;
    }

    /**
     * Sets PhraseID.
     *
     * @param int $value
     * @return $this
     */
    public function setPhraseID($value)
    {
        $this->PhraseID = $value;

        return $this;
    }

    /**
     * Gets BannerID.
     *
     * @return int|null
     */
    public function getBannerID()
    {
        return $this->BannerID;
    }

    /**
     * Sets BannerID.
     *
     * @param int|null $value
     * @return $this
     */
    public function setBannerID($value = null)
    {
        $this->BannerID = $value;

        return $this;
    }

    /**
     * Gets CampaignID.
     *
     * @return int|null
     */
    public function getCampaignID()
    {
        return $this->CampaignID;
    }

    /**
     * Sets CampaignID.
     *
     * @param int|null $value
     * @return $this
     */
    public function setCampaignID($value = null)
    {
        $this->CampaignID = $value;

        return $this;
    }

    /**
     * Gets Price.
     *
     * @return float|null
     */
    public function getPrice()
    {
        return $this->Price;
    }

    /**
     * Sets Price.
     *
     * @param float|null $value
     * @return $this
     */
    public function setPrice($value = null)
    {
        $this->Price = $value;

        return $this;
    }

    /**
     * Gets AutoBroker.
     *
     * @return string|null
     */
    public function getAutoBroker()
    {
        return $this->AutoBroker;
    }

    /**
     * Sets AutoBroker.
     *
     * @param string|null $value
     * @return $this
     */
    public function setAutoBroker($value = null)
    {
        $this->AutoBroker = $value;

        return $this;
    }

    /**
     * Gets AutoBudgetPriority.
     *
     * @return string|null
     */
    public function getAutoBudgetPriority()
    {
        return $this->AutoBudgetPriority;
    }

    /**
     * Sets AutoBudgetPriority.
     *
     * @param string|null $value
     * @return $this
     */
    public function setAutoBudgetPriority($value = null)
    {
        $this->AutoBudgetPriority = $value;

        return $this;
    }

    /**
     * Gets ContextPrice.
     *
     * @return float|null
     */
    public function getContextPrice()
    {
        return $this->ContextPrice;
    }

    /**
     * Sets ContextPrice.
     *
     * @param float|null $value
     * @return $this
     */
    public function setContextPrice($value = null)
    {
        $this->ContextPrice = $value;

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


}

