<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class DynamicTextCampaignStrategyBase
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
//    protected $WeeklyClickPackage = null;

//    Can be omitted.
//    protected $AverageRoi = null;

//    Can be omitted.
//    protected $AverageCrr = null;

//    Can be omitted.
//    protected $PayForConversionCrr = null;

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

    public function getWeeklyClickPackage(): ?StrategyWeeklyClickPackage
    {
        return $this->WeeklyClickPackage ?? null;
    }

    /**
     * @return $this
     */
    public function setWeeklyClickPackage(?StrategyWeeklyClickPackage $value = null)
    {
        $this->WeeklyClickPackage = $value;

        return $this;
    }

    public function getAverageRoi(): ?StrategyAverageRoi
    {
        return $this->AverageRoi ?? null;
    }

    /**
     * @return $this
     */
    public function setAverageRoi(?StrategyAverageRoi $value = null)
    {
        $this->AverageRoi = $value;

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
}
