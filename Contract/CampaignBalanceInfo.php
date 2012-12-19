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
     * @return CampaignBalanceInfo
     */
    public function setCampaignID($CampaignID)
    {
        $this->CampaignID = $CampaignID;

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
     * @return CampaignBalanceInfo
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
     * @return CampaignBalanceInfo
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
     * @return CampaignBalanceInfo
     */
    public function setSumAvailableForTransfer($SumAvailableForTransfer)
    {
        $this->SumAvailableForTransfer = $SumAvailableForTransfer;

        return $this;
    }
}