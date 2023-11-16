<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class SmartCampaignAddItem
{
//    Can be omitted.
//    protected $BiddingStrategy = null;

//    Can be omitted.
//    protected $Settings = null;

    protected $CounterId = null;

//    Can be omitted.
//    protected $PriorityGoals = null;

//    Can be omitted.
//    protected $TrackingParams = null;

//    Can be omitted.
//    protected $AttributionModel = null;

//    Can be omitted.
//    protected $PackageBiddingStrategy = null;

    /**
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    public function getBiddingStrategy(): ?SmartCampaignStrategyAdd
    {
        return $this->BiddingStrategy ?? null;
    }

    /**
     * @return $this
     */
    public function setBiddingStrategy(?SmartCampaignStrategyAdd $value = null)
    {
        $this->BiddingStrategy = $value;

        return $this;
    }

    /**
     * @return SmartCampaignSetting[]|null
     */
    public function getSettings(): ?array
    {
        return $this->Settings ?? null;
    }

    /**
     * @param SmartCampaignSetting[]|null $value
     *
     * @return $this
     */
    public function setSettings(?array $value = null)
    {
        $this->Settings = $value;

        return $this;
    }

    public function getCounterId(): int
    {
        return $this->CounterId;
    }

    /**
     * @return $this
     */
    public function setCounterId(int $value)
    {
        $this->CounterId = $value;

        return $this;
    }

    public function getPriorityGoals(): ?PriorityGoalsArray
    {
        return $this->PriorityGoals ?? null;
    }

    /**
     * @return $this
     */
    public function setPriorityGoals(?PriorityGoalsArray $value = null)
    {
        $this->PriorityGoals = $value;

        return $this;
    }

    public function getTrackingParams(): ?string
    {
        return $this->TrackingParams ?? null;
    }

    /**
     * @return $this
     */
    public function setTrackingParams(?string $value = null)
    {
        $this->TrackingParams = $value;

        return $this;
    }

    /**
     * @see AttributionModelEnum
     */
    public function getAttributionModel(): ?string
    {
        return $this->AttributionModel ?? null;
    }

    /**
     * @see AttributionModelEnum
     *
     * @return $this
     */
    public function setAttributionModel(?string $value = null)
    {
        $this->AttributionModel = $value;

        return $this;
    }

    public function getPackageBiddingStrategy(): ?SmartCampaignPackageBiddingStrategyAdd
    {
        return $this->PackageBiddingStrategy ?? null;
    }

    /**
     * @return $this
     */
    public function setPackageBiddingStrategy(?SmartCampaignPackageBiddingStrategyAdd $value = null)
    {
        $this->PackageBiddingStrategy = $value;

        return $this;
    }
}
