<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class TextCampaignStrategyAddBase
{

    protected $WbMaximumClicks = null;

    protected $WbMaximumConversionRate = null;

    protected $AverageCpc = null;

    protected $AverageCpa = null;

    protected $WeeklyClickPackage = null;

    protected $AverageRoi = null;

    /**
     * Creates a new instance of TextCampaignStrategyAddBase.
     *
     * @return TextCampaignStrategyAddBase
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
        return $this->WbMaximumClicks;
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
        return $this->WbMaximumConversionRate;
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
        return $this->AverageCpc;
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
        return $this->AverageCpa;
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
     * Gets WeeklyClickPackage.
     *
     * @return StrategyWeeklyClickPackageAdd|null
     */
    public function getWeeklyClickPackage()
    {
        return $this->WeeklyClickPackage;
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
        return $this->AverageRoi;
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


}

