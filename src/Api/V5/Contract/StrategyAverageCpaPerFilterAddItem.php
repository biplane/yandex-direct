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
    protected $FilterAverageCpa = null;

    protected $GoalId = null;

//    Can be omitted.
//    protected $WeeklySpendLimit = null;

//    Can be omitted.
//    protected $BidCeiling = null;

//    Can be omitted.
//    protected $ExplorationBudget = null;

    /**
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    public function getFilterAverageCpa(): int
    {
        return $this->FilterAverageCpa;
    }

    /**
     * @return $this
     */
    public function setFilterAverageCpa(int $value)
    {
        $this->FilterAverageCpa = $value;

        return $this;
    }

    public function getGoalId(): int
    {
        return $this->GoalId;
    }

    /**
     * @return $this
     */
    public function setGoalId(int $value)
    {
        $this->GoalId = $value;

        return $this;
    }

    public function getWeeklySpendLimit(): ?int
    {
        return $this->WeeklySpendLimit ?? null;
    }

    /**
     * @return $this
     */
    public function setWeeklySpendLimit(?int $value = null)
    {
        $this->WeeklySpendLimit = $value;

        return $this;
    }

    public function getBidCeiling(): ?int
    {
        return $this->BidCeiling ?? null;
    }

    /**
     * @return $this
     */
    public function setBidCeiling(?int $value = null)
    {
        $this->BidCeiling = $value;

        return $this;
    }

    public function getExplorationBudget(): ?ExplorationBudget
    {
        return $this->ExplorationBudget ?? null;
    }

    /**
     * @return $this
     */
    public function setExplorationBudget(?ExplorationBudget $value = null)
    {
        $this->ExplorationBudget = $value;

        return $this;
    }
}
