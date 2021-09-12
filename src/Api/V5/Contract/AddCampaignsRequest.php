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
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    /**
     * @return CampaignAddItem[]
     */
    public function getCampaigns(): array
    {
        return $this->Campaigns;
    }

    /**
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
