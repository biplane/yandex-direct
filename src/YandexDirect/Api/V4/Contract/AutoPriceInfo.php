<?php

namespace Biplane\YandexDirect\Api\V4\Contract;

/**
 * Auto-generated code.
 */
class AutoPriceInfo
{

    protected $CampaignID = null;

    protected $BannerIDS = null;

    protected $PhraseIDS = null;

    protected $Mode = null;

    protected $SinglePrice = null;

    protected $PriceBase = null;

    protected $ProcBase = null;

    protected $MaxPrice = null;

    protected $Proc = null;

    protected $UpdatePhrases = null;

    protected $UpdateCategories = null;

    protected $Scope = null;

    protected $PhrasesType = null;

    protected $Price = null;

    protected $ContextPrice = null;

    protected $BannersType = null;

    protected $DontWaitForPriceUpdate = null;

    protected $Currency = null;

    /**
     * Creates a new instance of AutoPriceInfo.
     *
     * @return AutoPriceInfo
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets CampaignID.
     *
     * @return int
     */
    public function getCampaignID()
    {
        return $this->CampaignID;
    }

    /**
     * Sets CampaignID.
     *
     * @param int $value
     * @return $this
     */
    public function setCampaignID($value)
    {
        $this->CampaignID = $value;

        return $this;
    }

    /**
     * Gets BannerIDS.
     *
     * @return int[]|null
     */
    public function getBannerIDS()
    {
        return $this->BannerIDS;
    }

    /**
     * Sets BannerIDS.
     *
     * @param array|null $value
     * @return $this
     */
    public function setBannerIDS(array $value = null)
    {
        $this->BannerIDS = $value;

        return $this;
    }

    /**
     * Gets PhraseIDS.
     *
     * @return int[]|null
     */
    public function getPhraseIDS()
    {
        return $this->PhraseIDS;
    }

    /**
     * Sets PhraseIDS.
     *
     * @param array|null $value
     * @return $this
     */
    public function setPhraseIDS(array $value = null)
    {
        $this->PhraseIDS = $value;

        return $this;
    }

    /**
     * Gets Mode.
     *
     * @return string
     */
    public function getMode()
    {
        return $this->Mode;
    }

    /**
     * Sets Mode.
     *
     * @param string $value
     * @return $this
     */
    public function setMode($value)
    {
        $this->Mode = $value;

        return $this;
    }

    /**
     * Gets SinglePrice.
     *
     * @return float|null
     */
    public function getSinglePrice()
    {
        return $this->SinglePrice;
    }

    /**
     * Sets SinglePrice.
     *
     * @param float|null $value
     * @return $this
     */
    public function setSinglePrice($value = null)
    {
        $this->SinglePrice = $value;

        return $this;
    }

    /**
     * Gets PriceBase.
     *
     * @return string|null
     */
    public function getPriceBase()
    {
        return $this->PriceBase;
    }

    /**
     * Sets PriceBase.
     *
     * @param string|null $value
     * @return $this
     */
    public function setPriceBase($value = null)
    {
        $this->PriceBase = $value;

        return $this;
    }

    /**
     * Gets ProcBase.
     *
     * @return string|null
     */
    public function getProcBase()
    {
        return $this->ProcBase;
    }

    /**
     * Sets ProcBase.
     *
     * @param string|null $value
     * @return $this
     */
    public function setProcBase($value = null)
    {
        $this->ProcBase = $value;

        return $this;
    }

    /**
     * Gets MaxPrice.
     *
     * @return float|null
     */
    public function getMaxPrice()
    {
        return $this->MaxPrice;
    }

    /**
     * Sets MaxPrice.
     *
     * @param float|null $value
     * @return $this
     */
    public function setMaxPrice($value = null)
    {
        $this->MaxPrice = $value;

        return $this;
    }

    /**
     * Gets Proc.
     *
     * @return int|null
     */
    public function getProc()
    {
        return $this->Proc;
    }

    /**
     * Sets Proc.
     *
     * @param int|null $value
     * @return $this
     */
    public function setProc($value = null)
    {
        $this->Proc = $value;

        return $this;
    }

    /**
     * Gets UpdatePhrases.
     *
     * @return string|null
     */
    public function getUpdatePhrases()
    {
        return $this->UpdatePhrases;
    }

    /**
     * Sets UpdatePhrases.
     *
     * @param string|null $value
     * @return $this
     */
    public function setUpdatePhrases($value = null)
    {
        $this->UpdatePhrases = $value;

        return $this;
    }

    /**
     * Gets UpdateCategories.
     *
     * @return string|null
     */
    public function getUpdateCategories()
    {
        return $this->UpdateCategories;
    }

    /**
     * Sets UpdateCategories.
     *
     * @param string|null $value
     * @return $this
     */
    public function setUpdateCategories($value = null)
    {
        $this->UpdateCategories = $value;

        return $this;
    }

    /**
     * Gets Scope.
     *
     * @return int|null
     */
    public function getScope()
    {
        return $this->Scope;
    }

    /**
     * Sets Scope.
     *
     * @param int|null $value
     * @return $this
     */
    public function setScope($value = null)
    {
        $this->Scope = $value;

        return $this;
    }

    /**
     * Gets PhrasesType.
     *
     * @return string|null
     */
    public function getPhrasesType()
    {
        return $this->PhrasesType;
    }

    /**
     * Sets PhrasesType.
     *
     * @param string|null $value
     * @return $this
     */
    public function setPhrasesType($value = null)
    {
        $this->PhrasesType = $value;

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
     * Gets BannersType.
     *
     * @return string|null
     */
    public function getBannersType()
    {
        return $this->BannersType;
    }

    /**
     * Sets BannersType.
     *
     * @param string|null $value
     * @return $this
     */
    public function setBannersType($value = null)
    {
        $this->BannersType = $value;

        return $this;
    }

    /**
     * Gets DontWaitForPriceUpdate.
     *
     * @return string|null
     */
    public function getDontWaitForPriceUpdate()
    {
        return $this->DontWaitForPriceUpdate;
    }

    /**
     * Sets DontWaitForPriceUpdate.
     *
     * @param string|null $value
     * @return $this
     */
    public function setDontWaitForPriceUpdate($value = null)
    {
        $this->DontWaitForPriceUpdate = $value;

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

