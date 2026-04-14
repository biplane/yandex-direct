<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class DynamicTextCampaignUpdateItem extends DynamicTextCampaignBase
{
//    Can be omitted.
//    protected $BiddingStrategy;

//    Can be omitted.
//    protected $Settings;

//    Can be omitted.
//    protected $PlacementTypes;

//    Can be omitted.
//    protected $TrackingParams;

//    Can be omitted.
//    protected $PriorityGoals;

//    Can be omitted.
//    protected $PackageBiddingStrategy;

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
    public function getBiddingStrategy(): ?DynamicTextCampaignStrategy
    {
        return $this->BiddingStrategy ?? null;
    }

    /**
     * Set BiddingStrategy
     *
     * @return $this
     */
    public function setBiddingStrategy(?DynamicTextCampaignStrategy $value)
    {
        $this->BiddingStrategy = $value;

        return $this;
    }

    /**
     * Get Settings
     *
     * @return list<DynamicTextCampaignSetting>
     */
    public function getSettings(): array
    {
        return $this->Settings ?? [];
    }

    /**
     * Set Settings
     *
     * @param list<DynamicTextCampaignSetting> $value
     *
     * @return $this
     */
    public function setSettings(array $value)
    {
        $this->Settings = $value;

        return $this;
    }

    /**
     * Get PlacementTypes
     *
     * @return list<PlacementType>
     */
    public function getPlacementTypes(): array
    {
        return $this->PlacementTypes ?? [];
    }

    /**
     * Set PlacementTypes
     *
     * @param list<PlacementType> $value
     *
     * @return $this
     */
    public function setPlacementTypes(array $value)
    {
        $this->PlacementTypes = $value;

        return $this;
    }

    /**
     * Get TrackingParams
     */
    public function getTrackingParams(): ?string
    {
        return $this->TrackingParams ?? null;
    }

    /**
     * Set TrackingParams
     *
     * @return $this
     */
    public function setTrackingParams(?string $value)
    {
        $this->TrackingParams = $value;

        return $this;
    }

    /**
     * Get PriorityGoals
     */
    public function getPriorityGoals(): ?PriorityGoalsUpdateSetting
    {
        return $this->PriorityGoals ?? null;
    }

    /**
     * Set PriorityGoals
     *
     * @return $this
     */
    public function setPriorityGoals(?PriorityGoalsUpdateSetting $value)
    {
        $this->PriorityGoals = $value;

        return $this;
    }

    /**
     * Get PackageBiddingStrategy
     */
    public function getPackageBiddingStrategy(): ?DynamicTextCampaignPackageBiddingStrategyUpdate
    {
        return $this->PackageBiddingStrategy ?? null;
    }

    /**
     * Set PackageBiddingStrategy
     *
     * @return $this
     */
    public function setPackageBiddingStrategy(?DynamicTextCampaignPackageBiddingStrategyUpdate $value)
    {
        $this->PackageBiddingStrategy = $value;

        return $this;
    }
}
