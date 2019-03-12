<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class PriorityGoalsUpdateItem
{

    protected $GoalId = null;

    protected $Value = null;

    protected $Operation = null;

    /**
     * Creates a new instance of PriorityGoalsUpdateItem.
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

    /**
     * Gets Operation.
     *
     * @return string
     * @see OperationEnum
     */
    public function getOperation()
    {
        return $this->Operation;
    }

    /**
     * Sets Operation.
     *
     * @param string $value
     * @return $this
     * @see OperationEnum
     */
    public function setOperation($value)
    {
        $this->Operation = $value;

        return $this;
    }


}

