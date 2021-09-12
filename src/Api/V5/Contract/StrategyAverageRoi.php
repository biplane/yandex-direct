<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class StrategyAverageRoi
{
//    Can be omitted.
//    protected $ReserveReturn = null;

//    Can be omitted.
//    protected $RoiCoef = null;

//    Can be omitted.
//    protected $GoalId = null;

//    Can be omitted.
//    protected $WeeklySpendLimit = null;

//    Can be omitted.
//    protected $BidCeiling = null;

//    Can be omitted.
//    protected $Profitability = null;

    /**
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    public function getReserveReturn(): ?int
    {
        return $this->ReserveReturn ?? null;
    }

    /**
     * @return $this
     */
    public function setReserveReturn(?int $value = null)
    {
        $this->ReserveReturn = $value;

        return $this;
    }

    public function getRoiCoef(): ?int
    {
        return $this->RoiCoef ?? null;
    }

    /**
     * @return $this
     */
    public function setRoiCoef(?int $value = null)
    {
        $this->RoiCoef = $value;

        return $this;
    }

    public function getGoalId(): ?int
    {
        return $this->GoalId ?? null;
    }

    /**
     * @return $this
     */
    public function setGoalId(?int $value = null)
    {
        $this->GoalId = $value;

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

    public function getProfitability(): ?int
    {
        return $this->Profitability ?? null;
    }

    /**
     * @return $this
     */
    public function setProfitability(?int $value = null)
    {
        $this->Profitability = $value;

        return $this;
    }
}
