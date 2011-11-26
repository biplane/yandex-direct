<?php

namespace Biplane\YandexDirectBundle\Contract;

/**
 * @codeCoverageIgnore
 * @SuppressWarnings(PHPMD)
 */
class AutoPriceInfo
{
    /**
     * @var int
     */
    protected $CampaignID;
    /**
     * @var string
     */
    protected $Mode;
    /**
     * @var float
     */
    protected $SinglePrice;
    /**
     * @var string
     */
    protected $PriceBase;
    /**
     * @var string
     */
    protected $ProcBase;
    /**
     * @var float
     */
    protected $MaxPrice;
    /**
     * @var int
     */
    protected $Proc;
    /**
     * @var string
     */
    protected $UpdatePhrases;
    /**
     * @var string
     */
    protected $UpdateCategories;
    /**
     * @var int
     */
    protected $Scope;
    /**
     * @var string
     */
    protected $PhrasesType;

    /**
     * @return int
     */
    public function getCampaignID()
    {
        return $this->CampaignID;
    }

    /**
     * @param int $CampaignID
     * @return AutoPriceInfo
     */
    public function setCampaignID($CampaignID)
    {
        $this->CampaignID = $CampaignID;

        return $this;
    }

    /**
     * @return string
     */
    public function getMode()
    {
        return $this->Mode;
    }

    /**
     * @param string $Mode
     * @return AutoPriceInfo
     */
    public function setMode($Mode)
    {
        $this->Mode = $Mode;

        return $this;
    }

    /**
     * @return float
     */
    public function getSinglePrice()
    {
        return $this->SinglePrice;
    }

    /**
     * @param float $SinglePrice
     * @return AutoPriceInfo
     */
    public function setSinglePrice($SinglePrice)
    {
        $this->SinglePrice = $SinglePrice;

        return $this;
    }

    /**
     * @return string
     */
    public function getPriceBase()
    {
        return $this->PriceBase;
    }

    /**
     * @param string $PriceBase
     * @return AutoPriceInfo
     */
    public function setPriceBase($PriceBase)
    {
        $this->PriceBase = $PriceBase;

        return $this;
    }

    /**
     * @return string
     */
    public function getProcBase()
    {
        return $this->ProcBase;
    }

    /**
     * @param string $ProcBase
     * @return AutoPriceInfo
     */
    public function setProcBase($ProcBase)
    {
        $this->ProcBase = $ProcBase;

        return $this;
    }

    /**
     * @return float
     */
    public function getMaxPrice()
    {
        return $this->MaxPrice;
    }

    /**
     * @param float $MaxPrice
     * @return AutoPriceInfo
     */
    public function setMaxPrice($MaxPrice)
    {
        $this->MaxPrice = $MaxPrice;

        return $this;
    }

    /**
     * @return int
     */
    public function getProc()
    {
        return $this->Proc;
    }

    /**
     * @param int $Proc
     * @return AutoPriceInfo
     */
    public function setProc($Proc)
    {
        $this->Proc = $Proc;

        return $this;
    }

    /**
     * @return string
     */
    public function getUpdatePhrases()
    {
        return $this->UpdatePhrases;
    }

    /**
     * @param string $UpdatePhrases
     * @return AutoPriceInfo
     */
    public function setUpdatePhrases($UpdatePhrases)
    {
        $this->UpdatePhrases = $UpdatePhrases;

        return $this;
    }

    /**
     * @return string
     */
    public function getUpdateCategories()
    {
        return $this->UpdateCategories;
    }

    /**
     * @param string $UpdateCategories
     * @return AutoPriceInfo
     */
    public function setUpdateCategories($UpdateCategories)
    {
        $this->UpdateCategories = $UpdateCategories;

        return $this;
    }

    /**
     * @return int
     */
    public function getScope()
    {
        return $this->Scope;
    }

    /**
     * @param int $Scope
     * @return AutoPriceInfo
     */
    public function setScope($Scope)
    {
        $this->Scope = $Scope;

        return $this;
    }

    /**
     * @return string
     */
    public function getPhrasesType()
    {
        return $this->PhrasesType;
    }

    /**
     * @param string $PhrasesType
     * @return AutoPriceInfo
     */
    public function setPhrasesType($PhrasesType)
    {
        $this->PhrasesType = $PhrasesType;

        return $this;
    }
}