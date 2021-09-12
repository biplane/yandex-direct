<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V4\Contract;

/**
 * Auto-generated code.
 */
class CampaignStrategy
{
    protected $MaxPrice = null;

    protected $AveragePrice = null;

    protected $WeeklySumLimit = null;

    protected $ClicksPerWeek = null;

    protected $StrategyName = null;

    protected $AverageCPA = null;

    protected $GoalID = null;

    protected $ReserveReturn = null;

    protected $ROICoef = null;

    protected $Profitability = null;

    /**
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    public function getMaxPrice(): ?float
    {
        return $this->MaxPrice;
    }

    /**
     * @return $this
     */
    public function setMaxPrice(?float $value = null)
    {
        $this->MaxPrice = $value;

        return $this;
    }

    public function getAveragePrice(): ?float
    {
        return $this->AveragePrice;
    }

    /**
     * @return $this
     */
    public function setAveragePrice(?float $value = null)
    {
        $this->AveragePrice = $value;

        return $this;
    }

    public function getWeeklySumLimit(): ?float
    {
        return $this->WeeklySumLimit;
    }

    /**
     * @return $this
     */
    public function setWeeklySumLimit(?float $value = null)
    {
        $this->WeeklySumLimit = $value;

        return $this;
    }

    public function getClicksPerWeek(): ?int
    {
        return $this->ClicksPerWeek;
    }

    /**
     * @return $this
     */
    public function setClicksPerWeek(?int $value = null)
    {
        $this->ClicksPerWeek = $value;

        return $this;
    }

    public function getStrategyName(): string
    {
        return $this->StrategyName;
    }

    /**
     * @return $this
     */
    public function setStrategyName(string $value)
    {
        $this->StrategyName = $value;

        return $this;
    }

    public function getAverageCPA(): ?float
    {
        return $this->AverageCPA;
    }

    /**
     * @return $this
     */
    public function setAverageCPA(?float $value = null)
    {
        $this->AverageCPA = $value;

        return $this;
    }

    public function getGoalID(): ?int
    {
        return $this->GoalID;
    }

    /**
     * @return $this
     */
    public function setGoalID(?int $value = null)
    {
        $this->GoalID = $value;

        return $this;
    }

    public function getReserveReturn(): ?int
    {
        return $this->ReserveReturn;
    }

    /**
     * @return $this
     */
    public function setReserveReturn(?int $value = null)
    {
        $this->ReserveReturn = $value;

        return $this;
    }

    public function getROICoef(): ?float
    {
        return $this->ROICoef;
    }

    /**
     * @return $this
     */
    public function setROICoef(?float $value = null)
    {
        $this->ROICoef = $value;

        return $this;
    }

    public function getProfitability(): ?float
    {
        return $this->Profitability;
    }

    /**
     * @return $this
     */
    public function setProfitability(?float $value = null)
    {
        $this->Profitability = $value;

        return $this;
    }
}
