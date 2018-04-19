<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class DynamicTextCampaignAddItem
{

    protected $BiddingStrategy = null;

//    Can be omit.
//    protected $Settings = null;

//    Can be omit.
//    protected $CounterIds = null;

    /**
     * Creates a new instance of DynamicTextCampaignAddItem.
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
     * @return DynamicTextCampaignStrategyAdd
     */
    public function getBiddingStrategy()
    {
        return $this->BiddingStrategy;
    }

    /**
     * Sets BiddingStrategy.
     *
     * @param DynamicTextCampaignStrategyAdd $value
     * @return self
     */
    public function setBiddingStrategy(DynamicTextCampaignStrategyAdd $value)
    {
        $this->BiddingStrategy = $value;

        return $this;
    }

    /**
     * Gets Settings.
     *
     * @return DynamicTextCampaignSetting[]|null
     */
    public function getSettings()
    {
        return isset($this->Settings) ? $this->Settings : null;
    }

    /**
     * Sets Settings.
     *
     * @param DynamicTextCampaignSetting[]|null $value
     * @return self
     */
    public function setSettings(array $value = null)
    {
        $this->Settings = $value;

        return $this;
    }

    /**
     * Gets CounterIds.
     *
     * @return struct[]|null
     */
    public function getCounterIds()
    {
        return isset($this->CounterIds) ? $this->CounterIds : null;
    }

    /**
     * Sets CounterIds.
     *
     * @param struct[]|null $value
     * @return self
     */
    public function setCounterIds(array $value = null)
    {
        $this->CounterIds = $value;

        return $this;
    }


}

