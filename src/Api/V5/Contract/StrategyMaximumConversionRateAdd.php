<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class StrategyMaximumConversionRateAdd extends StrategyWeeklyBudgetAddBase
{
    protected $GoalId = null;

    /**
     * Creates a new instance of StrategyMaximumConversionRateAdd.
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
}
