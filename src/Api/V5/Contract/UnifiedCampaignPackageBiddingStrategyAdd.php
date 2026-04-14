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
    /** @var UnifiedCampaignPlatforms */
    protected $Platforms;

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
    public function getPlatforms(): UnifiedCampaignPlatforms
    {
        return $this->Platforms;
    }

    /**
     * Set Platforms
     *
     * @return $this
     */
    public function setPlatforms(UnifiedCampaignPlatforms $value)
    {
        $this->Platforms = $value;

        return $this;
    }
}
