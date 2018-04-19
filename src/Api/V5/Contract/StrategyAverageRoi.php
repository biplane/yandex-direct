<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class StrategyAverageRoi
{

//    Can be omit.
//    protected $ReserveReturn = null;

//    Can be omit.
//    protected $RoiCoef = null;

//    Can be omit.
//    protected $GoalId = null;

//    Can be omit.
//    protected $WeeklySpendLimit = null;

//    Can be omit.
//    protected $BidCeiling = null;

//    Can be omit.
//    protected $Profitability = null;

    /**
     * Creates a new instance of StrategyAverageRoi.
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
     * @return int|null
     */
    public function getReserveReturn()
    {
        return isset($this->ReserveReturn) ? $this->ReserveReturn : null;
    }

    /**
     * Sets ReserveReturn.
     *
     * @param int|null $value
     * @return self
     */
    public function setReserveReturn($value = null)
    {
        $this->ReserveReturn = $value;

        return $this;
    }

    /**
     * Gets RoiCoef.
     *
     * @return int|null
     */
    public function getRoiCoef()
    {
        return isset($this->RoiCoef) ? $this->RoiCoef : null;
    }

    /**
     * Sets RoiCoef.
     *
     * @param int|null $value
     * @return self
     */
    public function setRoiCoef($value = null)
    {
        $this->RoiCoef = $value;

        return $this;
    }

    /**
     * Gets GoalId.
     *
     * @return int|null
     */
    public function getGoalId()
    {
        return isset($this->GoalId) ? $this->GoalId : null;
    }

    /**
     * Sets GoalId.
     *
     * @param int|null $value
     * @return self
     */
    public function setGoalId($value = null)
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
     * @return self
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
     * @return self
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
     * @return self
     */
    public function setProfitability($value = null)
    {
        $this->Profitability = $value;

        return $this;
    }


}

