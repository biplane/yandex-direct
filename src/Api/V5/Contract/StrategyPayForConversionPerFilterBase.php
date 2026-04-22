<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class StrategyPayForConversionPerFilterBase
{
//    Can be omitted.
//    protected $Cpa;

//    Can be omitted.
//    protected $GoalId;

//    Can be omitted.
//    protected $WeeklySpendLimit;

//    Can be omitted.
//    protected $CustomPeriodBudget;

    /**
     * Create a new instance.
     *
     * @return static
     */
    public static function create(): static
    {
        return new static();
    }

    /**
     * Get Cpa
     */
    public function getCpa(): ?int
    {
        return $this->Cpa ?? null;
    }

    /**
     * Set Cpa
     *
     * @return $this
     */
    public function setCpa(?int $value)
    {
        $this->Cpa = $value;

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
}
