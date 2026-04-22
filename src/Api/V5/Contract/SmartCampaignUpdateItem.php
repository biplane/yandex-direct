<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;
use Override;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class SmartCampaignUpdateItem extends SmartCampaignBase
{
//    Can be omitted.
//    protected $BiddingStrategy;

//    Can be omitted.
//    protected $Settings;

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
    #[Override]
    public static function create(): static
    {
        return new static();
    }

    /**
     * Get BiddingStrategy
     */
    public function getBiddingStrategy(): ?SmartCampaignStrategy
    {
        return $this->BiddingStrategy ?? null;
    }

    /**
     * Set BiddingStrategy
     *
     * @return $this
     */
    public function setBiddingStrategy(?SmartCampaignStrategy $value)
    {
        $this->BiddingStrategy = $value;

        return $this;
    }

    /**
     * Get Settings
     *
     * @return list<SmartCampaignSetting>
     */
    public function getSettings(): array
    {
        return $this->Settings ?? [];
    }

    /**
     * Set Settings
     *
     * @param list<SmartCampaignSetting> $value
     *
     * @return $this
     */
    public function setSettings(array $value)
    {
        $this->Settings = $value;

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
    public function getPackageBiddingStrategy(): ?SmartCampaignPackageBiddingStrategyUpdate
    {
        return $this->PackageBiddingStrategy ?? null;
    }

    /**
     * Set PackageBiddingStrategy
     *
     * @return $this
     */
    public function setPackageBiddingStrategy(?SmartCampaignPackageBiddingStrategyUpdate $value)
    {
        $this->PackageBiddingStrategy = $value;

        return $this;
    }
}
