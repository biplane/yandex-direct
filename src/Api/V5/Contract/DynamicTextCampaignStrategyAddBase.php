<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class DynamicTextCampaignStrategyAddBase
{
//    Can be omit.
//    protected $WbMaximumClicks = null;

//    Can be omit.
//    protected $WbMaximumConversionRate = null;

//    Can be omit.
//    protected $AverageCpc = null;

//    Can be omit.
//    protected $AverageCpa = null;

//    Can be omit.
//    protected $PayForConversion = null;

//    Can be omit.
//    protected $WeeklyClickPackage = null;

//    Can be omit.
//    protected $AverageRoi = null;

//    Can be omit.
//    protected $AverageCrr = null;

//    Can be omit.
//    protected $PayForConversionCrr = null;

    /**
     * Creates a new instance of DynamicTextCampaignStrategyAddBase.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets WbMaximumClicks.
     */
    public function getWbMaximumClicks(): ?StrategyMaximumClicksAdd
    {
        return $this->WbMaximumClicks ?? null;
    }

    /**
     * Sets WbMaximumClicks.
     *
     * @return $this
     */
    public function setWbMaximumClicks(?StrategyMaximumClicksAdd $value = null)
    {
        $this->WbMaximumClicks = $value;

        return $this;
    }

    /**
     * Gets WbMaximumConversionRate.
     */
    public function getWbMaximumConversionRate(): ?StrategyMaximumConversionRateAdd
    {
        return $this->WbMaximumConversionRate ?? null;
    }

    /**
     * Sets WbMaximumConversionRate.
     *
     * @return $this
     */
    public function setWbMaximumConversionRate(?StrategyMaximumConversionRateAdd $value = null)
    {
        $this->WbMaximumConversionRate = $value;

        return $this;
    }

    /**
     * Gets AverageCpc.
     */
    public function getAverageCpc(): ?StrategyAverageCpcAdd
    {
        return $this->AverageCpc ?? null;
    }

    /**
     * Sets AverageCpc.
     *
     * @return $this
     */
    public function setAverageCpc(?StrategyAverageCpcAdd $value = null)
    {
        $this->AverageCpc = $value;

        return $this;
    }

    /**
     * Gets AverageCpa.
     */
    public function getAverageCpa(): ?StrategyAverageCpaAdd
    {
        return $this->AverageCpa ?? null;
    }

    /**
     * Sets AverageCpa.
     *
     * @return $this
     */
    public function setAverageCpa(?StrategyAverageCpaAdd $value = null)
    {
        $this->AverageCpa = $value;

        return $this;
    }

    /**
     * Gets PayForConversion.
     */
    public function getPayForConversion(): ?StrategyPayForConversionAdd
    {
        return $this->PayForConversion ?? null;
    }

    /**
     * Sets PayForConversion.
     *
     * @return $this
     */
    public function setPayForConversion(?StrategyPayForConversionAdd $value = null)
    {
        $this->PayForConversion = $value;

        return $this;
    }

    /**
     * Gets WeeklyClickPackage.
     */
    public function getWeeklyClickPackage(): ?StrategyWeeklyClickPackageAdd
    {
        return $this->WeeklyClickPackage ?? null;
    }

    /**
     * Sets WeeklyClickPackage.
     *
     * @return $this
     */
    public function setWeeklyClickPackage(?StrategyWeeklyClickPackageAdd $value = null)
    {
        $this->WeeklyClickPackage = $value;

        return $this;
    }

    /**
     * Gets AverageRoi.
     */
    public function getAverageRoi(): ?StrategyAverageRoiAdd
    {
        return $this->AverageRoi ?? null;
    }

    /**
     * Sets AverageRoi.
     *
     * @return $this
     */
    public function setAverageRoi(?StrategyAverageRoiAdd $value = null)
    {
        $this->AverageRoi = $value;

        return $this;
    }

    /**
     * Gets AverageCrr.
     */
    public function getAverageCrr(): ?StrategyAverageCrrAdd
    {
        return $this->AverageCrr ?? null;
    }

    /**
     * Sets AverageCrr.
     *
     * @return $this
     */
    public function setAverageCrr(?StrategyAverageCrrAdd $value = null)
    {
        $this->AverageCrr = $value;

        return $this;
    }

    /**
     * Gets PayForConversionCrr.
     */
    public function getPayForConversionCrr(): ?StrategyPayForConversionCrrAdd
    {
        return $this->PayForConversionCrr ?? null;
    }

    /**
     * Sets PayForConversionCrr.
     *
     * @return $this
     */
    public function setPayForConversionCrr(?StrategyPayForConversionCrrAdd $value = null)
    {
        $this->PayForConversionCrr = $value;

        return $this;
    }
}
