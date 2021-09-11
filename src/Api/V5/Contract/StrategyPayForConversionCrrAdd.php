<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class StrategyPayForConversionCrrAdd
{
    protected $Crr = null;

    protected $GoalId = null;

//    Can be omit.
//    protected $WeeklySpendLimit = null;

    /**
     * Creates a new instance of StrategyPayForConversionCrrAdd.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets Crr.
     */
    public function getCrr(): int
    {
        return $this->Crr;
    }

    /**
     * Sets Crr.
     *
     * @return $this
     */
    public function setCrr(int $value)
    {
        $this->Crr = $value;

        return $this;
    }

    /**
     * Gets GoalId.
     */
    public function getGoalId(): int
    {
        return $this->GoalId;
    }

    /**
     * Sets GoalId.
     *
     * @return $this
     */
    public function setGoalId(int $value)
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
