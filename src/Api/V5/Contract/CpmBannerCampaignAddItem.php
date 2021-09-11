<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class CpmBannerCampaignAddItem
{
    protected $BiddingStrategy = null;

//    Can be omit.
//    protected $Settings = null;

//    Can be omit.
//    protected $CounterIds = null;

//    Can be omit.
//    protected $FrequencyCap = null;

    /**
     * Creates a new instance of CpmBannerCampaignAddItem.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets BiddingStrategy.
     */
    public function getBiddingStrategy(): CpmBannerCampaignStrategyAdd
    {
        return $this->BiddingStrategy;
    }

    /**
     * Sets BiddingStrategy.
     *
     * @return $this
     */
    public function setBiddingStrategy(CpmBannerCampaignStrategyAdd $value)
    {
        $this->BiddingStrategy = $value;

        return $this;
    }

    /**
     * Gets Settings.
     *
     * @return CpmBannerCampaignSetting[]|null
     */
    public function getSettings(): ?array
    {
        return $this->Settings ?? null;
    }

    /**
     * Sets Settings.
     *
     * @param CpmBannerCampaignSetting[]|null $value
     *
     * @return $this
     */
    public function setSettings(?array $value = null)
    {
        $this->Settings = $value;

        return $this;
    }

    /**
     * Gets CounterIds.
     *
     * @return int[]|null
     */
    public function getCounterIds(): ?array
    {
        return $this->CounterIds ?? null;
    }

    /**
     * Sets CounterIds.
     *
     * @param int[]|null $value
     *
     * @return $this
     */
    public function setCounterIds(?array $value = null)
    {
        $this->CounterIds = $value;

        return $this;
    }

    /**
     * Gets FrequencyCap.
     */
    public function getFrequencyCap(): ?FrequencyCapSetting
    {
        return $this->FrequencyCap ?? null;
    }

    /**
     * Sets FrequencyCap.
     *
     * @return $this
     */
    public function setFrequencyCap(?FrequencyCapSetting $value = null)
    {
        $this->FrequencyCap = $value;

        return $this;
    }
}
