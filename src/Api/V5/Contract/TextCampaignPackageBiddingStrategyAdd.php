<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;
use Override;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class TextCampaignPackageBiddingStrategyAdd extends PackageBiddingStrategyAddBase
{
    /** @var TextCampaignPlatforms */
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
    public function getPlatforms(): TextCampaignPlatforms
    {
        return $this->Platforms;
    }

    /**
     * Set Platforms
     *
     * @return $this
     */
    public function setPlatforms(TextCampaignPlatforms $value)
    {
        $this->Platforms = $value;

        return $this;
    }
}
