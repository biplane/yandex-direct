<?php

namespace Biplane\YandexDirectBundle\Contract;

/**
 * @codeCoverageIgnore
 */
class TransferMoneyInfo
{
    /**
     * @var PayCampElement[]
     */
    protected $FromCampaigns;
    /**
     * @var PayCampElement[]
     */
    protected $ToCampaigns;

    /**
     * @return PayCampElement[]
     */
    public function getFromCampaigns()
    {
        return $this->FromCampaigns;
    }

    /**
     * @param PayCampElement[] $FromCampaigns
     * @return TransferMoneyInfo
     */
    public function setFromCampaigns(array $FromCampaigns)
    {
        $this->FromCampaigns = $FromCampaigns;

        return $this;
    }

    /**
     * @return PayCampElement[]
     */
    public function getToCampaigns()
    {
        return $this->ToCampaigns;
    }

    /**
     * @param PayCampElement[] $ToCampaigns
     * @return TransferMoneyInfo
     */
    public function setToCampaigns(array $ToCampaigns)
    {
        $this->ToCampaigns = $ToCampaigns;

        return $this;
    }
}