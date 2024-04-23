<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class StrategyMaximumClicks extends StrategyWeeklyBudgetBase
{
//    Can be omitted.
//    protected $CustomPeriodBudget = null;

//    Can be omitted.
//    protected $BudgetType = null;

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

    /**
     * @see BudgetTypeEnum
     */
    public function getBudgetType(): ?string
    {
        return $this->BudgetType ?? null;
    }

    /**
     * @see BudgetTypeEnum
     *
     * @return $this
     */
    public function setBudgetType(?string $value = null)
    {
        $this->BudgetType = $value;

        return $this;
    }
}
