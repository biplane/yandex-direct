<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class StrategyAverageCrrAdd
{

    protected $Crr = null;

    protected $GoalId = null;

//    Can be omit.
//    protected $WeeklySpendLimit = null;

    /**
     * Creates a new instance of StrategyAverageCrrAdd.
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets Crr.
     *
     * @return int
     */
    public function getCrr()
    {
        return $this->Crr;
    }

    /**
     * Sets Crr.
     *
     * @param int $value
     * @return $this
     */
    public function setCrr($value)
    {
        $this->Crr = $value;

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


}

