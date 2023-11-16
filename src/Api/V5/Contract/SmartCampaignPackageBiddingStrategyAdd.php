<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class SmartCampaignPackageBiddingStrategyAdd extends PackageBiddingStrategyAddBase
{
    protected $Platforms = null;

    public function getPlatforms(): SmartCampaignPlatforms
    {
        return $this->Platforms;
    }

    /**
     * @return $this
     */
    public function setPlatforms(SmartCampaignPlatforms $value)
    {
        $this->Platforms = $value;

        return $this;
    }
}
