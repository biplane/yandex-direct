<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class GetCampaignsResponse extends GetResponseGeneral
{
//    Can be omitted.
//    protected $Campaigns = null;

    /**
     * @return CampaignGetItem[]|null
     */
    public function getCampaigns(): ?array
    {
        return $this->Campaigns ?? null;
    }

    /**
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
