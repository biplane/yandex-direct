<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class StrategyAverageCpcPerFilter
{
//    Can be omitted.
//    protected $FilterAverageCpc;

//    Can be omitted.
//    protected $WeeklySpendLimit;

//    Can be omitted.
//    protected $CustomPeriodBudget;

//    Can be omitted.
//    protected $BidCeiling;

//    Can be omitted.
//    protected $BudgetType;

    /**
     * Create a new instance.
     *
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    /**
     * Get FilterAverageCpc
     */
    public function getFilterAverageCpc(): ?int
    {
        return $this->FilterAverageCpc ?? null;
    }

    /**
     * Set FilterAverageCpc
     *
     * @return $this
     */
    public function setFilterAverageCpc(?int $value)
    {
        $this->FilterAverageCpc = $value;

        return $this;
    }

    /**
     * Get WeeklySpendLimit
     */
    public function getWeeklySpendLimit(): ?int
    {
        return $this->WeeklySpendLimit ?? null;
    }

    /**
     * Set WeeklySpendLimit
     *
     * @return $this
     */
    public function setWeeklySpendLimit(?int $value)
    {
        $this->WeeklySpendLimit = $value;

        return $this;
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
     * Get BidCeiling
     */
    public function getBidCeiling(): ?int
    {
        return $this->BidCeiling ?? null;
    }

    /**
     * Set BidCeiling
     *
     * @return $this
     */
    public function setBidCeiling(?int $value)
    {
        $this->BidCeiling = $value;

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
