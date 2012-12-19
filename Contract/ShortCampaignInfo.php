<?php

namespace Biplane\YandexDirectBundle\Contract;

/**
 * @codeCoverageIgnore
 * @SuppressWarnings(PHPMD)
 */
class ShortCampaignInfo
{
    /**
     * @var int
     */
    protected $CampaignID;
    /**
     * @var string
     */
    protected $Login;
    /**
     * @var string
     */
    protected $Name;
    /**
     * @var string
     */
    protected $StartDate;
    /**
     * @var string
     */
    protected $StrategyName;
    /**
     * @var string
     */
    protected $ContextStrategyName;
    /**
     * @var float
     */
    protected $Sum;
    /**
     * @var float
     */
    protected $Rest;
    /**
     * @var float
     */
    protected $SumAvailableForTransfer;
    /**
     * @var int
     */
    protected $Shows;
    /**
     * @var int
     */
    protected $Clicks;
    /**
     * @var string
     */
    protected $Status;
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
     * @var string
     */
    protected $ManagerName;
    /**
     * @var string
     */
    protected $AgencyName;

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
     * @return ShortCampaignInfo
     */
    public function setCampaignID($CampaignID)
    {
        $this->CampaignID = $CampaignID;

        return $this;
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
     * @return ShortCampaignInfo
     */
    public function setLogin($Login)
    {
        $this->Login = $Login;

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
     * @return ShortCampaignInfo
     */
    public function setName($Name)
    {
        $this->Name = $Name;

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
     * @return ShortCampaignInfo
     */
    public function setStartDate($StartDate)
    {
        $this->StartDate = $StartDate;

        return $this;
    }

    /**
     * Gets the StrategyName.
     *
     * @return string
     */
    public function getStrategyName()
    {
        return $this->StrategyName;
    }

    /**
     * Sets the StrategyName.
     *
     * @param string $StrategyName
     *
     * @return ShortCampaignInfo
     */
    public function setStrategyName($StrategyName)
    {
        $this->StrategyName = $StrategyName;

        return $this;
    }

    /**
     * Gets the ContextStrategyName.
     *
     * @return string
     */
    public function getContextStrategyName()
    {
        return $this->ContextStrategyName;
    }

    /**
     * Sets the ContextStrategyName.
     *
     * @param string $ContextStrategyName
     *
     * @return ShortCampaignInfo
     */
    public function setContextStrategyName($ContextStrategyName)
    {
        $this->ContextStrategyName = $ContextStrategyName;

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
     * @return ShortCampaignInfo
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
     * @return ShortCampaignInfo
     */
    public function setRest($Rest)
    {
        $this->Rest = $Rest;

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
     * @return ShortCampaignInfo
     */
    public function setSumAvailableForTransfer($SumAvailableForTransfer)
    {
        $this->SumAvailableForTransfer = $SumAvailableForTransfer;

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
     * @return ShortCampaignInfo
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
     * @return ShortCampaignInfo
     */
    public function setClicks($Clicks)
    {
        $this->Clicks = $Clicks;

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
     * @return ShortCampaignInfo
     */
    public function setStatus($Status)
    {
        $this->Status = $Status;

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
     * @return ShortCampaignInfo
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
     * @return ShortCampaignInfo
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
     * @return ShortCampaignInfo
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
     * @return ShortCampaignInfo
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
     * @return ShortCampaignInfo
     */
    public function setIsActive($IsActive)
    {
        $this->IsActive = $IsActive;

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
     * @return ShortCampaignInfo
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
     * @return ShortCampaignInfo
     */
    public function setAgencyName($AgencyName)
    {
        $this->AgencyName = $AgencyName;

        return $this;
    }
}