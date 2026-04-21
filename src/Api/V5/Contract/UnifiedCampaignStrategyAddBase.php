<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class UnifiedCampaignStrategyAddBase
{
//    Can be omitted.
//    protected $WbMaximumClicks;

//    Can be omitted.
//    protected $WbMaximumConversionRate;

//    Can be omitted.
//    protected $AverageCpc;

//    Can be omitted.
//    protected $AverageCpa;

//    Can be omitted.
//    protected $PayForConversion;

//    Can be omitted.
//    protected $AverageCrr;

//    Can be omitted.
//    protected $PayForConversionCrr;

//    Can be omitted.
//    protected $AverageCpaMultipleGoals;

//    Can be omitted.
//    protected $PayForConversionMultipleGoals;

//    Can be omitted.
//    protected $MaxProfit;

    /**
     * Create a new instance.
     *
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    /**
     * Get WbMaximumClicks
     */
    public function getWbMaximumClicks(): ?StrategyMaximumClicksAdd
    {
        return $this->WbMaximumClicks ?? null;
    }

    /**
     * Set WbMaximumClicks
     *
     * @return $this
     */
    public function setWbMaximumClicks(?StrategyMaximumClicksAdd $value)
    {
        $this->WbMaximumClicks = $value;

        return $this;
    }

    /**
     * Get WbMaximumConversionRate
     */
    public function getWbMaximumConversionRate(): ?StrategyMaximumConversionRateAdd
    {
        return $this->WbMaximumConversionRate ?? null;
    }

    /**
     * Set WbMaximumConversionRate
     *
     * @return $this
     */
    public function setWbMaximumConversionRate(?StrategyMaximumConversionRateAdd $value)
    {
        $this->WbMaximumConversionRate = $value;

        return $this;
    }

    /**
     * Get AverageCpc
     */
    public function getAverageCpc(): ?StrategyAverageCpcAdd
    {
        return $this->AverageCpc ?? null;
    }

    /**
     * Set AverageCpc
     *
     * @return $this
     */
    public function setAverageCpc(?StrategyAverageCpcAdd $value)
    {
        $this->AverageCpc = $value;

        return $this;
    }

    /**
     * Get AverageCpa
     */
    public function getAverageCpa(): ?StrategyAverageCpaAdd
    {
        return $this->AverageCpa ?? null;
    }

    /**
     * Set AverageCpa
     *
     * @return $this
     */
    public function setAverageCpa(?StrategyAverageCpaAdd $value)
    {
        $this->AverageCpa = $value;

        return $this;
    }

    /**
     * Get PayForConversion
     */
    public function getPayForConversion(): ?StrategyPayForConversionAdd
    {
        return $this->PayForConversion ?? null;
    }

    /**
     * Set PayForConversion
     *
     * @return $this
     */
    public function setPayForConversion(?StrategyPayForConversionAdd $value)
    {
        $this->PayForConversion = $value;

        return $this;
    }

    /**
     * Get AverageCrr
     */
    public function getAverageCrr(): ?StrategyAverageCrrAdd
    {
        return $this->AverageCrr ?? null;
    }

    /**
     * Set AverageCrr
     *
     * @return $this
     */
    public function setAverageCrr(?StrategyAverageCrrAdd $value)
    {
        $this->AverageCrr = $value;

        return $this;
    }

    /**
     * Get PayForConversionCrr
     */
    public function getPayForConversionCrr(): ?StrategyPayForConversionCrrAdd
    {
        return $this->PayForConversionCrr ?? null;
    }

    /**
     * Set PayForConversionCrr
     *
     * @return $this
     */
    public function setPayForConversionCrr(?StrategyPayForConversionCrrAdd $value)
    {
        $this->PayForConversionCrr = $value;

        return $this;
    }

    /**
     * Get AverageCpaMultipleGoals
     */
    public function getAverageCpaMultipleGoals(): ?StrategyAverageCpaMultipleGoalsAdd
    {
        return $this->AverageCpaMultipleGoals ?? null;
    }

    /**
     * Set AverageCpaMultipleGoals
     *
     * @return $this
     */
    public function setAverageCpaMultipleGoals(?StrategyAverageCpaMultipleGoalsAdd $value)
    {
        $this->AverageCpaMultipleGoals = $value;

        return $this;
    }

    /**
     * Get PayForConversionMultipleGoals
     */
    public function getPayForConversionMultipleGoals(): ?StrategyPayForConversionMultipleGoalsAdd
    {
        return $this->PayForConversionMultipleGoals ?? null;
    }

    /**
     * Set PayForConversionMultipleGoals
     *
     * @return $this
     */
    public function setPayForConversionMultipleGoals(?StrategyPayForConversionMultipleGoalsAdd $value)
    {
        $this->PayForConversionMultipleGoals = $value;

        return $this;
    }

    /**
     * Get MaxProfit
     */
    public function getMaxProfit(): ?StrategyMaxProfitAdd
    {
        return $this->MaxProfit ?? null;
    }

    /**
     * Set MaxProfit
     *
     * @return $this
     */
    public function setMaxProfit(?StrategyMaxProfitAdd $value)
    {
        $this->MaxProfit = $value;

        return $this;
    }
}
