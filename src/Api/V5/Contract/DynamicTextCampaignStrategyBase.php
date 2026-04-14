<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class DynamicTextCampaignStrategyBase
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
//    protected $WeeklyClickPackage;

//    Can be omitted.
//    protected $AverageRoi;

//    Can be omitted.
//    protected $AverageCrr;

//    Can be omitted.
//    protected $PayForConversionCrr;

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
    public function getWbMaximumClicks(): ?StrategyMaximumClicks
    {
        return $this->WbMaximumClicks ?? null;
    }

    /**
     * Set WbMaximumClicks
     *
     * @return $this
     */
    public function setWbMaximumClicks(?StrategyMaximumClicks $value)
    {
        $this->WbMaximumClicks = $value;

        return $this;
    }

    /**
     * Get WbMaximumConversionRate
     */
    public function getWbMaximumConversionRate(): ?StrategyMaximumConversionRate
    {
        return $this->WbMaximumConversionRate ?? null;
    }

    /**
     * Set WbMaximumConversionRate
     *
     * @return $this
     */
    public function setWbMaximumConversionRate(?StrategyMaximumConversionRate $value)
    {
        $this->WbMaximumConversionRate = $value;

        return $this;
    }

    /**
     * Get AverageCpc
     */
    public function getAverageCpc(): ?StrategyAverageCpc
    {
        return $this->AverageCpc ?? null;
    }

    /**
     * Set AverageCpc
     *
     * @return $this
     */
    public function setAverageCpc(?StrategyAverageCpc $value)
    {
        $this->AverageCpc = $value;

        return $this;
    }

    /**
     * Get AverageCpa
     */
    public function getAverageCpa(): ?StrategyAverageCpa
    {
        return $this->AverageCpa ?? null;
    }

    /**
     * Set AverageCpa
     *
     * @return $this
     */
    public function setAverageCpa(?StrategyAverageCpa $value)
    {
        $this->AverageCpa = $value;

        return $this;
    }

    /**
     * Get PayForConversion
     */
    public function getPayForConversion(): ?StrategyPayForConversion
    {
        return $this->PayForConversion ?? null;
    }

    /**
     * Set PayForConversion
     *
     * @return $this
     */
    public function setPayForConversion(?StrategyPayForConversion $value)
    {
        $this->PayForConversion = $value;

        return $this;
    }

    /**
     * Get WeeklyClickPackage
     */
    public function getWeeklyClickPackage(): ?StrategyWeeklyClickPackage
    {
        return $this->WeeklyClickPackage ?? null;
    }

    /**
     * Set WeeklyClickPackage
     *
     * @return $this
     */
    public function setWeeklyClickPackage(?StrategyWeeklyClickPackage $value)
    {
        $this->WeeklyClickPackage = $value;

        return $this;
    }

    /**
     * Get AverageRoi
     */
    public function getAverageRoi(): ?StrategyAverageRoi
    {
        return $this->AverageRoi ?? null;
    }

    /**
     * Set AverageRoi
     *
     * @return $this
     */
    public function setAverageRoi(?StrategyAverageRoi $value)
    {
        $this->AverageRoi = $value;

        return $this;
    }

    /**
     * Get AverageCrr
     */
    public function getAverageCrr(): ?StrategyAverageCrr
    {
        return $this->AverageCrr ?? null;
    }

    /**
     * Set AverageCrr
     *
     * @return $this
     */
    public function setAverageCrr(?StrategyAverageCrr $value)
    {
        $this->AverageCrr = $value;

        return $this;
    }

    /**
     * Get PayForConversionCrr
     */
    public function getPayForConversionCrr(): ?StrategyPayForConversionCrr
    {
        return $this->PayForConversionCrr ?? null;
    }

    /**
     * Set PayForConversionCrr
     *
     * @return $this
     */
    public function setPayForConversionCrr(?StrategyPayForConversionCrr $value)
    {
        $this->PayForConversionCrr = $value;

        return $this;
    }
}
