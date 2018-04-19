<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class StrategyAverageRoiAdd
{

    protected $ReserveReturn = null;

    protected $RoiCoef = null;

    protected $GoalId = null;

//    Can be omit.
//    protected $WeeklySpendLimit = null;

//    Can be omit.
//    protected $BidCeiling = null;

//    Can be omit.
//    protected $Profitability = null;

    /**
     * Creates a new instance of StrategyAverageRoiAdd.
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets ReserveReturn.
     *
     * @return int
     */
    public function getReserveReturn()
    {
        return $this->ReserveReturn;
    }

    /**
     * Sets ReserveReturn.
     *
     * @param int $value
     * @return $this
     */
    public function setReserveReturn($value)
    {
        $this->ReserveReturn = $value;

        return $this;
    }

    /**
     * Gets RoiCoef.
     *
     * @return int
     */
    public function getRoiCoef()
    {
        return $this->RoiCoef;
    }

    /**
     * Sets RoiCoef.
     *
     * @param int $value
     * @return $this
     */
    public function setRoiCoef($value)
    {
        $this->RoiCoef = $value;

        return $this;
    }

    /**
     * Gets GoalId.
     *
     * @return int
     */
    public function getGoalId()
    {
        return $this->GoalId;
    }

    /**
     * Sets GoalId.
     *
     * @param int $value
     * @return $this
     */
    public function setGoalId($value)
    {
        $this->GoalId = $value;

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

    /**
     * Gets Profitability.
     *
     * @return int|null
     */
    public function getProfitability()
    {
        return isset($this->Profitability) ? $this->Profitability : null;
    }

    /**
     * Sets Profitability.
     *
     * @param int|null $value
     * @return $this
     */
    public function setProfitability($value = null)
    {
        $this->Profitability = $value;

        return $this;
    }


}

