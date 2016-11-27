<?php

namespace Biplane\YandexDirect\Api\V4\Contract;

/**
 * Auto-generated code.
 */
class CampaignInfo
{

    protected $Login = null;

    protected $CampaignID = null;

    protected $Name = null;

    protected $FIO = null;

    protected $StartDate = null;

    protected $Sum = null;

    protected $Rest = null;

    protected $Shows = null;

    protected $Clicks = null;

    protected $Strategy = null;

    protected $ClickTrackingEnabled = null;

    protected $BonusDiscount = null;

    protected $Currency = null;

    protected $CampaignCurrency = null;

    protected $SourceCampaignID = null;

    protected $ContextStrategy = null;

    protected $AdditionalMetrikaCounters = null;

    protected $MobileBidAdjustment = null;

    protected $TradeType = null;

    protected $SmsNotification = null;

    protected $EmailNotification = null;

    protected $StatusBehavior = null;

    protected $Status = null;

    protected $TimeTarget = null;

    protected $StatusContextStop = null;

    protected $ContextLimit = null;

    protected $ContextLimitSum = null;

    protected $ContextPricePercent = null;

    protected $AutoOptimization = null;

    protected $StatusMetricaControl = null;

    protected $DisabledDomains = null;

    protected $DisabledIps = null;

    protected $StatusOpenStat = null;

    protected $ConsiderTimeTarget = null;

    protected $ManagerName = null;

    protected $AgencyName = null;

    protected $StatusShow = null;

    protected $StatusArchive = null;

    protected $StatusActivating = null;

    protected $StatusModerate = null;

    protected $IsActive = null;

    protected $MinusKeywords = null;

    protected $AddRelevantPhrases = null;

    protected $RelevantPhrasesBudgetLimit = null;

    protected $DayBudget = null;

    protected $DayBudgetEnabled = null;

    protected $EnableRelatedKeywords = null;

    protected $ExtendedAdTitleEnabled = null;

    protected $MaintainNetworkCPC = null;

    protected $SumAvailableForTransfer = null;

    /**
     * Creates a new instance of CampaignInfo.
     *
     * @return self
     */
    public static function create()
    {
        return new self();
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
     * Gets FIO.
     *
     * @return string
     */
    public function getFIO()
    {
        return $this->FIO;
    }

    /**
     * Sets FIO.
     *
     * @param string $value
     * @return self
     */
    public function setFIO($value)
    {
        $this->FIO = $value;

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
     * Gets Sum.
     *
     * @return float|null
     */
    public function getSum()
    {
        return $this->Sum;
    }

    /**
     * Sets Sum.
     *
     * @param float|null $value
     * @return self
     */
    public function setSum($value = null)
    {
        $this->Sum = $value;

        return $this;
    }

    /**
     * Gets Rest.
     *
     * @return float|null
     */
    public function getRest()
    {
        return $this->Rest;
    }

    /**
     * Sets Rest.
     *
     * @param float|null $value
     * @return self
     */
    public function setRest($value = null)
    {
        $this->Rest = $value;

        return $this;
    }

    /**
     * Gets Shows.
     *
     * @return int|null
     */
    public function getShows()
    {
        return $this->Shows;
    }

    /**
     * Sets Shows.
     *
     * @param int|null $value
     * @return self
     */
    public function setShows($value = null)
    {
        $this->Shows = $value;

        return $this;
    }

    /**
     * Gets Clicks.
     *
     * @return int|null
     */
    public function getClicks()
    {
        return $this->Clicks;
    }

    /**
     * Sets Clicks.
     *
     * @param int|null $value
     * @return self
     */
    public function setClicks($value = null)
    {
        $this->Clicks = $value;

        return $this;
    }

    /**
     * Gets Strategy.
     *
     * @return CampaignStrategy|null
     */
    public function getStrategy()
    {
        return $this->Strategy;
    }

    /**
     * Sets Strategy.
     *
     * @param CampaignStrategy|null $value
     * @return self
     */
    public function setStrategy(CampaignStrategy $value = null)
    {
        $this->Strategy = $value;

        return $this;
    }

    /**
     * Gets ClickTrackingEnabled.
     *
     * @return string|null
     */
    public function getClickTrackingEnabled()
    {
        return $this->ClickTrackingEnabled;
    }

    /**
     * Sets ClickTrackingEnabled.
     *
     * @param string|null $value
     * @return self
     */
    public function setClickTrackingEnabled($value = null)
    {
        $this->ClickTrackingEnabled = $value;

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
     * Gets ContextStrategy.
     *
     * @return CampaignContextStrategy|null
     */
    public function getContextStrategy()
    {
        return $this->ContextStrategy;
    }

    /**
     * Sets ContextStrategy.
     *
     * @param CampaignContextStrategy|null $value
     * @return self
     */
    public function setContextStrategy(CampaignContextStrategy $value = null)
    {
        $this->ContextStrategy = $value;

        return $this;
    }

    /**
     * Gets AdditionalMetrikaCounters.
     *
     * @return int[]|null
     */
    public function getAdditionalMetrikaCounters()
    {
        return $this->AdditionalMetrikaCounters;
    }

    /**
     * Sets AdditionalMetrikaCounters.
     *
     * @param int[]|null $value
     * @return self
     */
    public function setAdditionalMetrikaCounters(array $value = null)
    {
        $this->AdditionalMetrikaCounters = $value;

        return $this;
    }

    /**
     * Gets MobileBidAdjustment.
     *
     * @return int|null
     */
    public function getMobileBidAdjustment()
    {
        return $this->MobileBidAdjustment;
    }

    /**
     * Sets MobileBidAdjustment.
     *
     * @param int|null $value
     * @return self
     */
    public function setMobileBidAdjustment($value = null)
    {
        $this->MobileBidAdjustment = $value;

        return $this;
    }

    /**
     * Gets TradeType.
     *
     * @return string|null
     */
    public function getTradeType()
    {
        return $this->TradeType;
    }

    /**
     * Sets TradeType.
     *
     * @param string|null $value
     * @return self
     */
    public function setTradeType($value = null)
    {
        $this->TradeType = $value;

        return $this;
    }

    /**
     * Gets SmsNotification.
     *
     * @return SmsNotificationInfo|null
     */
    public function getSmsNotification()
    {
        return $this->SmsNotification;
    }

    /**
     * Sets SmsNotification.
     *
     * @param SmsNotificationInfo|null $value
     * @return self
     */
    public function setSmsNotification(SmsNotificationInfo $value = null)
    {
        $this->SmsNotification = $value;

        return $this;
    }

    /**
     * Gets EmailNotification.
     *
     * @return EmailNotificationInfo|null
     */
    public function getEmailNotification()
    {
        return $this->EmailNotification;
    }

    /**
     * Sets EmailNotification.
     *
     * @param EmailNotificationInfo|null $value
     * @return self
     */
    public function setEmailNotification(EmailNotificationInfo $value = null)
    {
        $this->EmailNotification = $value;

        return $this;
    }

    /**
     * Gets StatusBehavior.
     *
     * @return string|null
     */
    public function getStatusBehavior()
    {
        return $this->StatusBehavior;
    }

    /**
     * Sets StatusBehavior.
     *
     * @param string|null $value
     * @return self
     */
    public function setStatusBehavior($value = null)
    {
        $this->StatusBehavior = $value;

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
     * Gets TimeTarget.
     *
     * @return TimeTargetInfo|null
     */
    public function getTimeTarget()
    {
        return $this->TimeTarget;
    }

    /**
     * Sets TimeTarget.
     *
     * @param TimeTargetInfo|null $value
     * @return self
     */
    public function setTimeTarget(TimeTargetInfo $value = null)
    {
        $this->TimeTarget = $value;

        return $this;
    }

    /**
     * Gets StatusContextStop.
     *
     * @return string|null
     */
    public function getStatusContextStop()
    {
        return $this->StatusContextStop;
    }

    /**
     * Sets StatusContextStop.
     *
     * @param string|null $value
     * @return self
     */
    public function setStatusContextStop($value = null)
    {
        $this->StatusContextStop = $value;

        return $this;
    }

    /**
     * Gets ContextLimit.
     *
     * @return string|null
     */
    public function getContextLimit()
    {
        return $this->ContextLimit;
    }

    /**
     * Sets ContextLimit.
     *
     * @param string|null $value
     * @return self
     */
    public function setContextLimit($value = null)
    {
        $this->ContextLimit = $value;

        return $this;
    }

    /**
     * Gets ContextLimitSum.
     *
     * @return int|null
     */
    public function getContextLimitSum()
    {
        return $this->ContextLimitSum;
    }

    /**
     * Sets ContextLimitSum.
     *
     * @param int|null $value
     * @return self
     */
    public function setContextLimitSum($value = null)
    {
        $this->ContextLimitSum = $value;

        return $this;
    }

    /**
     * Gets ContextPricePercent.
     *
     * @return int|null
     */
    public function getContextPricePercent()
    {
        return $this->ContextPricePercent;
    }

    /**
     * Sets ContextPricePercent.
     *
     * @param int|null $value
     * @return self
     */
    public function setContextPricePercent($value = null)
    {
        $this->ContextPricePercent = $value;

        return $this;
    }

    /**
     * Gets AutoOptimization.
     *
     * @return string|null
     */
    public function getAutoOptimization()
    {
        return $this->AutoOptimization;
    }

    /**
     * Sets AutoOptimization.
     *
     * @param string|null $value
     * @return self
     */
    public function setAutoOptimization($value = null)
    {
        $this->AutoOptimization = $value;

        return $this;
    }

    /**
     * Gets StatusMetricaControl.
     *
     * @return string|null
     */
    public function getStatusMetricaControl()
    {
        return $this->StatusMetricaControl;
    }

    /**
     * Sets StatusMetricaControl.
     *
     * @param string|null $value
     * @return self
     */
    public function setStatusMetricaControl($value = null)
    {
        $this->StatusMetricaControl = $value;

        return $this;
    }

    /**
     * Gets DisabledDomains.
     *
     * @return string|null
     */
    public function getDisabledDomains()
    {
        return $this->DisabledDomains;
    }

    /**
     * Sets DisabledDomains.
     *
     * @param string|null $value
     * @return self
     */
    public function setDisabledDomains($value = null)
    {
        $this->DisabledDomains = $value;

        return $this;
    }

    /**
     * Gets DisabledIps.
     *
     * @return string|null
     */
    public function getDisabledIps()
    {
        return $this->DisabledIps;
    }

    /**
     * Sets DisabledIps.
     *
     * @param string|null $value
     * @return self
     */
    public function setDisabledIps($value = null)
    {
        $this->DisabledIps = $value;

        return $this;
    }

    /**
     * Gets StatusOpenStat.
     *
     * @return string|null
     */
    public function getStatusOpenStat()
    {
        return $this->StatusOpenStat;
    }

    /**
     * Sets StatusOpenStat.
     *
     * @param string|null $value
     * @return self
     */
    public function setStatusOpenStat($value = null)
    {
        $this->StatusOpenStat = $value;

        return $this;
    }

    /**
     * Gets ConsiderTimeTarget.
     *
     * @return string|null
     */
    public function getConsiderTimeTarget()
    {
        return $this->ConsiderTimeTarget;
    }

    /**
     * Sets ConsiderTimeTarget.
     *
     * @param string|null $value
     * @return self
     */
    public function setConsiderTimeTarget($value = null)
    {
        $this->ConsiderTimeTarget = $value;

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
     * Gets StatusShow.
     *
     * @return string|null
     */
    public function getStatusShow()
    {
        return $this->StatusShow;
    }

    /**
     * Sets StatusShow.
     *
     * @param string|null $value
     * @return self
     */
    public function setStatusShow($value = null)
    {
        $this->StatusShow = $value;

        return $this;
    }

    /**
     * Gets StatusArchive.
     *
     * @return string|null
     */
    public function getStatusArchive()
    {
        return $this->StatusArchive;
    }

    /**
     * Sets StatusArchive.
     *
     * @param string|null $value
     * @return self
     */
    public function setStatusArchive($value = null)
    {
        $this->StatusArchive = $value;

        return $this;
    }

    /**
     * Gets StatusActivating.
     *
     * @return string|null
     */
    public function getStatusActivating()
    {
        return $this->StatusActivating;
    }

    /**
     * Sets StatusActivating.
     *
     * @param string|null $value
     * @return self
     */
    public function setStatusActivating($value = null)
    {
        $this->StatusActivating = $value;

        return $this;
    }

    /**
     * Gets StatusModerate.
     *
     * @return string|null
     */
    public function getStatusModerate()
    {
        return $this->StatusModerate;
    }

    /**
     * Sets StatusModerate.
     *
     * @param string|null $value
     * @return self
     */
    public function setStatusModerate($value = null)
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
     * Gets MinusKeywords.
     *
     * @return string[]|null
     */
    public function getMinusKeywords()
    {
        return $this->MinusKeywords;
    }

    /**
     * Sets MinusKeywords.
     *
     * @param string[]|null $value
     * @return self
     */
    public function setMinusKeywords(array $value = null)
    {
        $this->MinusKeywords = $value;

        return $this;
    }

    /**
     * Gets AddRelevantPhrases.
     *
     * @return string|null
     */
    public function getAddRelevantPhrases()
    {
        return $this->AddRelevantPhrases;
    }

    /**
     * Sets AddRelevantPhrases.
     *
     * @param string|null $value
     * @return self
     */
    public function setAddRelevantPhrases($value = null)
    {
        $this->AddRelevantPhrases = $value;

        return $this;
    }

    /**
     * Gets RelevantPhrasesBudgetLimit.
     *
     * @return int|null
     */
    public function getRelevantPhrasesBudgetLimit()
    {
        return $this->RelevantPhrasesBudgetLimit;
    }

    /**
     * Sets RelevantPhrasesBudgetLimit.
     *
     * @param int|null $value
     * @return self
     */
    public function setRelevantPhrasesBudgetLimit($value = null)
    {
        $this->RelevantPhrasesBudgetLimit = $value;

        return $this;
    }

    /**
     * Gets DayBudget.
     *
     * @return DayBudgetInfo|null
     */
    public function getDayBudget()
    {
        return $this->DayBudget;
    }

    /**
     * Sets DayBudget.
     *
     * @param DayBudgetInfo|null $value
     * @return self
     */
    public function setDayBudget(DayBudgetInfo $value = null)
    {
        $this->DayBudget = $value;

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

    /**
     * Gets MaintainNetworkCPC.
     *
     * @return string|null
     */
    public function getMaintainNetworkCPC()
    {
        return $this->MaintainNetworkCPC;
    }

    /**
     * Sets MaintainNetworkCPC.
     *
     * @param string|null $value
     * @return self
     */
    public function setMaintainNetworkCPC($value = null)
    {
        $this->MaintainNetworkCPC = $value;

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


}

