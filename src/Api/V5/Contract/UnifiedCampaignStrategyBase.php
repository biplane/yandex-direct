<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class UnifiedCampaignStrategyBase
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

    public function getWbMaximumClicks(): ?StrategyMaximumClicks
    {
        return $this->WbMaximumClicks ?? null;
    }

    /**
     * @return $this
     */
    public function setWbMaximumClicks(?StrategyMaximumClicks $value = null)
    {
        $this->WbMaximumClicks = $value;

        return $this;
    }

    public function getWbMaximumConversionRate(): ?StrategyMaximumConversionRate
    {
        return $this->WbMaximumConversionRate ?? null;
    }

    /**
     * @return $this
     */
    public function setWbMaximumConversionRate(?StrategyMaximumConversionRate $value = null)
    {
        $this->WbMaximumConversionRate = $value;

        return $this;
    }

    public function getAverageCpc(): ?StrategyAverageCpc
    {
        return $this->AverageCpc ?? null;
    }

    /**
     * @return $this
     */
    public function setAverageCpc(?StrategyAverageCpc $value = null)
    {
        $this->AverageCpc = $value;

        return $this;
    }

    public function getAverageCpa(): ?StrategyAverageCpa
    {
        return $this->AverageCpa ?? null;
    }

    /**
     * @return $this
     */
    public function setAverageCpa(?StrategyAverageCpa $value = null)
    {
        $this->AverageCpa = $value;

        return $this;
    }

    public function getPayForConversion(): ?StrategyPayForConversion
    {
        return $this->PayForConversion ?? null;
    }

    /**
     * @return $this
     */
    public function setPayForConversion(?StrategyPayForConversion $value = null)
    {
        $this->PayForConversion = $value;

        return $this;
    }

    public function getAverageCrr(): ?StrategyAverageCrr
    {
        return $this->AverageCrr ?? null;
    }

    /**
     * @return $this
     */
    public function setAverageCrr(?StrategyAverageCrr $value = null)
    {
        $this->AverageCrr = $value;

        return $this;
    }

    public function getPayForConversionCrr(): ?StrategyPayForConversionCrr
    {
        return $this->PayForConversionCrr ?? null;
    }

    /**
     * @return $this
     */
    public function setPayForConversionCrr(?StrategyPayForConversionCrr $value = null)
    {
        $this->PayForConversionCrr = $value;

        return $this;
    }

    public function getAverageCpaMultipleGoals(): ?StrategyAverageCpaMultipleGoals
    {
        return $this->AverageCpaMultipleGoals ?? null;
    }

    /**
     * @return $this
     */
    public function setAverageCpaMultipleGoals(?StrategyAverageCpaMultipleGoals $value = null)
    {
        $this->AverageCpaMultipleGoals = $value;

        return $this;
    }

    public function getPayForConversionMultipleGoals(): ?StrategyPayForConversionMultipleGoals
    {
        return $this->PayForConversionMultipleGoals ?? null;
    }

    /**
     * @return $this
     */
    public function setPayForConversionMultipleGoals(?StrategyPayForConversionMultipleGoals $value = null)
    {
        $this->PayForConversionMultipleGoals = $value;

        return $this;
    }

    public function getMaxProfit(): ?StrategyMaxProfit
    {
        return $this->MaxProfit ?? null;
    }

    /**
     * @return $this
     */
    public function setMaxProfit(?StrategyMaxProfit $value = null)
    {
        $this->MaxProfit = $value;

        return $this;
    }
}
