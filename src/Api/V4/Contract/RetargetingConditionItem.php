<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V4\Contract;

/**
 * Auto-generated code.
 */
class RetargetingConditionItem
{
    protected $Type = null;

    protected $Goals = [];

    /**
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    public function getType(): string
    {
        return $this->Type;
    }

    /**
     * @return $this
     */
    public function setType(string $value)
    {
        $this->Type = $value;

        return $this;
    }

    /**
     * @return RetargetingConditionGoalItem[]
     */
    public function getGoals(): array
    {
        return $this->Goals;
    }

    /**
     * @param RetargetingConditionGoalItem[] $value
     *
     * @return $this
     */
    public function setGoals(array $value)
    {
        $this->Goals = $value;

        return $this;
    }
}
