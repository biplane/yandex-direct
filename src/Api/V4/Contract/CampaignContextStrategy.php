<?php

namespace Biplane\YandexDirect\Api\V4\Contract;

/**
 * Auto-generated code.
 */
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
     * Creates a new instance of CampaignContextStrategy.
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets StrategyName.
     *
     * @return string
     */
    public function getStrategyName()
    {
        return $this->StrategyName;
    }

    /**
     * Sets StrategyName.
     *
     * @param string $value
     * @return self
     */
    public function setStrategyName($value)
    {
        $this->StrategyName = $value;

        return $this;
    }

    /**
     * Gets ContextLimit.
     *
     * @return string|null
     */
    public function getContextLimit()
    {
        return $this->ContextLimit;
    }

    /**
     * Sets ContextLimit.
     *
     * @param string|null $value
     * @return self
     */
    public function setContextLimit($value = null)
    {
        $this->ContextLimit = $value;

        return $this;
    }

    /**
     * Gets ContextLimitSum.
     *
     * @return int|null
     */
    public function getContextLimitSum()
    {
        return $this->ContextLimitSum;
    }

    /**
     * Sets ContextLimitSum.
     *
     * @param int|null $value
     * @return self
     */
    public function setContextLimitSum($value = null)
    {
        $this->ContextLimitSum = $value;

        return $this;
    }

    /**
     * Gets ContextPricePercent.
     *
     * @return int|null
     */
    public function getContextPricePercent()
    {
        return $this->ContextPricePercent;
    }

    /**
     * Sets ContextPricePercent.
     *
     * @param int|null $value
     * @return self
     */
    public function setContextPricePercent($value = null)
    {
        $this->ContextPricePercent = $value;

        return $this;
    }

    /**
     * Gets MaxPrice.
     *
     * @return float|null
     */
    public function getMaxPrice()
    {
        return $this->MaxPrice;
    }

    /**
     * Sets MaxPrice.
     *
     * @param float|null $value
     * @return self
     */
    public function setMaxPrice($value = null)
    {
        $this->MaxPrice = $value;

        return $this;
    }

    /**
     * Gets AveragePrice.
     *
     * @return float|null
     */
    public function getAveragePrice()
    {
        return $this->AveragePrice;
    }

    /**
     * Sets AveragePrice.
     *
     * @param float|null $value
     * @return self
     */
    public function setAveragePrice($value = null)
    {
        $this->AveragePrice = $value;

        return $this;
    }

    /**
     * Gets WeeklySumLimit.
     *
     * @return float|null
     */
    public function getWeeklySumLimit()
    {
        return $this->WeeklySumLimit;
    }

    /**
     * Sets WeeklySumLimit.
     *
     * @param float|null $value
     * @return self
     */
    public function setWeeklySumLimit($value = null)
    {
        $this->WeeklySumLimit = $value;

        return $this;
    }

    /**
     * Gets ClicksPerWeek.
     *
     * @return int|null
     */
    public function getClicksPerWeek()
    {
        return $this->ClicksPerWeek;
    }

    /**
     * Sets ClicksPerWeek.
     *
     * @param int|null $value
     * @return self
     */
    public function setClicksPerWeek($value = null)
    {
        $this->ClicksPerWeek = $value;

        return $this;
    }

    /**
     * Gets AverageCPA.
     *
     * @return float|null
     */
    public function getAverageCPA()
    {
        return $this->AverageCPA;
    }

    /**
     * Sets AverageCPA.
     *
     * @param float|null $value
     * @return self
     */
    public function setAverageCPA($value = null)
    {
        $this->AverageCPA = $value;

        return $this;
    }

    /**
     * Gets GoalID.
     *
     * @return int|null
     */
    public function getGoalID()
    {
        return $this->GoalID;
    }

    /**
     * Sets GoalID.
     *
     * @param int|null $value
     * @return self
     */
    public function setGoalID($value = null)
    {
        $this->GoalID = $value;

        return $this;
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
     * Gets ROICoef.
     *
     * @return float|null
     */
    public function getROICoef()
    {
        return $this->ROICoef;
    }

    /**
     * Sets ROICoef.
     *
     * @param float|null $value
     * @return self
     */
    public function setROICoef($value = null)
    {
        $this->ROICoef = $value;

        return $this;
    }

    /**
     * Gets Profitability.
     *
     * @return float|null
     */
    public function getProfitability()
    {
        return $this->Profitability;
    }

    /**
     * Sets Profitability.
     *
     * @param float|null $value
     * @return self
     */
    public function setProfitability($value = null)
    {
        $this->Profitability = $value;

        return $this;
    }


}

