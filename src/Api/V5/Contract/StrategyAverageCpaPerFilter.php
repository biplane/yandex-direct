<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class StrategyAverageCpaPerFilter
{

//    Can be omit.
//    protected $FilterAverageCpa = null;

//    Can be omit.
//    protected $FilterAverageCpc = null;

//    Can be omit.
//    protected $GoalId = null;

//    Can be omit.
//    protected $WeeklySpendLimit = null;

//    Can be omit.
//    protected $BidCeiling = null;

    /**
     * Creates a new instance of StrategyAverageCpaPerFilter.
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
     * @return int|null
     */
    public function getFilterAverageCpa()
    {
        return isset($this->FilterAverageCpa) ? $this->FilterAverageCpa : null;
    }

    /**
     * Sets FilterAverageCpa.
     *
     * @param int|null $value
     * @return $this
     */
    public function setFilterAverageCpa($value = null)
    {
        $this->FilterAverageCpa = $value;

        return $this;
    }

    /**
     * Gets FilterAverageCpc.
     *
     * @return int|null
     */
    public function getFilterAverageCpc()
    {
        return isset($this->FilterAverageCpc) ? $this->FilterAverageCpc : null;
    }

    /**
     * Sets FilterAverageCpc.
     *
     * @param int|null $value
     * @return $this
     */
    public function setFilterAverageCpc($value = null)
    {
        $this->FilterAverageCpc = $value;

        return $this;
    }

    /**
     * Gets GoalId.
     *
     * @return int|null
     */
    public function getGoalId()
    {
        return isset($this->GoalId) ? $this->GoalId : null;
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

