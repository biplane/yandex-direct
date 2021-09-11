<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class StrategyPayForInstallAdd
{
    protected $AverageCpi = null;

//    Can be omit.
//    protected $WeeklySpendLimit = null;

    /**
     * Creates a new instance of StrategyPayForInstallAdd.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets AverageCpi.
     */
    public function getAverageCpi(): int
    {
        return $this->AverageCpi;
    }

    /**
     * Sets AverageCpi.
     *
     * @return $this
     */
    public function setAverageCpi(int $value)
    {
        $this->AverageCpi = $value;

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
