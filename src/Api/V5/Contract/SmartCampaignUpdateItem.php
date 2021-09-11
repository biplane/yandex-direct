<?php

declare(strict_types=1);

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
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets BiddingStrategy.
     */
    public function getBiddingStrategy(): ?SmartCampaignStrategy
    {
        return $this->BiddingStrategy ?? null;
    }

    /**
     * Sets BiddingStrategy.
     *
     * @return $this
     */
    public function setBiddingStrategy(?SmartCampaignStrategy $value = null)
    {
        $this->BiddingStrategy = $value;

        return $this;
    }

    /**
     * Gets Settings.
     *
     * @return SmartCampaignSetting[]|null
     */
    public function getSettings(): ?array
    {
        return $this->Settings ?? null;
    }

    /**
     * Sets Settings.
     *
     * @param SmartCampaignSetting[]|null $value
     *
     * @return $this
     */
    public function setSettings(?array $value = null)
    {
        $this->Settings = $value;

        return $this;
    }

    /**
     * Gets PriorityGoals.
     */
    public function getPriorityGoals(): ?PriorityGoalsUpdateSetting
    {
        return $this->PriorityGoals ?? null;
    }

    /**
     * Sets PriorityGoals.
     *
     * @return $this
     */
    public function setPriorityGoals(?PriorityGoalsUpdateSetting $value = null)
    {
        $this->PriorityGoals = $value;

        return $this;
    }
}
