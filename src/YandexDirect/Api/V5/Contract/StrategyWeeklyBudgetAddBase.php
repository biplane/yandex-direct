<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class StrategyWeeklyBudgetAddBase
{

    protected $WeeklySpendLimit = null;

    protected $BidCeiling = null;

    /**
     * Creates a new instance of StrategyWeeklyBudgetAddBase.
     *
     * @return StrategyWeeklyBudgetAddBase
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets WeeklySpendLimit.
     *
     * @return int
     */
    public function getWeeklySpendLimit()
    {
        return $this->WeeklySpendLimit;
    }

    /**
     * Sets WeeklySpendLimit.
     *
     * @param int $value
     * @return $this
     */
    public function setWeeklySpendLimit($value)
    {
        $this->WeeklySpendLimit = $value;

        return $this;
    }

    /**
     * Gets BidCeiling.
     *
     * @return int|null
     */
    public function getBidCeiling()
    {
        return $this->BidCeiling;
    }

    /**
     * Sets BidCeiling.
     *
     * @param int|null $value
     * @return $this
     */
    public function setBidCeiling($value = null)
    {
        $this->BidCeiling = $value;

        return $this;
    }


}

