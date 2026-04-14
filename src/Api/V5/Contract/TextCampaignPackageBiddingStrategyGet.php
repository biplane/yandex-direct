<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class TextCampaignPackageBiddingStrategyGet extends PackageBiddingStrategyGetBase
{
    /** @var TextCampaignPlatforms */
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
