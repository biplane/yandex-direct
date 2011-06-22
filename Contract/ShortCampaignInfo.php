<?php

namespace Biplane\YandexDirectBundle\Contract;

/**
 * @codeCoverageIgnore
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
     * @return int
     */
    public function getCampaignID()
    {
        return $this->CampaignID;
    }

    /**
     * @param int $CampaignID
     * @return ShortCampaignInfo
     */
    public function setCampaignID($CampaignID)
    {
        $this->CampaignID = $CampaignID;

        return $this;
    }

    /**
     * @return string
     */
    public function getLogin()
    {
        return $this->Login;
    }

    /**
     * @param string $Login
     * @return ShortCampaignInfo
     */
    public function setLogin($Login)
    {
        $this->Login = $Login;

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
     * @return ShortCampaignInfo
     */
    public function setName($Name)
    {
        $this->Name = $Name;

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
     * @return ShortCampaignInfo
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
     * @return ShortCampaignInfo
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
     * @return ShortCampaignInfo
     */
    public function setRest($Rest)
    {
        $this->Rest = $Rest;

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
     * @return ShortCampaignInfo
     */
    public function setSumAvailableForTransfer($SumAvailableForTransfer)
    {
        $this->SumAvailableForTransfer = $SumAvailableForTransfer;

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
     * @return ShortCampaignInfo
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
     * @return ShortCampaignInfo
     */
    public function setClicks($Clicks)
    {
        $this->Clicks = $Clicks;

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
     * @return ShortCampaignInfo
     */
    public function setStatus($Status)
    {
        $this->Status = $Status;

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
     * @return ShortCampaignInfo
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
     * @return ShortCampaignInfo
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
     * @return ShortCampaignInfo
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
     * @return ShortCampaignInfo
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
     * @return ShortCampaignInfo
     */
    public function setIsActive($IsActive)
    {
        $this->IsActive = $IsActive;

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
     * @return ShortCampaignInfo
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
     * @return ShortCampaignInfo
     */
    public function setAgencyName($AgencyName)
    {
        $this->AgencyName = $AgencyName;

        return $this;
    }
}