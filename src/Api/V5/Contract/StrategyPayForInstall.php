<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class StrategyPayForInstall
{
//    Can be omitted.
//    protected $AverageCpi;

//    Can be omitted.
//    protected $WeeklySpendLimit;

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
     * Get AverageCpi
     */
    public function getAverageCpi(): ?int
    {
        return $this->AverageCpi ?? null;
    }

    /**
     * Set AverageCpi
     *
     * @return $this
     */
    public function setAverageCpi(?int $value)
    {
        $this->AverageCpi = $value;

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
}
