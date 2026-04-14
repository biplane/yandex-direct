<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class UnifiedCampaignAddItem
{
//    Can be omitted.
//    protected $BiddingStrategy;

//    Can be omitted.
//    protected $Settings;

//    Can be omitted.
//    protected $CounterIds;

//    Can be omitted.
//    protected $PriorityGoals;

//    Can be omitted.
//    protected $TrackingParams;

//    Can be omitted.
//    protected $AttributionModel;

//    Can be omitted.
//    protected $PackageBiddingStrategy;

//    Can be omitted.
//    protected $NegativeKeywordSharedSetIds;

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
    public function getBiddingStrategy(): ?UnifiedCampaignStrategyAdd
    {
        return $this->BiddingStrategy ?? null;
    }

    /**
     * Set BiddingStrategy
     *
     * @return $this
     */
    public function setBiddingStrategy(?UnifiedCampaignStrategyAdd $value)
    {
        $this->BiddingStrategy = $value;

        return $this;
    }

    /**
     * Get Settings
     *
     * @return list<UnifiedCampaignSetting>
     */
    public function getSettings(): array
    {
        return $this->Settings ?? [];
    }

    /**
     * Set Settings
     *
     * @param list<UnifiedCampaignSetting> $value
     *
     * @return $this
     */
    public function setSettings(array $value)
    {
        $this->Settings = $value;

        return $this;
    }

    /**
     * Get CounterIds
     *
     * @return non-empty-list<int>|null
     */
    public function getCounterIds(): ?array
    {
        return $this->CounterIds ?? null;
    }

    /**
     * Set CounterIds
     *
     * @param non-empty-list<int>|null $value
     *
     * @return $this
     */
    public function setCounterIds(?array $value)
    {
        $this->CounterIds = $value;

        return $this;
    }

    /**
     * Get PriorityGoals
     */
    public function getPriorityGoals(): ?PriorityGoalsArray
    {
        return $this->PriorityGoals ?? null;
    }

    /**
     * Set PriorityGoals
     *
     * @return $this
     */
    public function setPriorityGoals(?PriorityGoalsArray $value)
    {
        $this->PriorityGoals = $value;

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
     * Get AttributionModel
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\AttributionModelEnum
     *
     * @return 'LC'|'LSC'|'FC'|'LYDC'|'LSCCD'|'FCCD'|'LYDCCD'|'AUTO'|null
     */
    public function getAttributionModel(): ?string
    {
        return $this->AttributionModel ?? null;
    }

    /**
     * Set AttributionModel
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\AttributionModelEnum
     *
     * @param 'LC'|'LSC'|'FC'|'LYDC'|'LSCCD'|'FCCD'|'LYDCCD'|'AUTO'|null $value
     *
     * @return $this
     */
    public function setAttributionModel(?string $value)
    {
        $this->AttributionModel = $value;

        return $this;
    }

    /**
     * Get PackageBiddingStrategy
     */
    public function getPackageBiddingStrategy(): ?UnifiedCampaignPackageBiddingStrategyAdd
    {
        return $this->PackageBiddingStrategy ?? null;
    }

    /**
     * Set PackageBiddingStrategy
     *
     * @return $this
     */
    public function setPackageBiddingStrategy(?UnifiedCampaignPackageBiddingStrategyAdd $value)
    {
        $this->PackageBiddingStrategy = $value;

        return $this;
    }

    /**
     * Get NegativeKeywordSharedSetIds
     *
     * @return non-empty-list<int>|null
     */
    public function getNegativeKeywordSharedSetIds(): ?array
    {
        return $this->NegativeKeywordSharedSetIds ?? null;
    }

    /**
     * Set NegativeKeywordSharedSetIds
     *
     * @param non-empty-list<int>|null $value
     *
     * @return $this
     */
    public function setNegativeKeywordSharedSetIds(?array $value)
    {
        $this->NegativeKeywordSharedSetIds = $value;

        return $this;
    }
}
