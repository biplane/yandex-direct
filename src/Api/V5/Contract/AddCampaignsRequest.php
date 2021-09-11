<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class AddCampaignsRequest
{
    protected $Campaigns = [];

    /**
     * Creates a new instance of AddCampaignsRequest.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets Campaigns.
     *
     * @return CampaignAddItem[]
     */
    public function getCampaigns(): array
    {
        return $this->Campaigns;
    }

    /**
     * Sets Campaigns.
     *
     * @param CampaignAddItem[] $value
     *
     * @return $this
     */
    public function setCampaigns(array $value)
    {
        $this->Campaigns = $value;

        return $this;
    }
}
