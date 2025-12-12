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
//    protected $WbMaximumClicks = null;

//    Can be omitted.
//    protected $WbMaximumConversionRate = null;

//    Can be omitted.
//    protected $AverageCpc = null;

//    Can be omitted.
//    protected $AverageCpa = null;

//    Can be omitted.
//    protected $PayForConversion = null;

//    Can be omitted.
//    protected $AverageCrr = null;

//    Can be omitted.
//    protected $PayForConversionCrr = null;

//    Can be omitted.
//    protected $AverageCpaMultipleGoals = null;

//    Can be omitted.
//    protected $PayForConversionMultipleGoals = null;

//    Can be omitted.
//    protected $MaxProfit = null;

    /**
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    public function getWbMaximumClicks(): ?StrategyMaximumClicksAdd
    {
        return $this->WbMaximumClicks ?? null;
    }

    /**
     * @return $this
     */
    public function setWbMaximumClicks(?StrategyMaximumClicksAdd $value = null)
    {
        $this->WbMaximumClicks = $value;

        return $this;
    }

    public function getWbMaximumConversionRate(): ?StrategyMaximumConversionRateAdd
    {
        return $this->WbMaximumConversionRate ?? null;
    }

    /**
     * @return $this
     */
    public function setWbMaximumConversionRate(?StrategyMaximumConversionRateAdd $value = null)
    {
        $this->WbMaximumConversionRate = $value;

        return $this;
    }

    public function getAverageCpc(): ?StrategyAverageCpcAdd
    {
        return $this->AverageCpc ?? null;
    }

    /**
     * @return $this
     */
    public function setAverageCpc(?StrategyAverageCpcAdd $value = null)
    {
        $this->AverageCpc = $value;

        return $this;
    }

    public function getAverageCpa(): ?StrategyAverageCpaAdd
    {
        return $this->AverageCpa ?? null;
    }

    /**
     * @return $this
     */
    public function setAverageCpa(?StrategyAverageCpaAdd $value = null)
    {
        $this->AverageCpa = $value;

        return $this;
    }

    public function getPayForConversion(): ?StrategyPayForConversionAdd
    {
        return $this->PayForConversion ?? null;
    }

    /**
     * @return $this
     */
    public function setPayForConversion(?StrategyPayForConversionAdd $value = null)
    {
        $this->PayForConversion = $value;

        return $this;
    }

    public function getAverageCrr(): ?StrategyAverageCrrAdd
    {
        return $this->AverageCrr ?? null;
    }

    /**
     * @return $this
     */
    public function setAverageCrr(?StrategyAverageCrrAdd $value = null)
    {
        $this->AverageCrr = $value;

        return $this;
    }

    public function getPayForConversionCrr(): ?StrategyPayForConversionCrrAdd
    {
        return $this->PayForConversionCrr ?? null;
    }

    /**
     * @return $this
     */
    public function setPayForConversionCrr(?StrategyPayForConversionCrrAdd $value = null)
    {
        $this->PayForConversionCrr = $value;

        return $this;
    }

    public function getAverageCpaMultipleGoals(): ?StrategyAverageCpaMultipleGoalsAdd
    {
        return $this->AverageCpaMultipleGoals ?? null;
    }

    /**
     * @return $this
     */
    public function setAverageCpaMultipleGoals(?StrategyAverageCpaMultipleGoalsAdd $value = null)
    {
        $this->AverageCpaMultipleGoals = $value;

        return $this;
    }

    public function getPayForConversionMultipleGoals(): ?StrategyPayForConversionMultipleGoalsAdd
    {
        return $this->PayForConversionMultipleGoals ?? null;
    }

    /**
     * @return $this
     */
    public function setPayForConversionMultipleGoals(?StrategyPayForConversionMultipleGoalsAdd $value = null)
    {
        $this->PayForConversionMultipleGoals = $value;

        return $this;
    }

    public function getMaxProfit(): ?StrategyMaxProfitAdd
    {
        return $this->MaxProfit ?? null;
    }

    /**
     * @return $this
     */
    public function setMaxProfit(?StrategyMaxProfitAdd $value = null)
    {
        $this->MaxProfit = $value;

        return $this;
    }
}
