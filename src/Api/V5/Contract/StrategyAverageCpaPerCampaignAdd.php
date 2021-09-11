<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class StrategyAverageCpaPerCampaignAdd
{
    protected $AverageCpa = null;

    protected $GoalId = null;

//    Can be omit.
//    protected $WeeklySpendLimit = null;

//    Can be omit.
//    protected $BidCeiling = null;

    /**
     * Creates a new instance of StrategyAverageCpaPerCampaignAdd.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets AverageCpa.
     */
    public function getAverageCpa(): int
    {
        return $this->AverageCpa;
    }

    /**
     * Sets AverageCpa.
     *
     * @return $this
     */
    public function setAverageCpa(int $value)
    {
        $this->AverageCpa = $value;

        return $this;
    }

    /**
     * Gets GoalId.
     */
    public function getGoalId(): int
    {
        return $this->GoalId;
    }

    /**
     * Sets GoalId.
     *
     * @return $this
     */
    public function setGoalId(int $value)
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
