<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class StrategyPayForConversionCrr
{

//    Can be omit.
//    protected $Crr = null;

//    Can be omit.
//    protected $GoalId = null;

//    Can be omit.
//    protected $WeeklySpendLimit = null;

    /**
     * Creates a new instance of StrategyPayForConversionCrr.
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
     * @return int|null
     */
    public function getCrr()
    {
        return isset($this->Crr) ? $this->Crr : null;
    }

    /**
     * Sets Crr.
     *
     * @param int|null $value
     * @return $this
     */
    public function setCrr($value = null)
    {
        $this->Crr = $value;

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


}

