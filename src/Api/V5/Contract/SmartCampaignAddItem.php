<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class SmartCampaignAddItem
{
    protected $BiddingStrategy = null;

//    Can be omit.
//    protected $Settings = null;

    protected $CounterId = null;

//    Can be omit.
//    protected $PriorityGoals = null;

//    Can be omit.
//    protected $AttributionModel = null;

    /**
     * Creates a new instance of SmartCampaignAddItem.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets BiddingStrategy.
     */
    public function getBiddingStrategy(): SmartCampaignStrategyAdd
    {
        return $this->BiddingStrategy;
    }

    /**
     * Sets BiddingStrategy.
     *
     * @return $this
     */
    public function setBiddingStrategy(SmartCampaignStrategyAdd $value)
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
     * Gets CounterId.
     */
    public function getCounterId(): int
    {
        return $this->CounterId;
    }

    /**
     * Sets CounterId.
     *
     * @return $this
     */
    public function setCounterId(int $value)
    {
        $this->CounterId = $value;

        return $this;
    }

    /**
     * Gets PriorityGoals.
     */
    public function getPriorityGoals(): ?PriorityGoalsArray
    {
        return $this->PriorityGoals ?? null;
    }

    /**
     * Sets PriorityGoals.
     *
     * @return $this
     */
    public function setPriorityGoals(?PriorityGoalsArray $value = null)
    {
        $this->PriorityGoals = $value;

        return $this;
    }

    /**
     * Gets AttributionModel.
     *
     * @see AttributionModelEnum
     */
    public function getAttributionModel(): ?string
    {
        return $this->AttributionModel ?? null;
    }

    /**
     * Sets AttributionModel.
     *
     * @see AttributionModelEnum
     *
     * @return $this
     */
    public function setAttributionModel(?string $value = null)
    {
        $this->AttributionModel = $value;

        return $this;
    }
}
