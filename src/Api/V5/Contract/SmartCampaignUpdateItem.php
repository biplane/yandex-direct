<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class SmartCampaignUpdateItem extends SmartCampaignBase
{

//    Can be omit.
//    protected $BiddingStrategy = null;

//    Can be omit.
//    protected $Settings = null;

//    Can be omit.
//    protected $PriorityGoals = null;

    /**
     * Creates a new instance of SmartCampaignUpdateItem.
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
     * @return SmartCampaignStrategy|null
     */
    public function getBiddingStrategy()
    {
        return isset($this->BiddingStrategy) ? $this->BiddingStrategy : null;
    }

    /**
     * Sets BiddingStrategy.
     *
     * @param SmartCampaignStrategy|null $value
     * @return $this
     */
    public function setBiddingStrategy(SmartCampaignStrategy $value = null)
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
     * Gets PriorityGoals.
     *
     * @return PriorityGoalsUpdateSetting|null
     */
    public function getPriorityGoals()
    {
        return isset($this->PriorityGoals) ? $this->PriorityGoals : null;
    }

    /**
     * Sets PriorityGoals.
     *
     * @param PriorityGoalsUpdateSetting|null $value
     * @return $this
     */
    public function setPriorityGoals(PriorityGoalsUpdateSetting $value = null)
    {
        $this->PriorityGoals = $value;

        return $this;
    }


}

