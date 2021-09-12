<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class StrategyPayForInstallAdd
{
    protected $AverageCpi = null;

//    Can be omitted.
//    protected $WeeklySpendLimit = null;

    /**
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    public function getAverageCpi(): int
    {
        return $this->AverageCpi;
    }

    /**
     * @return $this
     */
    public function setAverageCpi(int $value)
    {
        $this->AverageCpi = $value;

        return $this;
    }

    public function getWeeklySpendLimit(): ?int
    {
        return $this->WeeklySpendLimit ?? null;
    }

    /**
     * @return $this
     */
    public function setWeeklySpendLimit(?int $value = null)
    {
        $this->WeeklySpendLimit = $value;

        return $this;
    }
}
