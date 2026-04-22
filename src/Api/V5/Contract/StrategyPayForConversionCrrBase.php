<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class StrategyPayForConversionCrrBase
{
//    Can be omitted.
//    protected $Crr;

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
     * Get Crr
     */
    public function getCrr(): ?int
    {
        return $this->Crr ?? null;
    }

    /**
     * Set Crr
     *
     * @return $this
     */
    public function setCrr(?int $value)
    {
        $this->Crr = $value;

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
