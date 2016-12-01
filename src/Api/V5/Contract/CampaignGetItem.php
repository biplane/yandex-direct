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
        return $this->Id;
    }

    /**
     * Sets Id.
     *
     * @param int|null $value
     * @return self
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
     * @return self
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
     * @return self
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
        return $this->Type;
    }

    /**
     * Sets Type.
     *
     * @param string|null $value
     * @return self
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
        return $this->Status;
    }

    /**
     * Sets Status.
     *
     * @param string|null $value
     * @return self
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
        return $this->State;
    }

    /**
     * Sets State.
     *
     * @param string|null $value
     * @return self
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
        return $this->StatusPayment;
    }

    /**
     * Sets StatusPayment.
     *
     * @param string|null $value
     * @return self
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
        return $this->StatusClarification;
    }

    /**
     * Sets StatusClarification.
     *
     * @param string|null $value
     * @return self
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
     * @return self
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
     * @return self
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
        return $this->Currency;
    }

    /**
     * Sets Currency.
     *
     * @param string|null $value
     * @return self
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
        return $this->Funds;
    }

    /**
     * Sets Funds.
     *
     * @param FundsParam|null $value
     * @return self
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
     * @return self
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
     * @return self
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
     * @return self
     */
    public function setEndDate($value = null)
    {
        $this->EndDate = $value;

        return $this;
    }

    /**
     * Gets NegativeKeywords.
     *
     * @return struct[]|null
     */
    public function getNegativeKeywords()
    {
        return $this->NegativeKeywords;
    }

    /**
     * Sets NegativeKeywords.
     *
     * @param struct[]|null $value
     * @return self
     */
    public function setNegativeKeywords(array $value = null)
    {
        $this->NegativeKeywords = $value;

        return $this;
    }

    /**
     * Gets BlockedIps.
     *
     * @return struct[]|null
     */
    public function getBlockedIps()
    {
        return $this->BlockedIps;
    }

    /**
     * Sets BlockedIps.
     *
     * @param struct[]|null $value
     * @return self
     */
    public function setBlockedIps(array $value = null)
    {
        $this->BlockedIps = $value;

        return $this;
    }

    /**
     * Gets ExcludedSites.
     *
     * @return struct[]|null
     */
    public function getExcludedSites()
    {
        return $this->ExcludedSites;
    }

    /**
     * Sets ExcludedSites.
     *
     * @param struct[]|null $value
     * @return self
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
     * @return self
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
     * @return self
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
     * @return self
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
     * @return self
     */
    public function setTimeTargeting(TimeTargeting $value = null)
    {
        $this->TimeTargeting = $value;

        return $this;
    }


}

