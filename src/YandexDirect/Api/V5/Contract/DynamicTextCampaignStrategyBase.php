<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class DynamicTextCampaignStrategyBase
{

    protected $WbMaximumClicks = null;

    protected $WbMaximumConversionRate = null;

    protected $AverageCpc = null;

    protected $AverageCpa = null;

    protected $WeeklyClickPackage = null;

    protected $AverageRoi = null;

    /**
     * Creates a new instance of DynamicTextCampaignStrategyBase.
     *
     * @return DynamicTextCampaignStrategyBase
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets WbMaximumClicks.
     *
     * @return StrategyMaximumClicks|null
     */
    public function getWbMaximumClicks()
    {
        return $this->WbMaximumClicks;
    }

    /**
     * Sets WbMaximumClicks.
     *
     * @param StrategyMaximumClicks|null $value
     * @return $this
     */
    public function setWbMaximumClicks(StrategyMaximumClicks $value = null)
    {
        $this->WbMaximumClicks = $value;

        return $this;
    }

    /**
     * Gets WbMaximumConversionRate.
     *
     * @return StrategyMaximumConversionRate|null
     */
    public function getWbMaximumConversionRate()
    {
        return $this->WbMaximumConversionRate;
    }

    /**
     * Sets WbMaximumConversionRate.
     *
     * @param StrategyMaximumConversionRate|null $value
     * @return $this
     */
    public function setWbMaximumConversionRate(StrategyMaximumConversionRate $value = null)
    {
        $this->WbMaximumConversionRate = $value;

        return $this;
    }

    /**
     * Gets AverageCpc.
     *
     * @return StrategyAverageCpc|null
     */
    public function getAverageCpc()
    {
        return $this->AverageCpc;
    }

    /**
     * Sets AverageCpc.
     *
     * @param StrategyAverageCpc|null $value
     * @return $this
     */
    public function setAverageCpc(StrategyAverageCpc $value = null)
    {
        $this->AverageCpc = $value;

        return $this;
    }

    /**
     * Gets AverageCpa.
     *
     * @return StrategyAverageCpa|null
     */
    public function getAverageCpa()
    {
        return $this->AverageCpa;
    }

    /**
     * Sets AverageCpa.
     *
     * @param StrategyAverageCpa|null $value
     * @return $this
     */
    public function setAverageCpa(StrategyAverageCpa $value = null)
    {
        $this->AverageCpa = $value;

        return $this;
    }

    /**
     * Gets WeeklyClickPackage.
     *
     * @return StrategyWeeklyClickPackage|null
     */
    public function getWeeklyClickPackage()
    {
        return $this->WeeklyClickPackage;
    }

    /**
     * Sets WeeklyClickPackage.
     *
     * @param StrategyWeeklyClickPackage|null $value
     * @return $this
     */
    public function setWeeklyClickPackage(StrategyWeeklyClickPackage $value = null)
    {
        $this->WeeklyClickPackage = $value;

        return $this;
    }

    /**
     * Gets AverageRoi.
     *
     * @return StrategyAverageRoi|null
     */
    public function getAverageRoi()
    {
        return $this->AverageRoi;
    }

    /**
     * Sets AverageRoi.
     *
     * @param StrategyAverageRoi|null $value
     * @return $this
     */
    public function setAverageRoi(StrategyAverageRoi $value = null)
    {
        $this->AverageRoi = $value;

        return $this;
    }


}

