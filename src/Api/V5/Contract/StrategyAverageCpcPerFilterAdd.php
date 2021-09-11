<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class StrategyAverageCpcPerFilterAdd
{
//    Can be omit.
//    protected $FilterAverageCpc = null;

//    Can be omit.
//    protected $WeeklySpendLimit = null;

//    Can be omit.
//    protected $BidCeiling = null;

    /**
     * Creates a new instance of StrategyAverageCpcPerFilterAdd.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets FilterAverageCpc.
     */
    public function getFilterAverageCpc(): ?int
    {
        return $this->FilterAverageCpc ?? null;
    }

    /**
     * Sets FilterAverageCpc.
     *
     * @return $this
     */
    public function setFilterAverageCpc(?int $value = null)
    {
        $this->FilterAverageCpc = $value;

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

    /**
     * Gets BidCeiling.
     */
    public function getBidCeiling(): ?int
    {
        return $this->BidCeiling ?? null;
    }

    /**
     * Sets BidCeiling.
     *
     * @return $this
     */
    public function setBidCeiling(?int $value = null)
    {
        $this->BidCeiling = $value;

        return $this;
    }
}
