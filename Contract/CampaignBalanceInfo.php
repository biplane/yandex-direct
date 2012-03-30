<?php

namespace Biplane\YandexDirectBundle\Contract;

/**
 * @codeCoverageIgnore
 * @SuppressWarnings(PHPMD)
 */
class CampaignBalanceInfo
{
    /**
     * @var int
     */
    protected $CampaignID;
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
     * @return int
     */
    public function getCampaignID()
    {
        return $this->CampaignID;
    }

    /**
     * @param int $CampaignID
     * @return CampaignBalanceInfo
     */
    public function setCampaignID($CampaignID)
    {
        $this->CampaignID = $CampaignID;

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
     * @return CampaignBalanceInfo
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
     * @return CampaignBalanceInfo
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
     * @return CampaignBalanceInfo
     */
    public function setSumAvailableForTransfer($SumAvailableForTransfer)
    {
        $this->SumAvailableForTransfer = $SumAvailableForTransfer;

        return $this;
    }
}