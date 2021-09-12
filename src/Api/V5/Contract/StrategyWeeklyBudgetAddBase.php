<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class StrategyWeeklyBudgetAddBase
{
    protected $WeeklySpendLimit = null;

//    Can be omitted.
//    protected $BidCeiling = null;

    /**
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    public function getWeeklySpendLimit(): int
    {
        return $this->WeeklySpendLimit;
    }

    /**
     * @return $this
     */
    public function setWeeklySpendLimit(int $value)
    {
        $this->WeeklySpendLimit = $value;

        return $this;
    }

    public function getBidCeiling(): ?int
    {
        return $this->BidCeiling ?? null;
    }

    /**
     * @return $this
     */
    public function setBidCeiling(?int $value = null)
    {
        $this->BidCeiling = $value;

        return $this;
    }
}
