<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class StrategyAverageRoi
{
//    Can be omitted.
//    protected $ReserveReturn;

//    Can be omitted.
//    protected $RoiCoef;

//    Can be omitted.
//    protected $GoalId;

//    Can be omitted.
//    protected $WeeklySpendLimit;

//    Can be omitted.
//    protected $CustomPeriodBudget;

//    Can be omitted.
//    protected $BidCeiling;

//    Can be omitted.
//    protected $Profitability;

//    Can be omitted.
//    protected $ExplorationBudget;

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
     * Get ReserveReturn
     */
    public function getReserveReturn(): ?int
    {
        return $this->ReserveReturn ?? null;
    }

    /**
     * Set ReserveReturn
     *
     * @return $this
     */
    public function setReserveReturn(?int $value)
    {
        $this->ReserveReturn = $value;

        return $this;
    }

    /**
     * Get RoiCoef
     */
    public function getRoiCoef(): ?int
    {
        return $this->RoiCoef ?? null;
    }

    /**
     * Set RoiCoef
     *
     * @return $this
     */
    public function setRoiCoef(?int $value)
    {
        $this->RoiCoef = $value;

        return $this;
    }

    /**
     * Get GoalId
     */
    public function getGoalId(): ?int
    {
        return $this->GoalId ?? null;
    }

    /**
     * Set GoalId
     *
     * @return $this
     */
    public function setGoalId(?int $value)
    {
        $this->GoalId = $value;

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
     * Get Profitability
     */
    public function getProfitability(): ?int
    {
        return $this->Profitability ?? null;
    }

    /**
     * Set Profitability
     *
     * @return $this
     */
    public function setProfitability(?int $value)
    {
        $this->Profitability = $value;

        return $this;
    }

    /**
     * Get ExplorationBudget
     */
    public function getExplorationBudget(): ?ExplorationBudget
    {
        return $this->ExplorationBudget ?? null;
    }

    /**
     * Set ExplorationBudget
     *
     * @return $this
     */
    public function setExplorationBudget(?ExplorationBudget $value)
    {
        $this->ExplorationBudget = $value;

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
