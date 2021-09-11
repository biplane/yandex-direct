<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class UpdateCampaignsRequest
{
    protected $Campaigns = [];

    /**
     * Creates a new instance of UpdateCampaignsRequest.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets Campaigns.
     *
     * @return CampaignUpdateItem[]
     */
    public function getCampaigns(): array
    {
        return $this->Campaigns;
    }

    /**
     * Sets Campaigns.
     *
     * @param CampaignUpdateItem[] $value
     *
     * @return $this
     */
    public function setCampaigns(array $value)
    {
        $this->Campaigns = $value;

        return $this;
    }
}
