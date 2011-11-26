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
     * @return int
     */
    public function getPhraseID()
    {
        return $this->PhraseID;
    }

    /**
     * @param int $PhraseID
     * @return PhrasePriceInfo
     */
    public function setPhraseID($PhraseID)
    {
        $this->PhraseID = $PhraseID;

        return $this;
    }

    /**
     * @return int
     */
    public function getBannerID()
    {
        return $this->BannerID;
    }

    /**
     * @param int $BannerID
     * @return PhrasePriceInfo
     */
    public function setBannerID($BannerID)
    {
        $this->BannerID = $BannerID;

        return $this;
    }

    /**
     * @return int
     */
    public function getCampaignID()
    {
        return $this->CampaignID;
    }

    /**
     * @param int $CampaignID
     * @return PhrasePriceInfo
     */
    public function setCampaignID($CampaignID)
    {
        $this->CampaignID = $CampaignID;

        return $this;
    }

    /**
     * @return float
     */
    public function getPrice()
    {
        return $this->Price;
    }

    /**
     * @param float $Price
     * @return PhrasePriceInfo
     */
    public function setPrice($Price)
    {
        $this->Price = $Price;

        return $this;
    }

    /**
     * @return string
     */
    public function getAutoBroker()
    {
        return $this->AutoBroker;
    }

    /**
     * @param string $AutoBroker
     * @return PhrasePriceInfo
     */
    public function setAutoBroker($AutoBroker)
    {
        $this->AutoBroker = $AutoBroker;

        return $this;
    }

    /**
     * @return string
     */
    public function getAutoBudgetPriority()
    {
        return $this->AutoBudgetPriority;
    }

    /**
     * @param string $AutoBudgetPriority
     * @return PhrasePriceInfo
     */
    public function setAutoBudgetPriority($AutoBudgetPriority)
    {
        $this->AutoBudgetPriority = $AutoBudgetPriority;

        return $this;
    }

    /**
     * @return float
     */
    public function getContextPrice()
    {
        return $this->ContextPrice;
    }

    /**
     * @param float $ContextPrice
     * @return PhrasePriceInfo
     */
    public function setContextPrice($ContextPrice)
    {
        $this->ContextPrice = $ContextPrice;

        return $this;
    }
}