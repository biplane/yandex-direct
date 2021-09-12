<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class StrategyPayForInstall
{
//    Can be omitted.
//    protected $AverageCpi = null;

//    Can be omitted.
//    protected $WeeklySpendLimit = null;

    /**
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    public function getAverageCpi(): ?int
    {
        return $this->AverageCpi ?? null;
    }

    /**
     * @return $this
     */
    public function setAverageCpi(?int $value = null)
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
