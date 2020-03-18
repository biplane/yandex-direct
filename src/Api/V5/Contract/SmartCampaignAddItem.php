<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class SmartCampaignAddItem
{

    protected $BiddingStrategy = null;

//    Can be omit.
//    protected $Settings = null;

    protected $CounterId = null;

//    Can be omit.
//    protected $PriorityGoals = null;

//    Can be omit.
//    protected $AttributionModel = null;

    /**
     * Creates a new instance of SmartCampaignAddItem.
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
     * @return SmartCampaignStrategyAdd
     */
    public function getBiddingStrategy()
    {
        return $this->BiddingStrategy;
    }

    /**
     * Sets BiddingStrategy.
     *
     * @param SmartCampaignStrategyAdd $value
     * @return $this
     */
    public function setBiddingStrategy(SmartCampaignStrategyAdd $value)
    {
        $this->BiddingStrategy = $value;

        return $this;
    }

    /**
     * Gets Settings.
     *
     * @return SmartCampaignSetting[]|null
     */
    public function getSettings()
    {
        return isset($this->Settings) ? $this->Settings : null;
    }

    /**
     * Sets Settings.
     *
     * @param SmartCampaignSetting[]|null $value
     * @return $this
     */
    public function setSettings(array $value = null)
    {
        $this->Settings = $value;

        return $this;
    }

    /**
     * Gets CounterId.
     *
     * @return int
     */
    public function getCounterId()
    {
        return $this->CounterId;
    }

    /**
     * Sets CounterId.
     *
     * @param int $value
     * @return $this
     */
    public function setCounterId($value)
    {
        $this->CounterId = $value;

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

