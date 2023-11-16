<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class TextCampaignPackageBiddingStrategyAdd extends PackageBiddingStrategyAddBase
{
    protected $Platforms = null;

    public function getPlatforms(): TextCampaignPlatforms
    {
        return $this->Platforms;
    }

    /**
     * @return $this
     */
    public function setPlatforms(TextCampaignPlatforms $value)
    {
        $this->Platforms = $value;

        return $this;
    }
}
