<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class StrategyPayForConversionPerFilter
{
//    Can be omit.
//    protected $Cpa = null;

//    Can be omit.
//    protected $GoalId = null;

//    Can be omit.
//    protected $WeeklySpendLimit = null;

    /**
     * Creates a new instance of StrategyPayForConversionPerFilter.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets Cpa.
     */
    public function getCpa(): ?int
    {
        return $this->Cpa ?? null;
    }

    /**
     * Sets Cpa.
     *
     * @return $this
     */
    public function setCpa(?int $value = null)
    {
        $this->Cpa = $value;

        return $this;
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

    /**
     * Gets WeeklySpendLimit.
     */
    public function getWeeklySpendLimit(): ?int
    {
        return $this->WeeklySpendLimit ?? null;
    }

    /**
     * Sets WeeklySpendLimit.
     *
     * @return $this
     */
    public function setWeeklySpendLimit(?int $value = null)
    {
        $this->WeeklySpendLimit = $value;

        return $this;
    }
}
