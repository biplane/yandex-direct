<?php

namespace Biplane\YandexDirect\Api\V4\Contract;

/**
 * Auto-generated code.
 */
class RetargetingConditionGoalItem
{

    protected $Time = null;

    protected $GoalID = null;

    /**
     * Creates a new instance of RetargetingConditionGoalItem.
     *
     * @return RetargetingConditionGoalItem
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets Time.
     *
     * @return int
     */
    public function getTime()
    {
        return $this->Time;
    }

    /**
     * Sets Time.
     *
     * @param int $value
     * @return $this
     */
    public function setTime($value)
    {
        $this->Time = $value;

        return $this;
    }

    /**
     * Gets GoalID.
     *
     * @return int
     */
    public function getGoalID()
    {
        return $this->GoalID;
    }

    /**
     * Sets GoalID.
     *
     * @param int $value
     * @return $this
     */
    public function setGoalID($value)
    {
        $this->GoalID = $value;

        return $this;
    }


}

