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

//    Can be omit.
//    protected $PriorityGoals = null;

//    Can be omit.
//    protected $AttributionModel = null;

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
     * @return $this
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
     * Gets PriorityGoals.
     *
     * @return PriorityGoalsArray|null
     */
    public function getPriorityGoals()
    {
        return isset($this->PriorityGoals) ? $this->PriorityGoals : null;
    }

    /**
     * Sets PriorityGoals.
     *
     * @param PriorityGoalsArray|null $value
     * @return $this
     */
    public function setPriorityGoals(PriorityGoalsArray $value = null)
    {
        $this->PriorityGoals = $value;

        return $this;
    }

    /**
     * Gets AttributionModel.
     *
     * @return string|null
     * @see AttributionModelEnum
     */
    public function getAttributionModel()
    {
        return isset($this->AttributionModel) ? $this->AttributionModel : null;
    }

    /**
     * Sets AttributionModel.
     *
     * @param string|null $value
     * @return $this
     * @see AttributionModelEnum
     */
    public function setAttributionModel($value = null)
    {
        $this->AttributionModel = $value;

        return $this;
    }


}

