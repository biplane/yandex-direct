<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class TextCampaignAddItem
{
//    Can be omitted.
//    protected $BiddingStrategy = null;

//    Can be omitted.
//    protected $Settings = null;

//    Can be omitted.
//    protected $CounterIds = null;

//    Can be omitted.
//    protected $RelevantKeywords = null;

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

    public function getBiddingStrategy(): ?TextCampaignStrategyAdd
    {
        return $this->BiddingStrategy ?? null;
    }

    /**
     * @return $this
     */
    public function setBiddingStrategy(?TextCampaignStrategyAdd $value = null)
    {
        $this->BiddingStrategy = $value;

        return $this;
    }

    /**
     * @return TextCampaignSetting[]|null
     */
    public function getSettings(): ?array
    {
        return $this->Settings ?? null;
    }

    /**
     * @param TextCampaignSetting[]|null $value
     *
     * @return $this
     */
    public function setSettings(?array $value = null)
    {
        $this->Settings = $value;

        return $this;
    }

    /**
     * @return int[]|null
     */
    public function getCounterIds(): ?array
    {
        return $this->CounterIds ?? null;
    }

    /**
     * @param int[]|null $value
     *
     * @return $this
     */
    public function setCounterIds(?array $value = null)
    {
        $this->CounterIds = $value;

        return $this;
    }

    public function getRelevantKeywords(): ?RelevantKeywordsSettingAdd
    {
        return $this->RelevantKeywords ?? null;
    }

    /**
     * @return $this
     */
    public function setRelevantKeywords(?RelevantKeywordsSettingAdd $value = null)
    {
        $this->RelevantKeywords = $value;

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

    public function getPackageBiddingStrategy(): ?TextCampaignPackageBiddingStrategyAdd
    {
        return $this->PackageBiddingStrategy ?? null;
    }

    /**
     * @return $this
     */
    public function setPackageBiddingStrategy(?TextCampaignPackageBiddingStrategyAdd $value = null)
    {
        $this->PackageBiddingStrategy = $value;

        return $this;
    }
}
