<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class CpmBannerCampaignAddItem
{
    /** @var CpmBannerCampaignStrategyAdd */
    protected $BiddingStrategy;

//    Can be omitted.
//    protected $Settings;

//    Can be omitted.
//    protected $CounterIds;

//    Can be omitted.
//    protected $FrequencyCap;

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
    public function getBiddingStrategy(): CpmBannerCampaignStrategyAdd
    {
        return $this->BiddingStrategy;
    }

    /**
     * Set BiddingStrategy
     *
     * @return $this
     */
    public function setBiddingStrategy(CpmBannerCampaignStrategyAdd $value)
    {
        $this->BiddingStrategy = $value;

        return $this;
    }

    /**
     * Get Settings
     *
     * @return list<CpmBannerCampaignSetting>
     */
    public function getSettings(): array
    {
        return $this->Settings ?? [];
    }

    /**
     * Set Settings
     *
     * @param list<CpmBannerCampaignSetting> $value
     *
     * @return $this
     */
    public function setSettings(array $value)
    {
        $this->Settings = $value;

        return $this;
    }

    /**
     * Get CounterIds
     *
     * @return non-empty-list<int>|null
     */
    public function getCounterIds(): ?array
    {
        return $this->CounterIds ?? null;
    }

    /**
     * Set CounterIds
     *
     * @param non-empty-list<int>|null $value
     *
     * @return $this
     */
    public function setCounterIds(?array $value)
    {
        $this->CounterIds = $value;

        return $this;
    }

    /**
     * Get FrequencyCap
     */
    public function getFrequencyCap(): ?FrequencyCapSetting
    {
        return $this->FrequencyCap ?? null;
    }

    /**
     * Set FrequencyCap
     *
     * @return $this
     */
    public function setFrequencyCap(?FrequencyCapSetting $value)
    {
        $this->FrequencyCap = $value;

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
