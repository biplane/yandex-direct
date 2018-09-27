<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class CampaignGetItem extends CampaignBase
{

//    Can be omit.
//    protected $Id = null;

//    Can be omit.
//    protected $Name = null;

//    Can be omit.
//    protected $StartDate = null;

//    Can be omit.
//    protected $Type = null;

//    Can be omit.
//    protected $Status = null;

//    Can be omit.
//    protected $State = null;

//    Can be omit.
//    protected $StatusPayment = null;

//    Can be omit.
//    protected $StatusClarification = null;

//    Can be omit.
//    protected $SourceId = null;

//    Can be omit.
//    protected $Statistics = null;

//    Can be omit.
//    protected $Currency = null;

//    Can be omit.
//    protected $Funds = null;

//    Can be omit.
//    protected $RepresentedBy = null;

//    Can be omit.
//    protected $DailyBudget = null;

//    Can be omit.
//    protected $EndDate = null;

//    Can be omit.
//    protected $NegativeKeywords = null;

//    Can be omit.
//    protected $BlockedIps = null;

//    Can be omit.
//    protected $ExcludedSites = null;

//    Can be omit.
//    protected $TextCampaign = null;

//    Can be omit.
//    protected $MobileAppCampaign = null;

//    Can be omit.
//    protected $DynamicTextCampaign = null;

//    Can be omit.
//    protected $CpmBannerCampaign = null;

//    Can be omit.
//    protected $TimeTargeting = null;

    /**
     * Creates a new instance of CampaignGetItem.
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets Id.
     *
     * @return int|null
     */
    public function getId()
    {
        return isset($this->Id) ? $this->Id : null;
    }

    /**
     * Sets Id.
     *
     * @param int|null $value
     * @return $this
     */
    public function setId($value = null)
    {
        $this->Id = $value;

        return $this;
    }

    /**
     * Gets Name.
     *
     * @return string|null
     */
    public function getName()
    {
        return isset($this->Name) ? $this->Name : null;
    }

    /**
     * Sets Name.
     *
     * @param string|null $value
     * @return $this
     */
    public function setName($value = null)
    {
        $this->Name = $value;

        return $this;
    }

    /**
     * Gets StartDate.
     *
     * @return string|null
     */
    public function getStartDate()
    {
        return isset($this->StartDate) ? $this->StartDate : null;
    }

    /**
     * Sets StartDate.
     *
     * @param string|null $value
     * @return $this
     */
    public function setStartDate($value = null)
    {
        $this->StartDate = $value;

        return $this;
    }

    /**
     * Gets Type.
     *
     * @return string|null
     * @see CampaignTypeGetEnum
     */
    public function getType()
    {
        return isset($this->Type) ? $this->Type : null;
    }

    /**
     * Sets Type.
     *
     * @param string|null $value
     * @return $this
     * @see CampaignTypeGetEnum
     */
    public function setType($value = null)
    {
        $this->Type = $value;

        return $this;
    }

    /**
     * Gets Status.
     *
     * @return string|null
     * @see StatusEnum
     */
    public function getStatus()
    {
        return isset($this->Status) ? $this->Status : null;
    }

    /**
     * Sets Status.
     *
     * @param string|null $value
     * @return $this
     * @see StatusEnum
     */
    public function setStatus($value = null)
    {
        $this->Status = $value;

        return $this;
    }

    /**
     * Gets State.
     *
     * @return string|null
     * @see CampaignStateGetEnum
     */
    public function getState()
    {
        return isset($this->State) ? $this->State : null;
    }

    /**
     * Sets State.
     *
     * @param string|null $value
     * @return $this
     * @see CampaignStateGetEnum
     */
    public function setState($value = null)
    {
        $this->State = $value;

        return $this;
    }

    /**
     * Gets StatusPayment.
     *
     * @return string|null
     * @see CampaignStatusPaymentEnum
     */
    public function getStatusPayment()
    {
        return isset($this->StatusPayment) ? $this->StatusPayment : null;
    }

    /**
     * Sets StatusPayment.
     *
     * @param string|null $value
     * @return $this
     * @see CampaignStatusPaymentEnum
     */
    public function setStatusPayment($value = null)
    {
        $this->StatusPayment = $value;

        return $this;
    }

    /**
     * Gets StatusClarification.
     *
     * @return string|null
     */
    public function getStatusClarification()
    {
        return isset($this->StatusClarification) ? $this->StatusClarification : null;
    }

    /**
     * Sets StatusClarification.
     *
     * @param string|null $value
     * @return $this
     */
    public function setStatusClarification($value = null)
    {
        $this->StatusClarification = $value;

        return $this;
    }

    /**
     * Gets SourceId.
     *
     * @return int|null
     */
    public function getSourceId()
    {
        return isset($this->SourceId) ? $this->SourceId : null;
    }

    /**
     * Sets SourceId.
     *
     * @param int|null $value
     * @return $this
     */
    public function setSourceId($value = null)
    {
        $this->SourceId = $value;

        return $this;
    }

    /**
     * Gets Statistics.
     *
     * @return Statistics|null
     */
    public function getStatistics()
    {
        return isset($this->Statistics) ? $this->Statistics : null;
    }

    /**
     * Sets Statistics.
     *
     * @param Statistics|null $value
     * @return $this
     */
    public function setStatistics(Statistics $value = null)
    {
        $this->Statistics = $value;

        return $this;
    }

    /**
     * Gets Currency.
     *
     * @return string|null
     * @see CurrencyEnum
     */
    public function getCurrency()
    {
        return isset($this->Currency) ? $this->Currency : null;
    }

    /**
     * Sets Currency.
     *
     * @param string|null $value
     * @return $this
     * @see CurrencyEnum
     */
    public function setCurrency($value = null)
    {
        $this->Currency = $value;

        return $this;
    }

    /**
     * Gets Funds.
     *
     * @return FundsParam|null
     */
    public function getFunds()
    {
        return isset($this->Funds) ? $this->Funds : null;
    }

    /**
     * Sets Funds.
     *
     * @param FundsParam|null $value
     * @return $this
     */
    public function setFunds(FundsParam $value = null)
    {
        $this->Funds = $value;

        return $this;
    }

    /**
     * Gets RepresentedBy.
     *
     * @return CampaignAssistant|null
     */
    public function getRepresentedBy()
    {
        return isset($this->RepresentedBy) ? $this->RepresentedBy : null;
    }

    /**
     * Sets RepresentedBy.
     *
     * @param CampaignAssistant|null $value
     * @return $this
     */
    public function setRepresentedBy(CampaignAssistant $value = null)
    {
        $this->RepresentedBy = $value;

        return $this;
    }

    /**
     * Gets DailyBudget.
     *
     * @return DailyBudget|null
     */
    public function getDailyBudget()
    {
        return isset($this->DailyBudget) ? $this->DailyBudget : null;
    }

    /**
     * Sets DailyBudget.
     *
     * @param DailyBudget|null $value
     * @return $this
     */
    public function setDailyBudget(DailyBudget $value = null)
    {
        $this->DailyBudget = $value;

        return $this;
    }

    /**
     * Gets EndDate.
     *
     * @return string|null
     */
    public function getEndDate()
    {
        return isset($this->EndDate) ? $this->EndDate : null;
    }

    /**
     * Sets EndDate.
     *
     * @param string|null $value
     * @return $this
     */
    public function setEndDate($value = null)
    {
        $this->EndDate = $value;

        return $this;
    }

    /**
     * Gets NegativeKeywords.
     *
     * @return string[]|null
     */
    public function getNegativeKeywords()
    {
        return isset($this->NegativeKeywords) ? $this->NegativeKeywords : null;
    }

    /**
     * Sets NegativeKeywords.
     *
     * @param string[]|null $value
     * @return $this
     */
    public function setNegativeKeywords(array $value = null)
    {
        $this->NegativeKeywords = $value;

        return $this;
    }

    /**
     * Gets BlockedIps.
     *
     * @return string[]|null
     */
    public function getBlockedIps()
    {
        return isset($this->BlockedIps) ? $this->BlockedIps : null;
    }

    /**
     * Sets BlockedIps.
     *
     * @param string[]|null $value
     * @return $this
     */
    public function setBlockedIps(array $value = null)
    {
        $this->BlockedIps = $value;

        return $this;
    }

    /**
     * Gets ExcludedSites.
     *
     * @return string[]|null
     */
    public function getExcludedSites()
    {
        return isset($this->ExcludedSites) ? $this->ExcludedSites : null;
    }

    /**
     * Sets ExcludedSites.
     *
     * @param string[]|null $value
     * @return $this
     */
    public function setExcludedSites(array $value = null)
    {
        $this->ExcludedSites = $value;

        return $this;
    }

    /**
     * Gets TextCampaign.
     *
     * @return TextCampaignGetItem|null
     */
    public function getTextCampaign()
    {
        return isset($this->TextCampaign) ? $this->TextCampaign : null;
    }

    /**
     * Sets TextCampaign.
     *
     * @param TextCampaignGetItem|null $value
     * @return $this
     */
    public function setTextCampaign(TextCampaignGetItem $value = null)
    {
        $this->TextCampaign = $value;

        return $this;
    }

    /**
     * Gets MobileAppCampaign.
     *
     * @return MobileAppCampaignGetItem|null
     */
    public function getMobileAppCampaign()
    {
        return isset($this->MobileAppCampaign) ? $this->MobileAppCampaign : null;
    }

    /**
     * Sets MobileAppCampaign.
     *
     * @param MobileAppCampaignGetItem|null $value
     * @return $this
     */
    public function setMobileAppCampaign(MobileAppCampaignGetItem $value = null)
    {
        $this->MobileAppCampaign = $value;

        return $this;
    }

    /**
     * Gets DynamicTextCampaign.
     *
     * @return DynamicTextCampaignGetItem|null
     */
    public function getDynamicTextCampaign()
    {
        return isset($this->DynamicTextCampaign) ? $this->DynamicTextCampaign : null;
    }

    /**
     * Sets DynamicTextCampaign.
     *
     * @param DynamicTextCampaignGetItem|null $value
     * @return $this
     */
    public function setDynamicTextCampaign(DynamicTextCampaignGetItem $value = null)
    {
        $this->DynamicTextCampaign = $value;

        return $this;
    }

    /**
     * Gets CpmBannerCampaign.
     *
     * @return CpmBannerCampaignGetItem|null
     */
    public function getCpmBannerCampaign()
    {
        return isset($this->CpmBannerCampaign) ? $this->CpmBannerCampaign : null;
    }

    /**
     * Sets CpmBannerCampaign.
     *
     * @param CpmBannerCampaignGetItem|null $value
     * @return $this
     */
    public function setCpmBannerCampaign(CpmBannerCampaignGetItem $value = null)
    {
        $this->CpmBannerCampaign = $value;

        return $this;
    }

    /**
     * Gets TimeTargeting.
     *
     * @return TimeTargeting|null
     */
    public function getTimeTargeting()
    {
        return isset($this->TimeTargeting) ? $this->TimeTargeting : null;
    }

    /**
     * Sets TimeTargeting.
     *
     * @param TimeTargeting|null $value
     * @return $this
     */
    public function setTimeTargeting(TimeTargeting $value = null)
    {
        $this->TimeTargeting = $value;

        return $this;
    }


}

