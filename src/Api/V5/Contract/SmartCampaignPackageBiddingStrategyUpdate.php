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
//    protected $Platforms;

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
     * Get Platforms
     */
    public function getPlatforms(): ?SmartCampaignPlatforms
    {
        return $this->Platforms ?? null;
    }

    /**
     * Set Platforms
     *
     * @return $this
     */
    public function setPlatforms(?SmartCampaignPlatforms $value)
    {
        $this->Platforms = $value;

        return $this;
    }
}
