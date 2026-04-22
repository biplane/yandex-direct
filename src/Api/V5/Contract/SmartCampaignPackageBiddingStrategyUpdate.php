<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;
use Override;

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
    #[Override]
    public static function create(): static
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
