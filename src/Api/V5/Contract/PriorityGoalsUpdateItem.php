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
     * Creates a new instance of PriorityGoalsUpdateItem.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets GoalId.
     */
    public function getGoalId(): int
    {
        return $this->GoalId;
    }

    /**
     * Sets GoalId.
     *
     * @return $this
     */
    public function setGoalId(int $value)
    {
        $this->GoalId = $value;

        return $this;
    }

    /**
     * Gets Value.
     */
    public function getValue(): int
    {
        return $this->Value;
    }

    /**
     * Sets Value.
     *
     * @return $this
     */
    public function setValue(int $value)
    {
        $this->Value = $value;

        return $this;
    }

    /**
     * Gets Operation.
     *
     * @see OperationEnum
     */
    public function getOperation(): string
    {
        return $this->Operation;
    }

    /**
     * Sets Operation.
     *
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
