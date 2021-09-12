<?php

declare(strict_types=1);

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
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    public function getGoalId(): int
    {
        return $this->GoalId;
    }

    /**
     * @return $this
     */
    public function setGoalId(int $value)
    {
        $this->GoalId = $value;

        return $this;
    }

    public function getValue(): int
    {
        return $this->Value;
    }

    /**
     * @return $this
     */
    public function setValue(int $value)
    {
        $this->Value = $value;

        return $this;
    }

    /**
     * @see OperationEnum
     */
    public function getOperation(): string
    {
        return $this->Operation;
    }

    /**
     * @see OperationEnum
     *
     * @return $this
     */
    public function setOperation(string $value)
    {
        $this->Operation = $value;

        return $this;
    }
}
