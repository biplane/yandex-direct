<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class StrategyAverageCpaPerFilterAddItem
{
    /** @var int */
    protected $FilterAverageCpa;

    /** @var int */
    protected $GoalId;

//    Can be omitted.
//    protected $WeeklySpendLimit;

//    Can be omitted.
//    protected $CustomPeriodBudget;

//    Can be omitted.
//    protected $BidCeiling;

//    Can be omitted.
//    protected $ExplorationBudget;

    /**
     * Create a new instance.
     *
     * @return static
     */
    public static function create(): static
    {
        return new static();
    }

    /**
     * Get FilterAverageCpa
     */
    public function getFilterAverageCpa(): int
    {
        return $this->FilterAverageCpa;
    }

    /**
     * Set FilterAverageCpa
     *
     * @return $this
     */
    public function setFilterAverageCpa(int $value)
    {
        $this->FilterAverageCpa = $value;

        return $this;
    }

    /**
     * Get GoalId
     */
    public function getGoalId(): int
    {
        return $this->GoalId;
    }

    /**
     * Set GoalId
     *
     * @return $this
     */
    public function setGoalId(int $value)
    {
        $this->GoalId = $value;

        return $this;
    }

    /**
     * Get WeeklySpendLimit
     */
    public function getWeeklySpendLimit(): ?int
    {
        return $this->WeeklySpendLimit ?? null;
    }

    /**
     * Set WeeklySpendLimit
     *
     * @return $this
     */
    public function setWeeklySpendLimit(?int $value)
    {
        $this->WeeklySpendLimit = $value;

        return $this;
    }

    /**
     * Get CustomPeriodBudget
     */
    public function getCustomPeriodBudget(): ?CustomPeriodBudget
    {
        return $this->CustomPeriodBudget ?? null;
    }

    /**
     * Set CustomPeriodBudget
     *
     * @return $this
     */
    public function setCustomPeriodBudget(?CustomPeriodBudget $value)
    {
        $this->CustomPeriodBudget = $value;

        return $this;
    }

    /**
     * Get BidCeiling
     */
    public function getBidCeiling(): ?int
    {
        return $this->BidCeiling ?? null;
    }

    /**
     * Set BidCeiling
     *
     * @return $this
     */
    public function setBidCeiling(?int $value)
    {
        $this->BidCeiling = $value;

        return $this;
    }

    /**
     * Get ExplorationBudget
     */
    public function getExplorationBudget(): ?ExplorationBudget
    {
        return $this->ExplorationBudget ?? null;
    }

    /**
     * Set ExplorationBudget
     *
     * @return $this
     */
    public function setExplorationBudget(?ExplorationBudget $value)
    {
        $this->ExplorationBudget = $value;

        return $this;
    }
}
