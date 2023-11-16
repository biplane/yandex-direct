<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class SmartCampaignPackageBiddingStrategyUpdate extends PackageBiddingStrategyUpdateBase
{
//    Can be omitted.
//    protected $Platforms = null;

    public function getPlatforms(): ?SmartCampaignPlatforms
    {
        return $this->Platforms ?? null;
    }

    /**
     * @return $this
     */
    public function setPlatforms(?SmartCampaignPlatforms $value = null)
    {
        $this->Platforms = $value;

        return $this;
    }
}
