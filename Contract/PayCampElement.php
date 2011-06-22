<?php

namespace Biplane\YandexDirectBundle\Contract;

/**
 * @codeCoverageIgnore
 */
class PayCampElement
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
     * @return int
     */
    public function getCampaignID()
    {
        return $this->CampaignID;
    }

    /**
     * @param int $CampaignID
     * @return PayCampElement
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
     * @return PayCampElement
     */
    public function setSum($Sum)
    {
        $this->Sum = $Sum;

        return $this;
    }
}