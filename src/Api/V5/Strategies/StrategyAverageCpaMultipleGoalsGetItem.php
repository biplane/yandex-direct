<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Strategies;

use AllowDynamicProperties;
use Override;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class StrategyAverageCpaMultipleGoalsGetItem extends StrategyAverageCpaMultipleGoalsBase
{
//    Can be omitted.
//    protected $WeeklyBudgetRollover;

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
     * Get WeeklyBudgetRollover
     */
    public function getWeeklyBudgetRollover(): ?int
    {
        return $this->WeeklyBudgetRollover ?? null;
    }

    /**
     * Set WeeklyBudgetRollover
     *
     * @return $this
     */
    public function setWeeklyBudgetRollover(?int $value)
    {
        $this->WeeklyBudgetRollover = $value;

        return $this;
    }

    /**
     * Get BudgetType
     *
     * @see \Biplane\YandexDirect\Api\V5\Strategies\BudgetTypeEnum
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
     * @see \Biplane\YandexDirect\Api\V5\Strategies\BudgetTypeEnum
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
