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
    public function getPlatforms(): ?TextCampaignPlatforms
    {
        return $this->Platforms ?? null;
    }

    /**
     * Set Platforms
     *
     * @return $this
     */
    public function setPlatforms(?TextCampaignPlatforms $value)
    {
        $this->Platforms = $value;

        return $this;
    }
}
