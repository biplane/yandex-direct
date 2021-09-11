<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class GetCampaignsResponse extends GetResponseGeneral
{
//    Can be omit.
//    protected $Campaigns = null;

    /**
     * Creates a new instance of GetCampaignsResponse.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets Campaigns.
     *
     * @return CampaignGetItem[]|null
     */
    public function getCampaigns(): ?array
    {
        return $this->Campaigns ?? null;
    }

    /**
     * Sets Campaigns.
     *
     * @param CampaignGetItem[]|null $value
     *
     * @return $this
     */
    public function setCampaigns(?array $value = null)
    {
        $this->Campaigns = $value;

        return $this;
    }
}
