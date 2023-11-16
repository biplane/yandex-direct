<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class TextCampaignPackageBiddingStrategyUpdate extends PackageBiddingStrategyUpdateBase
{
//    Can be omitted.
//    protected $Platforms = null;

    public function getPlatforms(): ?TextCampaignPlatforms
    {
        return $this->Platforms ?? null;
    }

    /**
     * @return $this
     */
    public function setPlatforms(?TextCampaignPlatforms $value = null)
    {
        $this->Platforms = $value;

        return $this;
    }
}
