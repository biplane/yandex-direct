<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class StrategyAverageCpcPerFilter
{

//    Can be omit.
//    protected $FilterAverageCpc = null;

//    Can be omit.
//    protected $WeeklySpendLimit = null;

//    Can be omit.
//    protected $BidCeiling = null;

    /**
     * Creates a new instance of StrategyAverageCpcPerFilter.
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets FilterAverageCpc.
     *
     * @return int|null
     */
    public function getFilterAverageCpc()
    {
        return isset($this->FilterAverageCpc) ? $this->FilterAverageCpc : null;
    }

    /**
     * Sets FilterAverageCpc.
     *
     * @param int|null $value
     * @return $this
     */
    public function setFilterAverageCpc($value = null)
    {
        $this->FilterAverageCpc = $value;

        return $this;
    }

    /**
     * Gets WeeklySpendLimit.
     *
     * @return int|null
     */
    public function getWeeklySpendLimit()
    {
        return isset($this->WeeklySpendLimit) ? $this->WeeklySpendLimit : null;
    }

    /**
     * Sets WeeklySpendLimit.
     *
     * @param int|null $value
     * @return $this
     */
    public function setWeeklySpendLimit($value = null)
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
        return isset($this->BidCeiling) ? $this->BidCeiling : null;
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

