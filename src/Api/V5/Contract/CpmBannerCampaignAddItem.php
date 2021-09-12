<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class CpmBannerCampaignAddItem
{
    protected $BiddingStrategy = null;

//    Can be omitted.
//    protected $Settings = null;

//    Can be omitted.
//    protected $CounterIds = null;

//    Can be omitted.
//    protected $FrequencyCap = null;

    /**
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    public function getBiddingStrategy(): CpmBannerCampaignStrategyAdd
    {
        return $this->BiddingStrategy;
    }

    /**
     * @return $this
     */
    public function setBiddingStrategy(CpmBannerCampaignStrategyAdd $value)
    {
        $this->BiddingStrategy = $value;

        return $this;
    }

    /**
     * @return CpmBannerCampaignSetting[]|null
     */
    public function getSettings(): ?array
    {
        return $this->Settings ?? null;
    }

    /**
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
     * @return int[]|null
     */
    public function getCounterIds(): ?array
    {
        return $this->CounterIds ?? null;
    }

    /**
     * @param int[]|null $value
     *
     * @return $this
     */
    public function setCounterIds(?array $value = null)
    {
        $this->CounterIds = $value;

        return $this;
    }

    public function getFrequencyCap(): ?FrequencyCapSetting
    {
        return $this->FrequencyCap ?? null;
    }

    /**
     * @return $this
     */
    public function setFrequencyCap(?FrequencyCapSetting $value = null)
    {
        $this->FrequencyCap = $value;

        return $this;
    }
}
