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
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    public function getTime(): ?int
    {
        return $this->Time;
    }

    /**
     * @return $this
     */
    public function setTime(?int $value = null)
    {
        $this->Time = $value;

        return $this;
    }

    public function getGoalID(): int
    {
        return $this->GoalID;
    }

    /**
     * @return $this
     */
    public function setGoalID(int $value)
    {
        $this->GoalID = $value;

        return $this;
    }
}
