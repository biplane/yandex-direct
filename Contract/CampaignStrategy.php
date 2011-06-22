<?php

namespace Biplane\YandexDirectBundle\Contract;

/**
 * @codeCoverageIgnore
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
     * @return float
     */
    public function getMaxPrice()
    {
        return $this->MaxPrice;
    }

    /**
     * @param float $MaxPrice
     * @return CampaignStrategy
     */
    public function setMaxPrice($MaxPrice)
    {
        $this->MaxPrice = $MaxPrice;

        return $this;
    }

    /**
     * @return float
     */
    public function getAveragePrice()
    {
        return $this->AveragePrice;
    }

    /**
     * @param float $AveragePrice
     * @return CampaignStrategy
     */
    public function setAveragePrice($AveragePrice)
    {
        $this->AveragePrice = $AveragePrice;

        return $this;
    }

    /**
     * @return float
     */
    public function getWeeklySumLimit()
    {
        return $this->WeeklySumLimit;
    }

    /**
     * @param float $WeeklySumLimit
     * @return CampaignStrategy
     */
    public function setWeeklySumLimit($WeeklySumLimit)
    {
        $this->WeeklySumLimit = $WeeklySumLimit;

        return $this;
    }

    /**
     * @return int
     */
    public function getClicksPerWeek()
    {
        return $this->ClicksPerWeek;
    }

    /**
     * @param int $ClicksPerWeek
     * @return CampaignStrategy
     */
    public function setClicksPerWeek($ClicksPerWeek)
    {
        $this->ClicksPerWeek = $ClicksPerWeek;

        return $this;
    }

    /**
     * @return string
     */
    public function getStrategyName()
    {
        return $this->StrategyName;
    }

    /**
     * @param string $StrategyName
     * @return CampaignStrategy
     */
    public function setStrategyName($StrategyName)
    {
        $this->StrategyName = $StrategyName;

        return $this;
    }
}