<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;
use Override;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class UnifiedCampaignPackageBiddingStrategyGet extends PackageBiddingStrategyGetBase
{
    /** @var UnifiedCampaignPlatforms */
    protected $Platforms;

    /**
     * Create a new instance.
     *
     * @return static
     */
    #[Override]
    public static function create(): static
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
