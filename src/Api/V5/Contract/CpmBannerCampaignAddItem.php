<?php

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
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets BiddingStrategy.
     *
     * @return CpmBannerCampaignStrategyAdd
     */
    public function getBiddingStrategy()
    {
        return $this->BiddingStrategy;
    }

    /**
     * Sets BiddingStrategy.
     *
     * @param CpmBannerCampaignStrategyAdd $value
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
    public function getSettings()
    {
        return isset($this->Settings) ? $this->Settings : null;
    }

    /**
     * Sets Settings.
     *
     * @param CpmBannerCampaignSetting[]|null $value
     * @return $this
     */
    public function setSettings(array $value = null)
    {
        $this->Settings = $value;

        return $this;
    }

    /**
     * Gets CounterIds.
     *
     * @return int[]|null
     */
    public function getCounterIds()
    {
        return isset($this->CounterIds) ? $this->CounterIds : null;
    }

    /**
     * Sets CounterIds.
     *
     * @param int[]|null $value
     * @return $this
     */
    public function setCounterIds(array $value = null)
    {
        $this->CounterIds = $value;

        return $this;
    }

    /**
     * Gets FrequencyCap.
     *
     * @return FrequencyCapSetting|null
     */
    public function getFrequencyCap()
    {
        return isset($this->FrequencyCap) ? $this->FrequencyCap : null;
    }

    /**
     * Sets FrequencyCap.
     *
     * @param FrequencyCapSetting|null $value
     * @return $this
     */
    public function setFrequencyCap(FrequencyCapSetting $value = null)
    {
        $this->FrequencyCap = $value;

        return $this;
    }


}

