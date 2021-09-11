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
     * Creates a new instance of RetargetingConditionItem.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets Type.
     */
    public function getType(): string
    {
        return $this->Type;
    }

    /**
     * Sets Type.
     *
     * @return $this
     */
    public function setType(string $value)
    {
        $this->Type = $value;

        return $this;
    }

    /**
     * Gets Goals.
     *
     * @return RetargetingConditionGoalItem[]
     */
    public function getGoals(): array
    {
        return $this->Goals;
    }

    /**
     * Sets Goals.
     *
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
