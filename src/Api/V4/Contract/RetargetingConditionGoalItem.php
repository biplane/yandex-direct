<?php

declare(strict_types=1);

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
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets Time.
     */
    public function getTime(): ?int
    {
        return $this->Time;
    }

    /**
     * Sets Time.
     *
     * @return $this
     */
    public function setTime(?int $value = null)
    {
        $this->Time = $value;

        return $this;
    }

    /**
     * Gets GoalID.
     */
    public function getGoalID(): int
    {
        return $this->GoalID;
    }

    /**
     * Sets GoalID.
     *
     * @return $this
     */
    public function setGoalID(int $value)
    {
        $this->GoalID = $value;

        return $this;
    }
}
