<?php

namespace Biplane\YandexDirectBundle\Contract;

/**
 * @codeCoverageIgnore
 * @SuppressWarnings(PHPMD)
 */
class CampaignContextStrategy
{
    /**
     * @var string
     */
    protected $StrategyName;
    /**
     * @var string
     */
    protected $ContextLimit;
    /**
     * @var int
     */
    protected $ContextLimitSum;
    /**
     * @var int
     */
    protected $ContextPricePercent;
    /**
     * @var float
     */
    protected $MaxPrice;
    /**
     * @var float
     */
    protected $AveragePrice;
    /**
     * @var float
     */
    protected $WeeklySumLimit;
    /**
     * @var int
     */
    protected $ClicksPerWeek;
    /**
     * @var float
     */
    protected $AverageCPA;
    /**
     * @var int
     */
    protected $GoalID;
    /**
     * @var int
     */
    protected $ReserveReturn;
    /**
     * @var float
     */
    protected $ROICoef;
    /**
     * @var float
     */
    protected $Profitability;

    /**
     * Creates a new instance.
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets the StrategyName.
     *
     * @return string
     */
    public function getStrategyName()
    {
        return $this->StrategyName;
    }

    /**
     * Sets the StrategyName.
     *
     * @param string $StrategyName
     *
     * @return CampaignContextStrategy
     */
    public function setStrategyName($StrategyName)
    {
        $this->StrategyName = $StrategyName;

        return $this;
    }

    /**
     * Gets the ContextLimit.
     *
     * @return string
     */
    public function getContextLimit()
    {
        return $this->ContextLimit;
    }

    /**
     * Sets the ContextLimit.
     *
     * @param string $ContextLimit
     *
     * @return CampaignContextStrategy
     */
    public function setContextLimit($ContextLimit)
    {
        $this->ContextLimit = $ContextLimit;

        return $this;
    }

    /**
     * Gets the ContextLimitSum.
     *
     * @return int
     */
    public function getContextLimitSum()
    {
        return $this->ContextLimitSum;
    }

    /**
     * Sets the ContextLimitSum.
     *
     * @param int $ContextLimitSum
     *
     * @return CampaignContextStrategy
     */
    public function setContextLimitSum($ContextLimitSum)
    {
        $this->ContextLimitSum = $ContextLimitSum;

        return $this;
    }

    /**
     * Gets the ContextPricePercent.
     *
     * @return int
     */
    public function getContextPricePercent()
    {
        return $this->ContextPricePercent;
    }

    /**
     * Sets the ContextPricePercent.
     *
     * @param int $ContextPricePercent
     *
     * @return CampaignContextStrategy
     */
    public function setContextPricePercent($ContextPricePercent)
    {
        $this->ContextPricePercent = $ContextPricePercent;

        return $this;
    }

    /**
     * Gets the MaxPrice.
     *
     * @return float
     */
    public function getMaxPrice()
    {
        return $this->MaxPrice;
    }

    /**
     * Sets the MaxPrice.
     *
     * @param float $MaxPrice
     *
     * @return CampaignContextStrategy
     */
    public function setMaxPrice($MaxPrice)
    {
        $this->MaxPrice = $MaxPrice;

        return $this;
    }

    /**
     * Gets the AveragePrice.
     *
     * @return float
     */
    public function getAveragePrice()
    {
        return $this->AveragePrice;
    }

    /**
     * Sets the AveragePrice.
     *
     * @param float $AveragePrice
     *
     * @return CampaignContextStrategy
     */
    public function setAveragePrice($AveragePrice)
    {
        $this->AveragePrice = $AveragePrice;

        return $this;
    }

    /**
     * Gets the WeeklySumLimit.
     *
     * @return float
     */
    public function getWeeklySumLimit()
    {
        return $this->WeeklySumLimit;
    }

    /**
     * Sets the WeeklySumLimit.
     *
     * @param float $WeeklySumLimit
     *
     * @return CampaignContextStrategy
     */
    public function setWeeklySumLimit($WeeklySumLimit)
    {
        $this->WeeklySumLimit = $WeeklySumLimit;

        return $this;
    }

    /**
     * Gets the ClicksPerWeek.
     *
     * @return int
     */
    public function getClicksPerWeek()
    {
        return $this->ClicksPerWeek;
    }

    /**
     * Sets the ClicksPerWeek.
     *
     * @param int $ClicksPerWeek
     *
     * @return CampaignContextStrategy
     */
    public function setClicksPerWeek($ClicksPerWeek)
    {
        $this->ClicksPerWeek = $ClicksPerWeek;

        return $this;
    }

    /**
     * Gets the AverageCPA.
     *
     * @return float
     */
    public function getAverageCPA()
    {
        return $this->AverageCPA;
    }

    /**
     * Sets the AverageCPA.
     *
     * @param float $AverageCPA
     *
     * @return CampaignContextStrategy
     */
    public function setAverageCPA($AverageCPA)
    {
        $this->AverageCPA = $AverageCPA;

        return $this;
    }

    /**
     * Gets the GoalID.
     *
     * @return int
     */
    public function getGoalID()
    {
        return $this->GoalID;
    }

    /**
     * Sets the GoalID.
     *
     * @param int $GoalID
     *
     * @return CampaignContextStrategy
     */
    public function setGoalID($GoalID)
    {
        $this->GoalID = $GoalID;

        return $this;
    }

    /**
     * Gets the ReserveReturn.
     *
     * @return int
     */
    public function getReserveReturn()
    {
        return $this->ReserveReturn;
    }

    /**
     * Sets the ReserveReturn.
     *
     * @param int $ReserveReturn
     *
     * @return CampaignContextStrategy
     */
    public function setReserveReturn($ReserveReturn)
    {
        $this->ReserveReturn = $ReserveReturn;

        return $this;
    }

    /**
     * Gets the ROICoef.
     *
     * @return float
     */
    public function getROICoef()
    {
        return $this->ROICoef;
    }

    /**
     * Sets the ROICoef.
     *
     * @param float $ROICoef
     *
     * @return CampaignContextStrategy
     */
    public function setROICoef($ROICoef)
    {
        $this->ROICoef = $ROICoef;

        return $this;
    }

    /**
     * Gets the Profitability.
     *
     * @return float
     */
    public function getProfitability()
    {
        return $this->Profitability;
    }

    /**
     * Sets the Profitability.
     *
     * @param float $Profitability
     *
     * @return CampaignContextStrategy
     */
    public function setProfitability($Profitability)
    {
        $this->Profitability = $Profitability;

        return $this;
    }
}