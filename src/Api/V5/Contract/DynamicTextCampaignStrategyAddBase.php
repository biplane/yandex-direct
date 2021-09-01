<?php

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
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets WbMaximumClicks.
     *
     * @return StrategyMaximumClicksAdd|null
     */
    public function getWbMaximumClicks()
    {
        return isset($this->WbMaximumClicks) ? $this->WbMaximumClicks : null;
    }

    /**
     * Sets WbMaximumClicks.
     *
     * @param StrategyMaximumClicksAdd|null $value
     * @return $this
     */
    public function setWbMaximumClicks(StrategyMaximumClicksAdd $value = null)
    {
        $this->WbMaximumClicks = $value;

        return $this;
    }

    /**
     * Gets WbMaximumConversionRate.
     *
     * @return StrategyMaximumConversionRateAdd|null
     */
    public function getWbMaximumConversionRate()
    {
        return isset($this->WbMaximumConversionRate) ? $this->WbMaximumConversionRate : null;
    }

    /**
     * Sets WbMaximumConversionRate.
     *
     * @param StrategyMaximumConversionRateAdd|null $value
     * @return $this
     */
    public function setWbMaximumConversionRate(StrategyMaximumConversionRateAdd $value = null)
    {
        $this->WbMaximumConversionRate = $value;

        return $this;
    }

    /**
     * Gets AverageCpc.
     *
     * @return StrategyAverageCpcAdd|null
     */
    public function getAverageCpc()
    {
        return isset($this->AverageCpc) ? $this->AverageCpc : null;
    }

    /**
     * Sets AverageCpc.
     *
     * @param StrategyAverageCpcAdd|null $value
     * @return $this
     */
    public function setAverageCpc(StrategyAverageCpcAdd $value = null)
    {
        $this->AverageCpc = $value;

        return $this;
    }

    /**
     * Gets AverageCpa.
     *
     * @return StrategyAverageCpaAdd|null
     */
    public function getAverageCpa()
    {
        return isset($this->AverageCpa) ? $this->AverageCpa : null;
    }

    /**
     * Sets AverageCpa.
     *
     * @param StrategyAverageCpaAdd|null $value
     * @return $this
     */
    public function setAverageCpa(StrategyAverageCpaAdd $value = null)
    {
        $this->AverageCpa = $value;

        return $this;
    }

    /**
     * Gets PayForConversion.
     *
     * @return StrategyPayForConversionAdd|null
     */
    public function getPayForConversion()
    {
        return isset($this->PayForConversion) ? $this->PayForConversion : null;
    }

    /**
     * Sets PayForConversion.
     *
     * @param StrategyPayForConversionAdd|null $value
     * @return $this
     */
    public function setPayForConversion(StrategyPayForConversionAdd $value = null)
    {
        $this->PayForConversion = $value;

        return $this;
    }

    /**
     * Gets WeeklyClickPackage.
     *
     * @return StrategyWeeklyClickPackageAdd|null
     */
    public function getWeeklyClickPackage()
    {
        return isset($this->WeeklyClickPackage) ? $this->WeeklyClickPackage : null;
    }

    /**
     * Sets WeeklyClickPackage.
     *
     * @param StrategyWeeklyClickPackageAdd|null $value
     * @return $this
     */
    public function setWeeklyClickPackage(StrategyWeeklyClickPackageAdd $value = null)
    {
        $this->WeeklyClickPackage = $value;

        return $this;
    }

    /**
     * Gets AverageRoi.
     *
     * @return StrategyAverageRoiAdd|null
     */
    public function getAverageRoi()
    {
        return isset($this->AverageRoi) ? $this->AverageRoi : null;
    }

    /**
     * Sets AverageRoi.
     *
     * @param StrategyAverageRoiAdd|null $value
     * @return $this
     */
    public function setAverageRoi(StrategyAverageRoiAdd $value = null)
    {
        $this->AverageRoi = $value;

        return $this;
    }

    /**
     * Gets AverageCrr.
     *
     * @return StrategyAverageCrrAdd|null
     */
    public function getAverageCrr()
    {
        return isset($this->AverageCrr) ? $this->AverageCrr : null;
    }

    /**
     * Sets AverageCrr.
     *
     * @param StrategyAverageCrrAdd|null $value
     * @return $this
     */
    public function setAverageCrr(StrategyAverageCrrAdd $value = null)
    {
        $this->AverageCrr = $value;

        return $this;
    }

    /**
     * Gets PayForConversionCrr.
     *
     * @return StrategyPayForConversionCrrAdd|null
     */
    public function getPayForConversionCrr()
    {
        return isset($this->PayForConversionCrr) ? $this->PayForConversionCrr : null;
    }

    /**
     * Sets PayForConversionCrr.
     *
     * @param StrategyPayForConversionCrrAdd|null $value
     * @return $this
     */
    public function setPayForConversionCrr(StrategyPayForConversionCrrAdd $value = null)
    {
        $this->PayForConversionCrr = $value;

        return $this;
    }


}

