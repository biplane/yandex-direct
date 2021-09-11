<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class StrategyMaximumConversionRate extends StrategyWeeklyBudgetBase
{
//    Can be omit.
//    protected $GoalId = null;

    /**
     * Creates a new instance of StrategyMaximumConversionRate.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets GoalId.
     */
    public function getGoalId(): ?int
    {
        return $this->GoalId ?? null;
    }

    /**
     * Sets GoalId.
     *
     * @return $this
     */
    public function setGoalId(?int $value = null)
    {
        $this->GoalId = $value;

        return $this;
    }
}
