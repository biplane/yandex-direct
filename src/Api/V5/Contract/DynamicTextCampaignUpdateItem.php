<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class DynamicTextCampaignUpdateItem extends DynamicTextCampaignBase
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
     * Creates a new instance of DynamicTextCampaignUpdateItem.
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
     * Gets PlacementTypes.
     *
     * @return PlacementType[]|null
     */
    public function getPlacementTypes()
    {
        return isset($this->PlacementTypes) ? $this->PlacementTypes : null;
    }

    /**
     * Sets PlacementTypes.
     *
     * @param PlacementType[]|null $value
     * @return $this
     */
    public function setPlacementTypes(array $value = null)
    {
        $this->PlacementTypes = $value;

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

