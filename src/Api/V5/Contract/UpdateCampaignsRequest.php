<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class UpdateCampaignsRequest
{
    protected $Campaigns = [];

    /**
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    /**
     * @return CampaignUpdateItem[]
     */
    public function getCampaigns(): array
    {
        return $this->Campaigns;
    }

    /**
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
