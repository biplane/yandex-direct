<?php

namespace Biplane\YandexDirectBundle\Contract;

/**
 * @codeCoverageIgnore
 * @SuppressWarnings(PHPMD)
 */
class RetargetingConditionGoalItem
{
    /**
     * @var int
     */
    protected $Time;
    /**
     * @var int
     */
    protected $GoalID;

    /**
     * Creates a new instance.
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets the Time.
     *
     * @return int
     */
    public function getTime()
    {
        return $this->Time;
    }

    /**
     * Sets the Time.
     *
     * @param int $Time
     *
     * @return RetargetingConditionGoalItem
     */
    public function setTime($Time)
    {
        $this->Time = $Time;

        return $this;
    }

    /**
     * Gets the GoalID.
     *
     * @return int
     */
    public function getGoalID()
    {
        return $this->GoalID;
    }

    /**
     * Sets the GoalID.
     *
     * @param int $GoalID
     *
     * @return RetargetingConditionGoalItem
     */
    public function setGoalID($GoalID)
    {
        $this->GoalID = $GoalID;

        return $this;
    }
}