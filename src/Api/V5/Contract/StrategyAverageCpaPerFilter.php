<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class StrategyAverageCpaPerFilter
{
//    Can be omit.
//    protected $FilterAverageCpa = null;

//    Can be omit.
//    protected $GoalId = null;

//    Can be omit.
//    protected $WeeklySpendLimit = null;

//    Can be omit.
//    protected $BidCeiling = null;

    /**
     * Creates a new instance of StrategyAverageCpaPerFilter.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets FilterAverageCpa.
     */
    public function getFilterAverageCpa(): ?int
    {
        return $this->FilterAverageCpa ?? null;
    }

    /**
     * Sets FilterAverageCpa.
     *
     * @return $this
     */
    public function setFilterAverageCpa(?int $value = null)
    {
        $this->FilterAverageCpa = $value;

        return $this;
    }

    /**
     * Gets GoalId.
     */
    public function getGoalId(): ?int
    {
        return $this->GoalId ?? null;
    }

    /**
     * Sets GoalId.
     *
     * @return $this
     */
    public function setGoalId(?int $value = null)
    {
        $this->GoalId = $value;

        return $this;
    }

    /**
     * Gets WeeklySpendLimit.
     */
    public function getWeeklySpendLimit(): ?int
    {
        return $this->WeeklySpendLimit ?? null;
    }

    /**
     * Sets WeeklySpendLimit.
     *
     * @return $this
     */
    public function setWeeklySpendLimit(?int $value = null)
    {
        $this->WeeklySpendLimit = $value;

        return $this;
    }

    /**
     * Gets BidCeiling.
     */
    public function getBidCeiling(): ?int
    {
        return $this->BidCeiling ?? null;
    }

    /**
     * Sets BidCeiling.
     *
     * @return $this
     */
    public function setBidCeiling(?int $value = null)
    {
        $this->BidCeiling = $value;

        return $this;
    }
}
