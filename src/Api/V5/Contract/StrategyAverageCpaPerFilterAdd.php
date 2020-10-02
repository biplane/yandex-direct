<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class StrategyAverageCpaPerFilterAdd
{

    protected $FilterAverageCpa = null;

    protected $GoalId = null;

//    Can be omit.
//    protected $WeeklySpendLimit = null;

//    Can be omit.
//    protected $BidCeiling = null;

    /**
     * Creates a new instance of StrategyAverageCpaPerFilterAdd.
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets FilterAverageCpa.
     *
     * @return int
     */
    public function getFilterAverageCpa()
    {
        return $this->FilterAverageCpa;
    }

    /**
     * Sets FilterAverageCpa.
     *
     * @param int $value
     * @return $this
     */
    public function setFilterAverageCpa($value)
    {
        $this->FilterAverageCpa = $value;

        return $this;
    }

    /**
     * Gets GoalId.
     *
     * @return int
     */
    public function getGoalId()
    {
        return $this->GoalId;
    }

    /**
     * Sets GoalId.
     *
     * @param int $value
     * @return $this
     */
    public function setGoalId($value)
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
        return isset($this->WeeklySpendLimit) ? $this->WeeklySpendLimit : null;
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
        return isset($this->BidCeiling) ? $this->BidCeiling : null;
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

