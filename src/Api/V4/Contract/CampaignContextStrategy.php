<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V4\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class CampaignContextStrategy
{
    protected $StrategyName = null;

    protected $ContextLimit = null;

    protected $ContextLimitSum = null;

    protected $ContextPricePercent = null;

    protected $MaxPrice = null;

    protected $AveragePrice = null;

    protected $WeeklySumLimit = null;

    protected $ClicksPerWeek = null;

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

    public function getContextLimit(): ?string
    {
        return $this->ContextLimit;
    }

    /**
     * @return $this
     */
    public function setContextLimit(?string $value = null)
    {
        $this->ContextLimit = $value;

        return $this;
    }

    public function getContextLimitSum(): ?int
    {
        return $this->ContextLimitSum;
    }

    /**
     * @return $this
     */
    public function setContextLimitSum(?int $value = null)
    {
        $this->ContextLimitSum = $value;

        return $this;
    }

    public function getContextPricePercent(): ?int
    {
        return $this->ContextPricePercent;
    }

    /**
     * @return $this
     */
    public function setContextPricePercent(?int $value = null)
    {
        $this->ContextPricePercent = $value;

        return $this;
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
