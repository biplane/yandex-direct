<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class StrategyAverageCpa
{

    protected $AverageCpa = null;

    protected $GoalId = null;

    protected $WeeklySpendLimit = null;

    protected $BidCeiling = null;

    /**
     * Creates a new instance of StrategyAverageCpa.
     *
     * @return StrategyAverageCpa
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets AverageCpa.
     *
     * @return int|null
     */
    public function getAverageCpa()
    {
        return $this->AverageCpa;
    }

    /**
     * Sets AverageCpa.
     *
     * @param int|null $value
     * @return $this
     */
    public function setAverageCpa($value = null)
    {
        $this->AverageCpa = $value;

        return $this;
    }

    /**
     * Gets GoalId.
     *
     * @return int|null
     */
    public function getGoalId()
    {
        return $this->GoalId;
    }

    /**
     * Sets GoalId.
     *
     * @param int|null $value
     * @return $this
     */
    public function setGoalId($value = null)
    {
        $this->GoalId = $value;

        return $this;
    }

    /**
     * Gets WeeklySpendLimit.
     *
     * @return int|null
     */
    public function getWeeklySpendLimit()
    {
        return $this->WeeklySpendLimit;
    }

    /**
     * Sets WeeklySpendLimit.
     *
     * @param int|null $value
     * @return $this
     */
    public function setWeeklySpendLimit($value = null)
    {
        $this->WeeklySpendLimit = $value;

        return $this;
    }

    /**
     * Gets BidCeiling.
     *
     * @return int|null
     */
    public function getBidCeiling()
    {
        return $this->BidCeiling;
    }

    /**
     * Sets BidCeiling.
     *
     * @param int|null $value
     * @return $this
     */
    public function setBidCeiling($value = null)
    {
        $this->BidCeiling = $value;

        return $this;
    }


}

