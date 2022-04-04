<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class DynamicTextCampaignGetItem extends DynamicTextCampaignBase
{

//    Can be omit.
//    protected $BiddingStrategy = null;

//    Can be omit.
//    protected $Settings = null;

//    Can be omit.
//    protected $PlacementTypes = null;

//    Can be omit.
//    protected $PriorityGoals = null;

    /**
     * Creates a new instance of DynamicTextCampaignGetItem.
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
     * @return DynamicTextCampaignStrategy|null
     */
    public function getBiddingStrategy()
    {
        return isset($this->BiddingStrategy) ? $this->BiddingStrategy : null;
    }

    /**
     * Sets BiddingStrategy.
     *
     * @param DynamicTextCampaignStrategy|null $value
     * @return $this
     */
    public function setBiddingStrategy(DynamicTextCampaignStrategy $value = null)
    {
        $this->BiddingStrategy = $value;

        return $this;
    }

    /**
     * Gets Settings.
     *
     * @return DynamicTextCampaignSettingGet[]|null
     */
    public function getSettings()
    {
        return isset($this->Settings) ? $this->Settings : null;
    }

    /**
     * Sets Settings.
     *
     * @param DynamicTextCampaignSettingGet[]|null $value
     * @return $this
     */
    public function setSettings(array $value = null)
    {
        $this->Settings = $value;

        return $this;
    }

    /**
     * Gets PlacementTypes.
     *
     * @return PlacementTypeArray|null
     */
    public function getPlacementTypes()
    {
        return isset($this->PlacementTypes) ? $this->PlacementTypes : null;
    }

    /**
     * Sets PlacementTypes.
     *
     * @param PlacementTypeArray|null $value
     * @return $this
     */
    public function setPlacementTypes(PlacementTypeArray $value = null)
    {
        $this->PlacementTypes = $value;

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


}

