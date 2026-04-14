<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class CheckCampaignsResponse
{
//    Can be omitted.
//    protected $Campaigns;

    /** @var string */
    protected $Timestamp;

    /**
     * Create a new instance.
     *
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    /**
     * Get Campaigns
     *
     * @return list<CampaignChangesItem>
     */
    public function getCampaigns(): array
    {
        return $this->Campaigns ?? [];
    }

    /**
     * Set Campaigns
     *
     * @param list<CampaignChangesItem> $value
     *
     * @return $this
     */
    public function setCampaigns(array $value)
    {
        $this->Campaigns = $value;

        return $this;
    }

    /**
     * Get Timestamp
     */
    public function getTimestamp(): string
    {
        return $this->Timestamp;
    }

    /**
     * Set Timestamp
     *
     * @return $this
     */
    public function setTimestamp(string $value)
    {
        $this->Timestamp = $value;

        return $this;
    }
}
