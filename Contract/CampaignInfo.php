<?php

namespace Biplane\YandexDirectBundle\Contract;

/**
 * @codeCoverageIgnore
 * @SuppressWarnings(PHPMD)
 */
class CampaignInfo
{
    /**
     * @var string
     */
    protected $Login;
    /**
     * @var int
     */
    protected $CampaignID;
    /**
     * @var string
     */
    protected $Name;
    /**
     * @var string
     */
    protected $FIO;
    /**
     * @var string
     */
    protected $StartDate;
    /**
     * @var float
     */
    protected $Sum;
    /**
     * @var float
     */
    protected $Rest;
    /**
     * @var int
     */
    protected $Shows;
    /**
     * @var int
     */
    protected $Clicks;
    /**
     * @var CampaignStrategy
     */
    protected $Strategy;
    /**
     * @var string
     */
    protected $ClickTrackingEnabled;
    /**
     * @var float
     */
    protected $BonusDiscount;
    /**
     * @var string
     */
    protected $Currency;
    /**
     * @var string
     */
    protected $CampaignCurrency;
    /**
     * @var int
     */
    protected $SourceCampaignID;
    /**
     * @var CampaignContextStrategy
     */
    protected $ContextStrategy;
    /**
     * @var int[]
     */
    protected $AdditionalMetrikaCounters;
    /**
     * @var string
     */
    protected $TradeType;
    /**
     * @var SmsNotificationInfo
     */
    protected $SmsNotification;
    /**
     * @var EmailNotificationInfo
     */
    protected $EmailNotification;
    /**
     * @var string
     */
    protected $StatusBehavior;
    /**
     * @var string
     */
    protected $Status;
    /**
     * @var TimeTargetInfo
     */
    protected $TimeTarget;
    /**
     * @var string
     */
    protected $StatusContextStop;
    /**
     * @var string
     */
    protected $ContextLimit;
    /**
     * @var int
     */
    protected $ContextLimitSum;
    /**
     * @var int
     */
    protected $ContextPricePercent;
    /**
     * @var string
     */
    protected $AutoOptimization;
    /**
     * @var string
     */
    protected $StatusMetricaControl;
    /**
     * @var string
     */
    protected $DisabledDomains;
    /**
     * @var string
     */
    protected $DisabledIps;
    /**
     * @var string
     */
    protected $StatusOpenStat;
    /**
     * @var string
     */
    protected $ConsiderTimeTarget;
    /**
     * @var string
     */
    protected $ManagerName;
    /**
     * @var string
     */
    protected $AgencyName;
    /**
     * @var string
     */
    protected $StatusShow;
    /**
     * @var string
     */
    protected $StatusArchive;
    /**
     * @var string
     */
    protected $StatusActivating;
    /**
     * @var string
     */
    protected $StatusModerate;
    /**
     * @var string
     */
    protected $IsActive;
    /**
     * @var string[]
     */
    protected $MinusKeywords;
    /**
     * @var string
     */
    protected $AddRelevantPhrases;
    /**
     * @var int
     */
    protected $RelevantPhrasesBudgetLimit;
    /**
     * @var float
     */
    protected $SumAvailableForTransfer;

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
     * Gets the Login.
     *
     * @return string
     */
    public function getLogin()
    {
        return $this->Login;
    }

    /**
     * Sets the Login.
     *
     * @param string $Login
     *
     * @return CampaignInfo
     */
    public function setLogin($Login)
    {
        $this->Login = $Login;

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
     * @return CampaignInfo
     */
    public function setCampaignID($CampaignID)
    {
        $this->CampaignID = $CampaignID;

        return $this;
    }

    /**
     * Gets the Name.
     *
     * @return string
     */
    public function getName()
    {
        return $this->Name;
    }

    /**
     * Sets the Name.
     *
     * @param string $Name
     *
     * @return CampaignInfo
     */
    public function setName($Name)
    {
        $this->Name = $Name;

        return $this;
    }

    /**
     * Gets the FIO.
     *
     * @return string
     */
    public function getFIO()
    {
        return $this->FIO;
    }

    /**
     * Sets the FIO.
     *
     * @param string $FIO
     *
     * @return CampaignInfo
     */
    public function setFIO($FIO)
    {
        $this->FIO = $FIO;

        return $this;
    }

    /**
     * Gets the StartDate.
     *
     * @return string
     */
    public function getStartDate()
    {
        return $this->StartDate;
    }

    /**
     * Sets the StartDate.
     *
     * @param string $StartDate
     *
     * @return CampaignInfo
     */
    public function setStartDate($StartDate)
    {
        $this->StartDate = $StartDate;

        return $this;
    }

    /**
     * Gets the Sum.
     *
     * @return float
     */
    public function getSum()
    {
        return $this->Sum;
    }

    /**
     * Sets the Sum.
     *
     * @param float $Sum
     *
     * @return CampaignInfo
     */
    public function setSum($Sum)
    {
        $this->Sum = $Sum;

        return $this;
    }

    /**
     * Gets the Rest.
     *
     * @return float
     */
    public function getRest()
    {
        return $this->Rest;
    }

    /**
     * Sets the Rest.
     *
     * @param float $Rest
     *
     * @return CampaignInfo
     */
    public function setRest($Rest)
    {
        $this->Rest = $Rest;

        return $this;
    }

    /**
     * Gets the Shows.
     *
     * @return int
     */
    public function getShows()
    {
        return $this->Shows;
    }

    /**
     * Sets the Shows.
     *
     * @param int $Shows
     *
     * @return CampaignInfo
     */
    public function setShows($Shows)
    {
        $this->Shows = $Shows;

        return $this;
    }

    /**
     * Gets the Clicks.
     *
     * @return int
     */
    public function getClicks()
    {
        return $this->Clicks;
    }

    /**
     * Sets the Clicks.
     *
     * @param int $Clicks
     *
     * @return CampaignInfo
     */
    public function setClicks($Clicks)
    {
        $this->Clicks = $Clicks;

        return $this;
    }

    /**
     * Gets the Strategy.
     *
     * @return CampaignStrategy
     */
    public function getStrategy()
    {
        return $this->Strategy;
    }

    /**
     * Sets the Strategy.
     *
     * @param CampaignStrategy $Strategy
     *
     * @return CampaignInfo
     */
    public function setStrategy(CampaignStrategy $Strategy)
    {
        $this->Strategy = $Strategy;

        return $this;
    }

    /**
     * Gets the ClickTrackingEnabled.
     *
     * @return string
     */
    public function getClickTrackingEnabled()
    {
        return $this->ClickTrackingEnabled;
    }

    /**
     * Sets the ClickTrackingEnabled.
     *
     * @param string $ClickTrackingEnabled
     *
     * @return CampaignInfo
     */
    public function setClickTrackingEnabled($ClickTrackingEnabled)
    {
        $this->ClickTrackingEnabled = $ClickTrackingEnabled;

        return $this;
    }

    /**
     * Gets the BonusDiscount.
     *
     * @return float
     */
    public function getBonusDiscount()
    {
        return $this->BonusDiscount;
    }

    /**
     * Sets the BonusDiscount.
     *
     * @param float $BonusDiscount
     *
     * @return CampaignInfo
     */
    public function setBonusDiscount($BonusDiscount)
    {
        $this->BonusDiscount = $BonusDiscount;

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
     * @return CampaignInfo
     */
    public function setCurrency($Currency)
    {
        $this->Currency = $Currency;

        return $this;
    }

    /**
     * Gets the CampaignCurrency.
     *
     * @return string
     */
    public function getCampaignCurrency()
    {
        return $this->CampaignCurrency;
    }

    /**
     * Sets the CampaignCurrency.
     *
     * @param string $CampaignCurrency
     *
     * @return CampaignInfo
     */
    public function setCampaignCurrency($CampaignCurrency)
    {
        $this->CampaignCurrency = $CampaignCurrency;

        return $this;
    }

    /**
     * Gets the SourceCampaignID.
     *
     * @return int
     */
    public function getSourceCampaignID()
    {
        return $this->SourceCampaignID;
    }

    /**
     * Sets the SourceCampaignID.
     *
     * @param int $SourceCampaignID
     *
     * @return CampaignInfo
     */
    public function setSourceCampaignID($SourceCampaignID)
    {
        $this->SourceCampaignID = $SourceCampaignID;

        return $this;
    }

    /**
     * Gets the ContextStrategy.
     *
     * @return CampaignContextStrategy
     */
    public function getContextStrategy()
    {
        return $this->ContextStrategy;
    }

    /**
     * Sets the ContextStrategy.
     *
     * @param CampaignContextStrategy $ContextStrategy
     *
     * @return CampaignInfo
     */
    public function setContextStrategy(CampaignContextStrategy $ContextStrategy)
    {
        $this->ContextStrategy = $ContextStrategy;

        return $this;
    }

    /**
     * Gets the AdditionalMetrikaCounters.
     *
     * @return int[]
     */
    public function getAdditionalMetrikaCounters()
    {
        return $this->AdditionalMetrikaCounters;
    }

    /**
     * Sets the AdditionalMetrikaCounters.
     *
     * @param int[] $AdditionalMetrikaCounters
     *
     * @return CampaignInfo
     */
    public function setAdditionalMetrikaCounters(array $AdditionalMetrikaCounters)
    {
        $this->AdditionalMetrikaCounters = $AdditionalMetrikaCounters;

        return $this;
    }

    /**
     * Gets the TradeType.
     *
     * @return string
     */
    public function getTradeType()
    {
        return $this->TradeType;
    }

    /**
     * Sets the TradeType.
     *
     * @param string $TradeType
     *
     * @return CampaignInfo
     */
    public function setTradeType($TradeType)
    {
        $this->TradeType = $TradeType;

        return $this;
    }

    /**
     * Gets the SmsNotification.
     *
     * @return SmsNotificationInfo
     */
    public function getSmsNotification()
    {
        return $this->SmsNotification;
    }

    /**
     * Sets the SmsNotification.
     *
     * @param SmsNotificationInfo $SmsNotification
     *
     * @return CampaignInfo
     */
    public function setSmsNotification(SmsNotificationInfo $SmsNotification)
    {
        $this->SmsNotification = $SmsNotification;

        return $this;
    }

    /**
     * Gets the EmailNotification.
     *
     * @return EmailNotificationInfo
     */
    public function getEmailNotification()
    {
        return $this->EmailNotification;
    }

    /**
     * Sets the EmailNotification.
     *
     * @param EmailNotificationInfo $EmailNotification
     *
     * @return CampaignInfo
     */
    public function setEmailNotification(EmailNotificationInfo $EmailNotification)
    {
        $this->EmailNotification = $EmailNotification;

        return $this;
    }

    /**
     * Gets the StatusBehavior.
     *
     * @return string
     */
    public function getStatusBehavior()
    {
        return $this->StatusBehavior;
    }

    /**
     * Sets the StatusBehavior.
     *
     * @param string $StatusBehavior
     *
     * @return CampaignInfo
     */
    public function setStatusBehavior($StatusBehavior)
    {
        $this->StatusBehavior = $StatusBehavior;

        return $this;
    }

    /**
     * Gets the Status.
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->Status;
    }

    /**
     * Sets the Status.
     *
     * @param string $Status
     *
     * @return CampaignInfo
     */
    public function setStatus($Status)
    {
        $this->Status = $Status;

        return $this;
    }

    /**
     * Gets the TimeTarget.
     *
     * @return TimeTargetInfo
     */
    public function getTimeTarget()
    {
        return $this->TimeTarget;
    }

    /**
     * Sets the TimeTarget.
     *
     * @param TimeTargetInfo $TimeTarget
     *
     * @return CampaignInfo
     */
    public function setTimeTarget(TimeTargetInfo $TimeTarget)
    {
        $this->TimeTarget = $TimeTarget;

        return $this;
    }

    /**
     * Gets the StatusContextStop.
     *
     * @return string
     */
    public function getStatusContextStop()
    {
        return $this->StatusContextStop;
    }

    /**
     * Sets the StatusContextStop.
     *
     * @param string $StatusContextStop
     *
     * @return CampaignInfo
     */
    public function setStatusContextStop($StatusContextStop)
    {
        $this->StatusContextStop = $StatusContextStop;

        return $this;
    }

    /**
     * Gets the ContextLimit.
     *
     * @return string
     */
    public function getContextLimit()
    {
        return $this->ContextLimit;
    }

    /**
     * Sets the ContextLimit.
     *
     * @param string $ContextLimit
     *
     * @return CampaignInfo
     */
    public function setContextLimit($ContextLimit)
    {
        $this->ContextLimit = $ContextLimit;

        return $this;
    }

    /**
     * Gets the ContextLimitSum.
     *
     * @return int
     */
    public function getContextLimitSum()
    {
        return $this->ContextLimitSum;
    }

    /**
     * Sets the ContextLimitSum.
     *
     * @param int $ContextLimitSum
     *
     * @return CampaignInfo
     */
    public function setContextLimitSum($ContextLimitSum)
    {
        $this->ContextLimitSum = $ContextLimitSum;

        return $this;
    }

    /**
     * Gets the ContextPricePercent.
     *
     * @return int
     */
    public function getContextPricePercent()
    {
        return $this->ContextPricePercent;
    }

    /**
     * Sets the ContextPricePercent.
     *
     * @param int $ContextPricePercent
     *
     * @return CampaignInfo
     */
    public function setContextPricePercent($ContextPricePercent)
    {
        $this->ContextPricePercent = $ContextPricePercent;

        return $this;
    }

    /**
     * Gets the AutoOptimization.
     *
     * @return string
     */
    public function getAutoOptimization()
    {
        return $this->AutoOptimization;
    }

    /**
     * Sets the AutoOptimization.
     *
     * @param string $AutoOptimization
     *
     * @return CampaignInfo
     */
    public function setAutoOptimization($AutoOptimization)
    {
        $this->AutoOptimization = $AutoOptimization;

        return $this;
    }

    /**
     * Gets the StatusMetricaControl.
     *
     * @return string
     */
    public function getStatusMetricaControl()
    {
        return $this->StatusMetricaControl;
    }

    /**
     * Sets the StatusMetricaControl.
     *
     * @param string $StatusMetricaControl
     *
     * @return CampaignInfo
     */
    public function setStatusMetricaControl($StatusMetricaControl)
    {
        $this->StatusMetricaControl = $StatusMetricaControl;

        return $this;
    }

    /**
     * Gets the DisabledDomains.
     *
     * @return string
     */
    public function getDisabledDomains()
    {
        return $this->DisabledDomains;
    }

    /**
     * Sets the DisabledDomains.
     *
     * @param string $DisabledDomains
     *
     * @return CampaignInfo
     */
    public function setDisabledDomains($DisabledDomains)
    {
        $this->DisabledDomains = $DisabledDomains;

        return $this;
    }

    /**
     * Gets the DisabledIps.
     *
     * @return string
     */
    public function getDisabledIps()
    {
        return $this->DisabledIps;
    }

    /**
     * Sets the DisabledIps.
     *
     * @param string $DisabledIps
     *
     * @return CampaignInfo
     */
    public function setDisabledIps($DisabledIps)
    {
        $this->DisabledIps = $DisabledIps;

        return $this;
    }

    /**
     * Gets the StatusOpenStat.
     *
     * @return string
     */
    public function getStatusOpenStat()
    {
        return $this->StatusOpenStat;
    }

    /**
     * Sets the StatusOpenStat.
     *
     * @param string $StatusOpenStat
     *
     * @return CampaignInfo
     */
    public function setStatusOpenStat($StatusOpenStat)
    {
        $this->StatusOpenStat = $StatusOpenStat;

        return $this;
    }

    /**
     * Gets the ConsiderTimeTarget.
     *
     * @return string
     */
    public function getConsiderTimeTarget()
    {
        return $this->ConsiderTimeTarget;
    }

    /**
     * Sets the ConsiderTimeTarget.
     *
     * @param string $ConsiderTimeTarget
     *
     * @return CampaignInfo
     */
    public function setConsiderTimeTarget($ConsiderTimeTarget)
    {
        $this->ConsiderTimeTarget = $ConsiderTimeTarget;

        return $this;
    }

    /**
     * Gets the ManagerName.
     *
     * @return string
     */
    public function getManagerName()
    {
        return $this->ManagerName;
    }

    /**
     * Sets the ManagerName.
     *
     * @param string $ManagerName
     *
     * @return CampaignInfo
     */
    public function setManagerName($ManagerName)
    {
        $this->ManagerName = $ManagerName;

        return $this;
    }

    /**
     * Gets the AgencyName.
     *
     * @return string
     */
    public function getAgencyName()
    {
        return $this->AgencyName;
    }

    /**
     * Sets the AgencyName.
     *
     * @param string $AgencyName
     *
     * @return CampaignInfo
     */
    public function setAgencyName($AgencyName)
    {
        $this->AgencyName = $AgencyName;

        return $this;
    }

    /**
     * Gets the StatusShow.
     *
     * @return string
     */
    public function getStatusShow()
    {
        return $this->StatusShow;
    }

    /**
     * Sets the StatusShow.
     *
     * @param string $StatusShow
     *
     * @return CampaignInfo
     */
    public function setStatusShow($StatusShow)
    {
        $this->StatusShow = $StatusShow;

        return $this;
    }

    /**
     * Gets the StatusArchive.
     *
     * @return string
     */
    public function getStatusArchive()
    {
        return $this->StatusArchive;
    }

    /**
     * Sets the StatusArchive.
     *
     * @param string $StatusArchive
     *
     * @return CampaignInfo
     */
    public function setStatusArchive($StatusArchive)
    {
        $this->StatusArchive = $StatusArchive;

        return $this;
    }

    /**
     * Gets the StatusActivating.
     *
     * @return string
     */
    public function getStatusActivating()
    {
        return $this->StatusActivating;
    }

    /**
     * Sets the StatusActivating.
     *
     * @param string $StatusActivating
     *
     * @return CampaignInfo
     */
    public function setStatusActivating($StatusActivating)
    {
        $this->StatusActivating = $StatusActivating;

        return $this;
    }

    /**
     * Gets the StatusModerate.
     *
     * @return string
     */
    public function getStatusModerate()
    {
        return $this->StatusModerate;
    }

    /**
     * Sets the StatusModerate.
     *
     * @param string $StatusModerate
     *
     * @return CampaignInfo
     */
    public function setStatusModerate($StatusModerate)
    {
        $this->StatusModerate = $StatusModerate;

        return $this;
    }

    /**
     * Gets the IsActive.
     *
     * @return string
     */
    public function getIsActive()
    {
        return $this->IsActive;
    }

    /**
     * Sets the IsActive.
     *
     * @param string $IsActive
     *
     * @return CampaignInfo
     */
    public function setIsActive($IsActive)
    {
        $this->IsActive = $IsActive;

        return $this;
    }

    /**
     * Gets the MinusKeywords.
     *
     * @return string[]
     */
    public function getMinusKeywords()
    {
        return $this->MinusKeywords;
    }

    /**
     * Sets the MinusKeywords.
     *
     * @param string[] $MinusKeywords
     *
     * @return CampaignInfo
     */
    public function setMinusKeywords(array $MinusKeywords)
    {
        $this->MinusKeywords = $MinusKeywords;

        return $this;
    }

    /**
     * Gets the AddRelevantPhrases.
     *
     * @return string
     */
    public function getAddRelevantPhrases()
    {
        return $this->AddRelevantPhrases;
    }

    /**
     * Sets the AddRelevantPhrases.
     *
     * @param string $AddRelevantPhrases
     *
     * @return CampaignInfo
     */
    public function setAddRelevantPhrases($AddRelevantPhrases)
    {
        $this->AddRelevantPhrases = $AddRelevantPhrases;

        return $this;
    }

    /**
     * Gets the RelevantPhrasesBudgetLimit.
     *
     * @return int
     */
    public function getRelevantPhrasesBudgetLimit()
    {
        return $this->RelevantPhrasesBudgetLimit;
    }

    /**
     * Sets the RelevantPhrasesBudgetLimit.
     *
     * @param int $RelevantPhrasesBudgetLimit
     *
     * @return CampaignInfo
     */
    public function setRelevantPhrasesBudgetLimit($RelevantPhrasesBudgetLimit)
    {
        $this->RelevantPhrasesBudgetLimit = $RelevantPhrasesBudgetLimit;

        return $this;
    }

    /**
     * Gets the SumAvailableForTransfer.
     *
     * @return float
     */
    public function getSumAvailableForTransfer()
    {
        return $this->SumAvailableForTransfer;
    }

    /**
     * Sets the SumAvailableForTransfer.
     *
     * @param float $SumAvailableForTransfer
     *
     * @return CampaignInfo
     */
    public function setSumAvailableForTransfer($SumAvailableForTransfer)
    {
        $this->SumAvailableForTransfer = $SumAvailableForTransfer;

        return $this;
    }
}