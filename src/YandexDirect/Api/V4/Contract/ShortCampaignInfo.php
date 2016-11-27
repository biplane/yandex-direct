<?php

namespace Biplane\YandexDirect\Api\V4\Contract;

/**
 * Auto-generated code.
 */
class ShortCampaignInfo
{

    protected $CampaignID = null;

    protected $Login = null;

    protected $Name = null;

    protected $StartDate = null;

    protected $StrategyName = null;

    protected $ContextStrategyName = null;

    protected $Sum = null;

    protected $Rest = null;

    protected $SumAvailableForTransfer = null;

    protected $Shows = null;

    protected $Clicks = null;

    protected $Status = null;

    protected $StatusShow = null;

    protected $StatusArchive = null;

    protected $StatusActivating = null;

    protected $StatusModerate = null;

    protected $IsActive = null;

    protected $ManagerName = null;

    protected $AgencyName = null;

    protected $Currency = null;

    protected $CampaignCurrency = null;

    protected $SourceCampaignID = null;

    protected $BonusDiscount = null;

    protected $DayBudgetEnabled = null;

    protected $EnableRelatedKeywords = null;

    protected $ExtendedAdTitleEnabled = null;

    /**
     * Creates a new instance of ShortCampaignInfo.
     *
     * @return self
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
     * @return self
     */
    public function setCampaignID($value)
    {
        $this->CampaignID = $value;

        return $this;
    }

    /**
     * Gets Login.
     *
     * @return string
     */
    public function getLogin()
    {
        return $this->Login;
    }

    /**
     * Sets Login.
     *
     * @param string $value
     * @return self
     */
    public function setLogin($value)
    {
        $this->Login = $value;

        return $this;
    }

    /**
     * Gets Name.
     *
     * @return string
     */
    public function getName()
    {
        return $this->Name;
    }

    /**
     * Sets Name.
     *
     * @param string $value
     * @return self
     */
    public function setName($value)
    {
        $this->Name = $value;

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
     * @return self
     */
    public function setStartDate($value)
    {
        $this->StartDate = $value;

        return $this;
    }

    /**
     * Gets StrategyName.
     *
     * @return string
     */
    public function getStrategyName()
    {
        return $this->StrategyName;
    }

    /**
     * Sets StrategyName.
     *
     * @param string $value
     * @return self
     */
    public function setStrategyName($value)
    {
        $this->StrategyName = $value;

        return $this;
    }

    /**
     * Gets ContextStrategyName.
     *
     * @return string
     */
    public function getContextStrategyName()
    {
        return $this->ContextStrategyName;
    }

    /**
     * Sets ContextStrategyName.
     *
     * @param string $value
     * @return self
     */
    public function setContextStrategyName($value)
    {
        $this->ContextStrategyName = $value;

        return $this;
    }

    /**
     * Gets Sum.
     *
     * @return float
     */
    public function getSum()
    {
        return $this->Sum;
    }

    /**
     * Sets Sum.
     *
     * @param float $value
     * @return self
     */
    public function setSum($value)
    {
        $this->Sum = $value;

        return $this;
    }

    /**
     * Gets Rest.
     *
     * @return float
     */
    public function getRest()
    {
        return $this->Rest;
    }

    /**
     * Sets Rest.
     *
     * @param float $value
     * @return self
     */
    public function setRest($value)
    {
        $this->Rest = $value;

        return $this;
    }

    /**
     * Gets SumAvailableForTransfer.
     *
     * @return float|null
     */
    public function getSumAvailableForTransfer()
    {
        return $this->SumAvailableForTransfer;
    }

    /**
     * Sets SumAvailableForTransfer.
     *
     * @param float|null $value
     * @return self
     */
    public function setSumAvailableForTransfer($value = null)
    {
        $this->SumAvailableForTransfer = $value;

        return $this;
    }

    /**
     * Gets Shows.
     *
     * @return int
     */
    public function getShows()
    {
        return $this->Shows;
    }

    /**
     * Sets Shows.
     *
     * @param int $value
     * @return self
     */
    public function setShows($value)
    {
        $this->Shows = $value;

        return $this;
    }

    /**
     * Gets Clicks.
     *
     * @return int
     */
    public function getClicks()
    {
        return $this->Clicks;
    }

    /**
     * Sets Clicks.
     *
     * @param int $value
     * @return self
     */
    public function setClicks($value)
    {
        $this->Clicks = $value;

        return $this;
    }

    /**
     * Gets Status.
     *
     * @return string|null
     */
    public function getStatus()
    {
        return $this->Status;
    }

    /**
     * Sets Status.
     *
     * @param string|null $value
     * @return self
     */
    public function setStatus($value = null)
    {
        $this->Status = $value;

        return $this;
    }

    /**
     * Gets StatusShow.
     *
     * @return string
     */
    public function getStatusShow()
    {
        return $this->StatusShow;
    }

    /**
     * Sets StatusShow.
     *
     * @param string $value
     * @return self
     */
    public function setStatusShow($value)
    {
        $this->StatusShow = $value;

        return $this;
    }

    /**
     * Gets StatusArchive.
     *
     * @return string
     */
    public function getStatusArchive()
    {
        return $this->StatusArchive;
    }

    /**
     * Sets StatusArchive.
     *
     * @param string $value
     * @return self
     */
    public function setStatusArchive($value)
    {
        $this->StatusArchive = $value;

        return $this;
    }

    /**
     * Gets StatusActivating.
     *
     * @return string
     */
    public function getStatusActivating()
    {
        return $this->StatusActivating;
    }

    /**
     * Sets StatusActivating.
     *
     * @param string $value
     * @return self
     */
    public function setStatusActivating($value)
    {
        $this->StatusActivating = $value;

        return $this;
    }

    /**
     * Gets StatusModerate.
     *
     * @return string
     */
    public function getStatusModerate()
    {
        return $this->StatusModerate;
    }

    /**
     * Sets StatusModerate.
     *
     * @param string $value
     * @return self
     */
    public function setStatusModerate($value)
    {
        $this->StatusModerate = $value;

        return $this;
    }

    /**
     * Gets IsActive.
     *
     * @return string|null
     */
    public function getIsActive()
    {
        return $this->IsActive;
    }

    /**
     * Sets IsActive.
     *
     * @param string|null $value
     * @return self
     */
    public function setIsActive($value = null)
    {
        $this->IsActive = $value;

        return $this;
    }

    /**
     * Gets ManagerName.
     *
     * @return string|null
     */
    public function getManagerName()
    {
        return $this->ManagerName;
    }

    /**
     * Sets ManagerName.
     *
     * @param string|null $value
     * @return self
     */
    public function setManagerName($value = null)
    {
        $this->ManagerName = $value;

        return $this;
    }

    /**
     * Gets AgencyName.
     *
     * @return string|null
     */
    public function getAgencyName()
    {
        return $this->AgencyName;
    }

    /**
     * Sets AgencyName.
     *
     * @param string|null $value
     * @return self
     */
    public function setAgencyName($value = null)
    {
        $this->AgencyName = $value;

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
     * @return self
     */
    public function setCurrency($value = null)
    {
        $this->Currency = $value;

        return $this;
    }

    /**
     * Gets CampaignCurrency.
     *
     * @return string|null
     */
    public function getCampaignCurrency()
    {
        return $this->CampaignCurrency;
    }

    /**
     * Sets CampaignCurrency.
     *
     * @param string|null $value
     * @return self
     */
    public function setCampaignCurrency($value = null)
    {
        $this->CampaignCurrency = $value;

        return $this;
    }

    /**
     * Gets SourceCampaignID.
     *
     * @return int|null
     */
    public function getSourceCampaignID()
    {
        return $this->SourceCampaignID;
    }

    /**
     * Sets SourceCampaignID.
     *
     * @param int|null $value
     * @return self
     */
    public function setSourceCampaignID($value = null)
    {
        $this->SourceCampaignID = $value;

        return $this;
    }

    /**
     * Gets BonusDiscount.
     *
     * @return float|null
     */
    public function getBonusDiscount()
    {
        return $this->BonusDiscount;
    }

    /**
     * Sets BonusDiscount.
     *
     * @param float|null $value
     * @return self
     */
    public function setBonusDiscount($value = null)
    {
        $this->BonusDiscount = $value;

        return $this;
    }

    /**
     * Gets DayBudgetEnabled.
     *
     * @return string|null
     */
    public function getDayBudgetEnabled()
    {
        return $this->DayBudgetEnabled;
    }

    /**
     * Sets DayBudgetEnabled.
     *
     * @param string|null $value
     * @return self
     */
    public function setDayBudgetEnabled($value = null)
    {
        $this->DayBudgetEnabled = $value;

        return $this;
    }

    /**
     * Gets EnableRelatedKeywords.
     *
     * @return string|null
     */
    public function getEnableRelatedKeywords()
    {
        return $this->EnableRelatedKeywords;
    }

    /**
     * Sets EnableRelatedKeywords.
     *
     * @param string|null $value
     * @return self
     */
    public function setEnableRelatedKeywords($value = null)
    {
        $this->EnableRelatedKeywords = $value;

        return $this;
    }

    /**
     * Gets ExtendedAdTitleEnabled.
     *
     * @return string|null
     */
    public function getExtendedAdTitleEnabled()
    {
        return $this->ExtendedAdTitleEnabled;
    }

    /**
     * Sets ExtendedAdTitleEnabled.
     *
     * @param string|null $value
     * @return self
     */
    public function setExtendedAdTitleEnabled($value = null)
    {
        $this->ExtendedAdTitleEnabled = $value;

        return $this;
    }


}

