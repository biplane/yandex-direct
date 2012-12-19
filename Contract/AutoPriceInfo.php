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
     * @var int[]
     */
    protected $BannerIDS;
    /**
     * @var int[]
     */
    protected $PhraseIDS;
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
     * @var float
     */
    protected $Price;
    /**
     * @var float
     */
    protected $ContextPrice;
    /**
     * @var string
     */
    protected $BannersType;

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
     * @return AutoPriceInfo
     */
    public function setCampaignID($CampaignID)
    {
        $this->CampaignID = $CampaignID;

        return $this;
    }

    /**
     * Gets the BannerIDS.
     *
     * @return int[]
     */
    public function getBannerIDS()
    {
        return $this->BannerIDS;
    }

    /**
     * Sets the BannerIDS.
     *
     * @param int[] $BannerIDS
     *
     * @return AutoPriceInfo
     */
    public function setBannerIDS(array $BannerIDS)
    {
        $this->BannerIDS = $BannerIDS;

        return $this;
    }

    /**
     * Gets the PhraseIDS.
     *
     * @return int[]
     */
    public function getPhraseIDS()
    {
        return $this->PhraseIDS;
    }

    /**
     * Sets the PhraseIDS.
     *
     * @param int[] $PhraseIDS
     *
     * @return AutoPriceInfo
     */
    public function setPhraseIDS(array $PhraseIDS)
    {
        $this->PhraseIDS = $PhraseIDS;

        return $this;
    }

    /**
     * Gets the Mode.
     *
     * @return string
     */
    public function getMode()
    {
        return $this->Mode;
    }

    /**
     * Sets the Mode.
     *
     * @param string $Mode
     *
     * @return AutoPriceInfo
     */
    public function setMode($Mode)
    {
        $this->Mode = $Mode;

        return $this;
    }

    /**
     * Gets the SinglePrice.
     *
     * @return float
     */
    public function getSinglePrice()
    {
        return $this->SinglePrice;
    }

    /**
     * Sets the SinglePrice.
     *
     * @param float $SinglePrice
     *
     * @return AutoPriceInfo
     */
    public function setSinglePrice($SinglePrice)
    {
        $this->SinglePrice = $SinglePrice;

        return $this;
    }

    /**
     * Gets the PriceBase.
     *
     * @return string
     */
    public function getPriceBase()
    {
        return $this->PriceBase;
    }

    /**
     * Sets the PriceBase.
     *
     * @param string $PriceBase
     *
     * @return AutoPriceInfo
     */
    public function setPriceBase($PriceBase)
    {
        $this->PriceBase = $PriceBase;

        return $this;
    }

    /**
     * Gets the ProcBase.
     *
     * @return string
     */
    public function getProcBase()
    {
        return $this->ProcBase;
    }

    /**
     * Sets the ProcBase.
     *
     * @param string $ProcBase
     *
     * @return AutoPriceInfo
     */
    public function setProcBase($ProcBase)
    {
        $this->ProcBase = $ProcBase;

        return $this;
    }

    /**
     * Gets the MaxPrice.
     *
     * @return float
     */
    public function getMaxPrice()
    {
        return $this->MaxPrice;
    }

    /**
     * Sets the MaxPrice.
     *
     * @param float $MaxPrice
     *
     * @return AutoPriceInfo
     */
    public function setMaxPrice($MaxPrice)
    {
        $this->MaxPrice = $MaxPrice;

        return $this;
    }

    /**
     * Gets the Proc.
     *
     * @return int
     */
    public function getProc()
    {
        return $this->Proc;
    }

    /**
     * Sets the Proc.
     *
     * @param int $Proc
     *
     * @return AutoPriceInfo
     */
    public function setProc($Proc)
    {
        $this->Proc = $Proc;

        return $this;
    }

    /**
     * Gets the UpdatePhrases.
     *
     * @return string
     */
    public function getUpdatePhrases()
    {
        return $this->UpdatePhrases;
    }

    /**
     * Sets the UpdatePhrases.
     *
     * @param string $UpdatePhrases
     *
     * @return AutoPriceInfo
     */
    public function setUpdatePhrases($UpdatePhrases)
    {
        $this->UpdatePhrases = $UpdatePhrases;

        return $this;
    }

    /**
     * Gets the UpdateCategories.
     *
     * @return string
     */
    public function getUpdateCategories()
    {
        return $this->UpdateCategories;
    }

    /**
     * Sets the UpdateCategories.
     *
     * @param string $UpdateCategories
     *
     * @return AutoPriceInfo
     */
    public function setUpdateCategories($UpdateCategories)
    {
        $this->UpdateCategories = $UpdateCategories;

        return $this;
    }

    /**
     * Gets the Scope.
     *
     * @return int
     */
    public function getScope()
    {
        return $this->Scope;
    }

    /**
     * Sets the Scope.
     *
     * @param int $Scope
     *
     * @return AutoPriceInfo
     */
    public function setScope($Scope)
    {
        $this->Scope = $Scope;

        return $this;
    }

    /**
     * Gets the PhrasesType.
     *
     * @return string
     */
    public function getPhrasesType()
    {
        return $this->PhrasesType;
    }

    /**
     * Sets the PhrasesType.
     *
     * @param string $PhrasesType
     *
     * @return AutoPriceInfo
     */
    public function setPhrasesType($PhrasesType)
    {
        $this->PhrasesType = $PhrasesType;

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
     * @return AutoPriceInfo
     */
    public function setPrice($Price)
    {
        $this->Price = $Price;

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
     * @return AutoPriceInfo
     */
    public function setContextPrice($ContextPrice)
    {
        $this->ContextPrice = $ContextPrice;

        return $this;
    }

    /**
     * Gets the BannersType.
     *
     * @return string
     */
    public function getBannersType()
    {
        return $this->BannersType;
    }

    /**
     * Sets the BannersType.
     *
     * @param string $BannersType
     *
     * @return AutoPriceInfo
     */
    public function setBannersType($BannersType)
    {
        $this->BannersType = $BannersType;

        return $this;
    }
}