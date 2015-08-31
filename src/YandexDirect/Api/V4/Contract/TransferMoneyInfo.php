<?php

namespace Biplane\YandexDirect\Api\V4\Contract;

/**
 * @codeCoverageIgnore
 * @SuppressWarnings(PHPMD)
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
     * Creates a new instance.
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets the FromCampaigns.
     *
     * @return PayCampElement[]
     */
    public function getFromCampaigns()
    {
        return $this->FromCampaigns;
    }

    /**
     * Sets the FromCampaigns.
     *
     * @param PayCampElement[] $FromCampaigns
     *
     * @return TransferMoneyInfo
     */
    public function setFromCampaigns(array $FromCampaigns)
    {
        $this->FromCampaigns = $FromCampaigns;

        return $this;
    }

    /**
     * Gets the ToCampaigns.
     *
     * @return PayCampElement[]
     */
    public function getToCampaigns()
    {
        return $this->ToCampaigns;
    }

    /**
     * Sets the ToCampaigns.
     *
     * @param PayCampElement[] $ToCampaigns
     *
     * @return TransferMoneyInfo
     */
    public function setToCampaigns(array $ToCampaigns)
    {
        $this->ToCampaigns = $ToCampaigns;

        return $this;
    }
}