<?php

namespace Biplane\YandexDirectBundle\Contract;

/**
 * @codeCoverageIgnore
 * @SuppressWarnings(PHPMD)
 */
class PhrasePriceInfo
{
    /**
     * @var int
     */
    protected $PhraseID;
    /**
     * @var int
     */
    protected $BannerID;
    /**
     * @var int
     */
    protected $CampaignID;
    /**
     * @var float
     */
    protected $Price;
    /**
     * @var string
     */
    protected $AutoBroker;
    /**
     * @var string
     */
    protected $AutoBudgetPriority;
    /**
     * @var float
     */
    protected $ContextPrice;
    /**
     * @var string
     */
    protected $Currency;

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
     * Gets the PhraseID.
     *
     * @return int
     */
    public function getPhraseID()
    {
        return $this->PhraseID;
    }

    /**
     * Sets the PhraseID.
     *
     * @param int $PhraseID
     *
     * @return PhrasePriceInfo
     */
    public function setPhraseID($PhraseID)
    {
        $this->PhraseID = $PhraseID;

        return $this;
    }

    /**
     * Gets the BannerID.
     *
     * @return int
     */
    public function getBannerID()
    {
        return $this->BannerID;
    }

    /**
     * Sets the BannerID.
     *
     * @param int $BannerID
     *
     * @return PhrasePriceInfo
     */
    public function setBannerID($BannerID)
    {
        $this->BannerID = $BannerID;

        return $this;
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
     * @return PhrasePriceInfo
     */
    public function setCampaignID($CampaignID)
    {
        $this->CampaignID = $CampaignID;

        return $this;
    }

    /**
     * Gets the Price.
     *
     * @return float
     */
    public function getPrice()
    {
        return $this->Price;
    }

    /**
     * Sets the Price.
     *
     * @param float $Price
     *
     * @return PhrasePriceInfo
     */
    public function setPrice($Price)
    {
        $this->Price = $Price;

        return $this;
    }

    /**
     * Gets the AutoBroker.
     *
     * @return string
     */
    public function getAutoBroker()
    {
        return $this->AutoBroker;
    }

    /**
     * Sets the AutoBroker.
     *
     * @param string $AutoBroker
     *
     * @return PhrasePriceInfo
     */
    public function setAutoBroker($AutoBroker)
    {
        $this->AutoBroker = $AutoBroker;

        return $this;
    }

    /**
     * Gets the AutoBudgetPriority.
     *
     * @return string
     */
    public function getAutoBudgetPriority()
    {
        return $this->AutoBudgetPriority;
    }

    /**
     * Sets the AutoBudgetPriority.
     *
     * @param string $AutoBudgetPriority
     *
     * @return PhrasePriceInfo
     */
    public function setAutoBudgetPriority($AutoBudgetPriority)
    {
        $this->AutoBudgetPriority = $AutoBudgetPriority;

        return $this;
    }

    /**
     * Gets the ContextPrice.
     *
     * @return float
     */
    public function getContextPrice()
    {
        return $this->ContextPrice;
    }

    /**
     * Sets the ContextPrice.
     *
     * @param float $ContextPrice
     *
     * @return PhrasePriceInfo
     */
    public function setContextPrice($ContextPrice)
    {
        $this->ContextPrice = $ContextPrice;

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
     * @return PhrasePriceInfo
     */
    public function setCurrency($Currency)
    {
        $this->Currency = $Currency;

        return $this;
    }
}