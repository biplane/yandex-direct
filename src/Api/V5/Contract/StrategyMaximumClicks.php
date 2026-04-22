<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;
use Override;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class StrategyMaximumClicks extends StrategyWeeklyBudgetBase
{
//    Can be omitted.
//    protected $CustomPeriodBudget;

//    Can be omitted.
//    protected $BudgetType;

    /**
     * Create a new instance.
     *
     * @return static
     */
    #[Override]
    public static function create(): static
    {
        return new static();
    }

    /**
     * Get CustomPeriodBudget
     */
    public function getCustomPeriodBudget(): ?CustomPeriodBudget
    {
        return $this->CustomPeriodBudget ?? null;
    }

    /**
     * Set CustomPeriodBudget
     *
     * @return $this
     */
    public function setCustomPeriodBudget(?CustomPeriodBudget $value)
    {
        $this->CustomPeriodBudget = $value;

        return $this;
    }

    /**
     * Get BudgetType
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\BudgetTypeEnum
     *
     * @return 'WEEKLY_BUDGET'|'CUSTOM_PERIOD_BUDGET'|null
     */
    public function getBudgetType(): ?string
    {
        return $this->BudgetType ?? null;
    }

    /**
     * Set BudgetType
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\BudgetTypeEnum
     *
     * @param 'WEEKLY_BUDGET'|'CUSTOM_PERIOD_BUDGET'|null $value
     *
     * @return $this
     */
    public function setBudgetType(?string $value)
    {
        $this->BudgetType = $value;

        return $this;
    }
}
