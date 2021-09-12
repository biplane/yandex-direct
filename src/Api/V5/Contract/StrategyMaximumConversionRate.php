<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class StrategyMaximumConversionRate extends StrategyWeeklyBudgetBase
{
//    Can be omitted.
//    protected $GoalId = null;

    public function getGoalId(): ?int
    {
        return $this->GoalId ?? null;
    }

    /**
     * @return $this
     */
    public function setGoalId(?int $value = null)
    {
        $this->GoalId = $value;

        return $this;
    }
}
