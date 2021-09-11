<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V4\Contract;

/**
 * Auto-generated code.
 */
class TransferMoneyInfo
{
    protected $FromCampaigns = [];

    protected $ToCampaigns = [];

    /**
     * Creates a new instance of TransferMoneyInfo.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets FromCampaigns.
     *
     * @return PayCampElement[]
     */
    public function getFromCampaigns(): array
    {
        return $this->FromCampaigns;
    }

    /**
     * Sets FromCampaigns.
     *
     * @param PayCampElement[] $value
     *
     * @return $this
     */
    public function setFromCampaigns(array $value)
    {
        $this->FromCampaigns = $value;

        return $this;
    }

    /**
     * Gets ToCampaigns.
     *
     * @return PayCampElement[]
     */
    public function getToCampaigns(): array
    {
        return $this->ToCampaigns;
    }

    /**
     * Sets ToCampaigns.
     *
     * @param PayCampElement[] $value
     *
     * @return $this
     */
    public function setToCampaigns(array $value)
    {
        $this->ToCampaigns = $value;

        return $this;
    }
}
