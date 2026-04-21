<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class CpmBannerCampaignGetItem extends CpmBannerCampaignBase
{
//    Can be omitted.
//    protected $BiddingStrategy;

//    Can be omitted.
//    protected $Settings;

//    Can be omitted.
//    protected $VideoTarget;

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
     * Get BiddingStrategy
     */
    public function getBiddingStrategy(): ?CpmBannerCampaignStrategy
    {
        return $this->BiddingStrategy ?? null;
    }

    /**
     * Set BiddingStrategy
     *
     * @return $this
     */
    public function setBiddingStrategy(?CpmBannerCampaignStrategy $value)
    {
        $this->BiddingStrategy = $value;

        return $this;
    }

    /**
     * Get Settings
     *
     * @return list<CpmBannerCampaignSettingGet>
     */
    public function getSettings(): array
    {
        return $this->Settings ?? [];
    }

    /**
     * Set Settings
     *
     * @param list<CpmBannerCampaignSettingGet> $value
     *
     * @return $this
     */
    public function setSettings(array $value)
    {
        $this->Settings = $value;

        return $this;
    }

    /**
     * Get VideoTarget
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\VideoTargetEnum
     *
     * @return 'VIEWS'|'CLICKS'|null
     */
    public function getVideoTarget(): ?string
    {
        return $this->VideoTarget ?? null;
    }

    /**
     * Set VideoTarget
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\VideoTargetEnum
     *
     * @param 'VIEWS'|'CLICKS'|null $value
     *
     * @return $this
     */
    public function setVideoTarget(?string $value)
    {
        $this->VideoTarget = $value;

        return $this;
    }
}
