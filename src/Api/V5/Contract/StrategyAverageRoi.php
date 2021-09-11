<?php

declare(strict_types=1);

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
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets ReserveReturn.
     */
    public function getReserveReturn(): ?int
    {
        return $this->ReserveReturn ?? null;
    }

    /**
     * Sets ReserveReturn.
     *
     * @return $this
     */
    public function setReserveReturn(?int $value = null)
    {
        $this->ReserveReturn = $value;

        return $this;
    }

    /**
     * Gets RoiCoef.
     */
    public function getRoiCoef(): ?int
    {
        return $this->RoiCoef ?? null;
    }

    /**
     * Sets RoiCoef.
     *
     * @return $this
     */
    public function setRoiCoef(?int $value = null)
    {
        $this->RoiCoef = $value;

        return $this;
    }

    /**
     * Gets GoalId.
     */
    public function getGoalId(): ?int
    {
        return $this->GoalId ?? null;
    }

    /**
     * Sets GoalId.
     *
     * @return $this
     */
    public function setGoalId(?int $value = null)
    {
        $this->GoalId = $value;

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

    /**
     * Gets Profitability.
     */
    public function getProfitability(): ?int
    {
        return $this->Profitability ?? null;
    }

    /**
     * Sets Profitability.
     *
     * @return $this
     */
    public function setProfitability(?int $value = null)
    {
        $this->Profitability = $value;

        return $this;
    }
}
