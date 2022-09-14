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
//    protected $Campaigns = null;

    protected $Timestamp = null;

    /**
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    /**
     * @return CampaignChangesItem[]|null
     */
    public function getCampaigns(): ?array
    {
        return $this->Campaigns ?? null;
    }

    /**
     * @param CampaignChangesItem[]|null $value
     *
     * @return $this
     */
    public function setCampaigns(?array $value = null)
    {
        $this->Campaigns = $value;

        return $this;
    }

    public function getTimestamp(): string
    {
        return $this->Timestamp;
    }

    /**
     * @return $this
     */
    public function setTimestamp(string $value)
    {
        $this->Timestamp = $value;

        return $this;
    }
}
