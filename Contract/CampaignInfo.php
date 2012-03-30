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
     * @var date
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
     * @var CampaignContextStrategy
     */
    protected $ContextStrategy;
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
     * @return string
     */
    public function getLogin()
    {
        return $this->Login;
    }

    /**
     * @param string $Login
     * @return CampaignInfo
     */
    public function setLogin($Login)
    {
        $this->Login = $Login;

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
     * @return CampaignInfo
     */
    public function setCampaignID($CampaignID)
    {
        $this->CampaignID = $CampaignID;

        return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->Name;
    }

    /**
     * @param string $Name
     * @return CampaignInfo
     */
    public function setName($Name)
    {
        $this->Name = $Name;

        return $this;
    }

    /**
     * @return string
     */
    public function getFIO()
    {
        return $this->FIO;
    }

    /**
     * @param string $FIO
     * @return CampaignInfo
     */
    public function setFIO($FIO)
    {
        $this->FIO = $FIO;

        return $this;
    }

    /**
     * @return date
     */
    public function getStartDate()
    {
        return $this->StartDate;
    }

    /**
     * @param date $StartDate
     * @return CampaignInfo
     */
    public function setStartDate($StartDate)
    {
        $this->StartDate = $StartDate;

        return $this;
    }

    /**
     * @return float
     */
    public function getSum()
    {
        return $this->Sum;
    }

    /**
     * @param float $Sum
     * @return CampaignInfo
     */
    public function setSum($Sum)
    {
        $this->Sum = $Sum;

        return $this;
    }

    /**
     * @return float
     */
    public function getRest()
    {
        return $this->Rest;
    }

    /**
     * @param float $Rest
     * @return CampaignInfo
     */
    public function setRest($Rest)
    {
        $this->Rest = $Rest;

        return $this;
    }

    /**
     * @return int
     */
    public function getShows()
    {
        return $this->Shows;
    }

    /**
     * @param int $Shows
     * @return CampaignInfo
     */
    public function setShows($Shows)
    {
        $this->Shows = $Shows;

        return $this;
    }

    /**
     * @return int
     */
    public function getClicks()
    {
        return $this->Clicks;
    }

    /**
     * @param int $Clicks
     * @return CampaignInfo
     */
    public function setClicks($Clicks)
    {
        $this->Clicks = $Clicks;

        return $this;
    }

    /**
     * @return CampaignStrategy
     */
    public function getStrategy()
    {
        return $this->Strategy;
    }

    /**
     * @param CampaignStrategy $Strategy
     * @return CampaignInfo
     */
    public function setStrategy(CampaignStrategy $Strategy)
    {
        $this->Strategy = $Strategy;

        return $this;
    }

    /**
     * @return CampaignContextStrategy
     */
    public function getContextStrategy()
    {
        return $this->ContextStrategy;
    }

    /**
     * @param CampaignContextStrategy $ContextStrategy
     * @return CampaignInfo
     */
    public function setContextStrategy(CampaignContextStrategy $ContextStrategy)
    {
        $this->ContextStrategy = $ContextStrategy;

        return $this;
    }

    /**
     * @return string
     */
    public function getTradeType()
    {
        return $this->TradeType;
    }

    /**
     * @param string $TradeType
     * @return CampaignInfo
     */
    public function setTradeType($TradeType)
    {
        $this->TradeType = $TradeType;

        return $this;
    }

    /**
     * @return SmsNotificationInfo
     */
    public function getSmsNotification()
    {
        return $this->SmsNotification;
    }

    /**
     * @param SmsNotificationInfo $SmsNotification
     * @return CampaignInfo
     */
    public function setSmsNotification(SmsNotificationInfo $SmsNotification)
    {
        $this->SmsNotification = $SmsNotification;

        return $this;
    }

    /**
     * @return EmailNotificationInfo
     */
    public function getEmailNotification()
    {
        return $this->EmailNotification;
    }

    /**
     * @param EmailNotificationInfo $EmailNotification
     * @return CampaignInfo
     */
    public function setEmailNotification(EmailNotificationInfo $EmailNotification)
    {
        $this->EmailNotification = $EmailNotification;

        return $this;
    }

    /**
     * @return string
     */
    public function getStatusBehavior()
    {
        return $this->StatusBehavior;
    }

    /**
     * @param string $StatusBehavior
     * @return CampaignInfo
     */
    public function setStatusBehavior($StatusBehavior)
    {
        $this->StatusBehavior = $StatusBehavior;

        return $this;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->Status;
    }

    /**
     * @param string $Status
     * @return CampaignInfo
     */
    public function setStatus($Status)
    {
        $this->Status = $Status;

        return $this;
    }

    /**
     * @return TimeTargetInfo
     */
    public function getTimeTarget()
    {
        return $this->TimeTarget;
    }

    /**
     * @param TimeTargetInfo $TimeTarget
     * @return CampaignInfo
     */
    public function setTimeTarget(TimeTargetInfo $TimeTarget)
    {
        $this->TimeTarget = $TimeTarget;

        return $this;
    }

    /**
     * @return string
     */
    public function getStatusContextStop()
    {
        return $this->StatusContextStop;
    }

    /**
     * @param string $StatusContextStop
     * @return CampaignInfo
     */
    public function setStatusContextStop($StatusContextStop)
    {
        $this->StatusContextStop = $StatusContextStop;

        return $this;
    }

    /**
     * @return string
     */
    public function getContextLimit()
    {
        return $this->ContextLimit;
    }

    /**
     * @param string $ContextLimit
     * @return CampaignInfo
     */
    public function setContextLimit($ContextLimit)
    {
        $this->ContextLimit = $ContextLimit;

        return $this;
    }

    /**
     * @return int
     */
    public function getContextLimitSum()
    {
        return $this->ContextLimitSum;
    }

    /**
     * @param int $ContextLimitSum
     * @return CampaignInfo
     */
    public function setContextLimitSum($ContextLimitSum)
    {
        $this->ContextLimitSum = $ContextLimitSum;

        return $this;
    }

    /**
     * @return int
     */
    public function getContextPricePercent()
    {
        return $this->ContextPricePercent;
    }

    /**
     * @param int $ContextPricePercent
     * @return CampaignInfo
     */
    public function setContextPricePercent($ContextPricePercent)
    {
        $this->ContextPricePercent = $ContextPricePercent;

        return $this;
    }

    /**
     * @return string
     */
    public function getAutoOptimization()
    {
        return $this->AutoOptimization;
    }

    /**
     * @param string $AutoOptimization
     * @return CampaignInfo
     */
    public function setAutoOptimization($AutoOptimization)
    {
        $this->AutoOptimization = $AutoOptimization;

        return $this;
    }

    /**
     * @return string
     */
    public function getStatusMetricaControl()
    {
        return $this->StatusMetricaControl;
    }

    /**
     * @param string $StatusMetricaControl
     * @return CampaignInfo
     */
    public function setStatusMetricaControl($StatusMetricaControl)
    {
        $this->StatusMetricaControl = $StatusMetricaControl;

        return $this;
    }

    /**
     * @return string
     */
    public function getDisabledDomains()
    {
        return $this->DisabledDomains;
    }

    /**
     * @param string $DisabledDomains
     * @return CampaignInfo
     */
    public function setDisabledDomains($DisabledDomains)
    {
        $this->DisabledDomains = $DisabledDomains;

        return $this;
    }

    /**
     * @return string
     */
    public function getDisabledIps()
    {
        return $this->DisabledIps;
    }

    /**
     * @param string $DisabledIps
     * @return CampaignInfo
     */
    public function setDisabledIps($DisabledIps)
    {
        $this->DisabledIps = $DisabledIps;

        return $this;
    }

    /**
     * @return string
     */
    public function getStatusOpenStat()
    {
        return $this->StatusOpenStat;
    }

    /**
     * @param string $StatusOpenStat
     * @return CampaignInfo
     */
    public function setStatusOpenStat($StatusOpenStat)
    {
        $this->StatusOpenStat = $StatusOpenStat;

        return $this;
    }

    /**
     * @return string
     */
    public function getConsiderTimeTarget()
    {
        return $this->ConsiderTimeTarget;
    }

    /**
     * @param string $ConsiderTimeTarget
     * @return CampaignInfo
     */
    public function setConsiderTimeTarget($ConsiderTimeTarget)
    {
        $this->ConsiderTimeTarget = $ConsiderTimeTarget;

        return $this;
    }

    /**
     * @return string
     */
    public function getManagerName()
    {
        return $this->ManagerName;
    }

    /**
     * @param string $ManagerName
     * @return CampaignInfo
     */
    public function setManagerName($ManagerName)
    {
        $this->ManagerName = $ManagerName;

        return $this;
    }

    /**
     * @return string
     */
    public function getAgencyName()
    {
        return $this->AgencyName;
    }

    /**
     * @param string $AgencyName
     * @return CampaignInfo
     */
    public function setAgencyName($AgencyName)
    {
        $this->AgencyName = $AgencyName;

        return $this;
    }

    /**
     * @return string
     */
    public function getStatusShow()
    {
        return $this->StatusShow;
    }

    /**
     * @param string $StatusShow
     * @return CampaignInfo
     */
    public function setStatusShow($StatusShow)
    {
        $this->StatusShow = $StatusShow;

        return $this;
    }

    /**
     * @return string
     */
    public function getStatusArchive()
    {
        return $this->StatusArchive;
    }

    /**
     * @param string $StatusArchive
     * @return CampaignInfo
     */
    public function setStatusArchive($StatusArchive)
    {
        $this->StatusArchive = $StatusArchive;

        return $this;
    }

    /**
     * @return string
     */
    public function getStatusActivating()
    {
        return $this->StatusActivating;
    }

    /**
     * @param string $StatusActivating
     * @return CampaignInfo
     */
    public function setStatusActivating($StatusActivating)
    {
        $this->StatusActivating = $StatusActivating;

        return $this;
    }

    /**
     * @return string
     */
    public function getStatusModerate()
    {
        return $this->StatusModerate;
    }

    /**
     * @param string $StatusModerate
     * @return CampaignInfo
     */
    public function setStatusModerate($StatusModerate)
    {
        $this->StatusModerate = $StatusModerate;

        return $this;
    }

    /**
     * @return string
     */
    public function getIsActive()
    {
        return $this->IsActive;
    }

    /**
     * @param string $IsActive
     * @return CampaignInfo
     */
    public function setIsActive($IsActive)
    {
        $this->IsActive = $IsActive;

        return $this;
    }

    /**
     * @return string[]
     */
    public function getMinusKeywords()
    {
        return $this->MinusKeywords;
    }

    /**
     * @param string[] $MinusKeywords
     * @return CampaignInfo
     */
    public function setMinusKeywords(array $MinusKeywords)
    {
        $this->MinusKeywords = $MinusKeywords;

        return $this;
    }

    /**
     * @return string
     */
    public function getAddRelevantPhrases()
    {
        return $this->AddRelevantPhrases;
    }

    /**
     * @param string $AddRelevantPhrases
     * @return CampaignInfo
     */
    public function setAddRelevantPhrases($AddRelevantPhrases)
    {
        $this->AddRelevantPhrases = $AddRelevantPhrases;

        return $this;
    }

    /**
     * @return int
     */
    public function getRelevantPhrasesBudgetLimit()
    {
        return $this->RelevantPhrasesBudgetLimit;
    }

    /**
     * @param int $RelevantPhrasesBudgetLimit
     * @return CampaignInfo
     */
    public function setRelevantPhrasesBudgetLimit($RelevantPhrasesBudgetLimit)
    {
        $this->RelevantPhrasesBudgetLimit = $RelevantPhrasesBudgetLimit;

        return $this;
    }

    /**
     * @return float
     */
    public function getSumAvailableForTransfer()
    {
        return $this->SumAvailableForTransfer;
    }

    /**
     * @param float $SumAvailableForTransfer
     * @return CampaignInfo
     */
    public function setSumAvailableForTransfer($SumAvailableForTransfer)
    {
        $this->SumAvailableForTransfer = $SumAvailableForTransfer;

        return $this;
    }
}