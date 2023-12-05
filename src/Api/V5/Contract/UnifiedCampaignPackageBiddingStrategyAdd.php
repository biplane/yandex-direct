<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class UnifiedCampaignPackageBiddingStrategyAdd extends PackageBiddingStrategyAddBase
{
    protected $Platforms = null;

    public function getPlatforms(): UnifiedCampaignPlatforms
    {
        return $this->Platforms;
    }

    /**
     * @return $this
     */
    public function setPlatforms(UnifiedCampaignPlatforms $value)
    {
        $this->Platforms = $value;

        return $this;
    }
}
