<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class StrategyAverageRoi
{

    protected $ReserveReturn = null;

    protected $RoiCoef = null;

    protected $GoalId = null;

    protected $WeeklySpendLimit = null;

    protected $BidCeiling = null;

    protected $Profitability = null;

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
        return $this->ReserveReturn;
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
        return $this->RoiCoef;
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
        return $this->GoalId;
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
        return $this->WeeklySpendLimit;
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
        return $this->BidCeiling;
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
        return $this->Profitability;
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

