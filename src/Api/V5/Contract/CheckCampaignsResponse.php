<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class CheckCampaignsResponse
{
//    Can be omit.
//    protected $Campaigns = null;

    protected $Timestamp = null;

    /**
     * Creates a new instance of CheckCampaignsResponse.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets Campaigns.
     *
     * @return CampaignChangesItem[]|null
     */
    public function getCampaigns(): ?array
    {
        return $this->Campaigns ?? null;
    }

    /**
     * Sets Campaigns.
     *
     * @param CampaignChangesItem[]|null $value
     *
     * @return $this
     */
    public function setCampaigns(?array $value = null)
    {
        $this->Campaigns = $value;

        return $this;
    }

    /**
     * Gets Timestamp.
     */
    public function getTimestamp(): string
    {
        return $this->Timestamp;
    }

    /**
     * Sets Timestamp.
     *
     * @return $this
     */
    public function setTimestamp(string $value)
    {
        $this->Timestamp = $value;

        return $this;
    }
}
