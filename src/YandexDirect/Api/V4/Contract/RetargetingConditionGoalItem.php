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
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets Time.
     *
     * @return int|null
     */
    public function getTime()
    {
        return $this->Time;
    }

    /**
     * Sets Time.
     *
     * @param int|null $value
     * @return self
     */
    public function setTime($value = null)
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
     * @return self
     */
    public function setGoalID($value)
    {
        $this->GoalID = $value;

        return $this;
    }


}

