<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class StrategyMaximumConversionRateAdd extends StrategyWeeklyBudgetAddBase
{
    protected $GoalId = null;

//    Can be omitted.
//    protected $CustomPeriodBudget = null;

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

    public function getCustomPeriodBudget(): ?CustomPeriodBudget
    {
        return $this->CustomPeriodBudget ?? null;
    }

    /**
     * @return $this
     */
    public function setCustomPeriodBudget(?CustomPeriodBudget $value = null)
    {
        $this->CustomPeriodBudget = $value;

        return $this;
    }
}
