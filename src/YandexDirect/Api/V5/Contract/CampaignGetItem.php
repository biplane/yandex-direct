<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class CampaignGetItem extends CampaignBase
{

    protected $Id = null;

    protected $Name = null;

    protected $StartDate = null;

    protected $Type = null;

    protected $Status = null;

    protected $State = null;

    protected $StatusPayment = null;

    protected $StatusClarification = null;

    protected $SourceId = null;

    protected $Statistics = null;

    protected $Currency = null;

    protected $Funds = null;

    protected $RepresentedBy = null;

    protected $DailyBudget = null;

    protected $EndDate = null;

    protected $NegativeKeywords = null;

    protected $BlockedIps = null;

    protected $ExcludedSites = null;

    protected $TextCampaign = null;

    protected $MobileAppCampaign = null;

    protected $DynamicTextCampaign = null;

    protected $TimeTargeting = null;

    /**
     * Creates a new instance of CampaignGetItem.
     *
     * @return CampaignGetItem
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
        return $this->Id;
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
        return $this->Name;
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
        return $this->StartDate;
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
     * @return CampaignTypeGetEnum|null
     */
    public function getType()
    {
        return $this->Type;
    }

    /**
     * Sets Type.
     *
     * @param CampaignTypeGetEnum|null $value
     * @return $this
     */
    public function setType(CampaignTypeGetEnum $value = null)
    {
        $this->Type = $value;

        return $this;
    }

    /**
     * Gets Status.
     *
     * @return StatusEnum|null
     */
    public function getStatus()
    {
        return $this->Status;
    }

    /**
     * Sets Status.
     *
     * @param StatusEnum|null $value
     * @return $this
     */
    public function setStatus(StatusEnum $value = null)
    {
        $this->Status = $value;

        return $this;
    }

    /**
     * Gets State.
     *
     * @return CampaignStateGetEnum|null
     */
    public function getState()
    {
        return $this->State;
    }

    /**
     * Sets State.
     *
     * @param CampaignStateGetEnum|null $value
     * @return $this
     */
    public function setState(CampaignStateGetEnum $value = null)
    {
        $this->State = $value;

        return $this;
    }

    /**
     * Gets StatusPayment.
     *
     * @return CampaignStatusPaymentEnum|null
     */
    public function getStatusPayment()
    {
        return $this->StatusPayment;
    }

    /**
     * Sets StatusPayment.
     *
     * @param CampaignStatusPaymentEnum|null $value
     * @return $this
     */
    public function setStatusPayment(CampaignStatusPaymentEnum $value = null)
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
        return $this->StatusClarification;
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
        return $this->SourceId;
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
        return $this->Statistics;
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
     * @return CurrencyEnum|null
     */
    public function getCurrency()
    {
        return $this->Currency;
    }

    /**
     * Sets Currency.
     *
     * @param CurrencyEnum|null $value
     * @return $this
     */
    public function setCurrency(CurrencyEnum $value = null)
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
        return $this->Funds;
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
        return $this->RepresentedBy;
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
        return $this->DailyBudget;
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
        return $this->EndDate;
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
        return $this->NegativeKeywords;
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
        return $this->BlockedIps;
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
        return $this->ExcludedSites;
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
        return $this->TextCampaign;
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
        return $this->MobileAppCampaign;
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
        return $this->DynamicTextCampaign;
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
     * Gets TimeTargeting.
     *
     * @return TimeTargeting|null
     */
    public function getTimeTargeting()
    {
        return $this->TimeTargeting;
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

