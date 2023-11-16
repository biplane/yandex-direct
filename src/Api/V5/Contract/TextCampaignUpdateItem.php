<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class TextCampaignUpdateItem extends TextCampaignBase
{
//    Can be omitted.
//    protected $BiddingStrategy = null;

//    Can be omitted.
//    protected $Settings = null;

//    Can be omitted.
//    protected $TrackingParams = null;

//    Can be omitted.
//    protected $PriorityGoals = null;

//    Can be omitted.
//    protected $PackageBiddingStrategy = null;

    public function getBiddingStrategy(): ?TextCampaignStrategy
    {
        return $this->BiddingStrategy ?? null;
    }

    /**
     * @return $this
     */
    public function setBiddingStrategy(?TextCampaignStrategy $value = null)
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

    public function getPriorityGoals(): ?PriorityGoalsUpdateSetting
    {
        return $this->PriorityGoals ?? null;
    }

    /**
     * @return $this
     */
    public function setPriorityGoals(?PriorityGoalsUpdateSetting $value = null)
    {
        $this->PriorityGoals = $value;

        return $this;
    }

    public function getPackageBiddingStrategy(): ?TextCampaignPackageBiddingStrategyUpdate
    {
        return $this->PackageBiddingStrategy ?? null;
    }

    /**
     * @return $this
     */
    public function setPackageBiddingStrategy(?TextCampaignPackageBiddingStrategyUpdate $value = null)
    {
        $this->PackageBiddingStrategy = $value;

        return $this;
    }
}
