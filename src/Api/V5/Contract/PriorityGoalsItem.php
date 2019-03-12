<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class PriorityGoalsItem
{

    protected $GoalId = null;

    protected $Value = null;

    /**
     * Creates a new instance of PriorityGoalsItem.
     *
     * @return self
     */
    public static function create()
    {
        return new self();
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
     * Gets Value.
     *
     * @return int
     */
    public function getValue()
    {
        return $this->Value;
    }

    /**
     * Sets Value.
     *
     * @param int $value
     * @return $this
     */
    public function setValue($value)
    {
        $this->Value = $value;

        return $this;
    }


}

