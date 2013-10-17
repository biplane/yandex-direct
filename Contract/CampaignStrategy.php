<?php

namespace Biplane\YandexDirectBundle\Contract;

/**
 * @codeCoverageIgnore
 * @SuppressWarnings(PHPMD)
 */
class CampaignStrategy
{
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
     * @var string
     */
    protected $StrategyName;
    /**
     * @var float
     */
    protected $AverageCPA;
    /**
     * @var int
     */
    protected $GoalID;

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
     * @return CampaignStrategy
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
     * @return CampaignStrategy
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
     * @return CampaignStrategy
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
     * @return CampaignStrategy
     */
    public function setClicksPerWeek($ClicksPerWeek)
    {
        $this->ClicksPerWeek = $ClicksPerWeek;

        return $this;
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
     * @return CampaignStrategy
     */
    public function setStrategyName($StrategyName)
    {
        $this->StrategyName = $StrategyName;

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
     * @return CampaignStrategy
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
     * @return CampaignStrategy
     */
    public function setGoalID($GoalID)
    {
        $this->GoalID = $GoalID;

        return $this;
    }
}