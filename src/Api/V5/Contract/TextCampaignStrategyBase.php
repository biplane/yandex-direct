<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class TextCampaignStrategyBase
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
//    protected $WeeklyClickPackage = null;

//    Can be omit.
//    protected $AverageRoi = null;

    /**
     * Creates a new instance of TextCampaignStrategyBase.
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
     * @return StrategyMaximumClicks|null
     */
    public function getWbMaximumClicks()
    {
        return isset($this->WbMaximumClicks) ? $this->WbMaximumClicks : null;
    }

    /**
     * Sets WbMaximumClicks.
     *
     * @param StrategyMaximumClicks|null $value
     * @return self
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
        return isset($this->WbMaximumConversionRate) ? $this->WbMaximumConversionRate : null;
    }

    /**
     * Sets WbMaximumConversionRate.
     *
     * @param StrategyMaximumConversionRate|null $value
     * @return self
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
        return isset($this->AverageCpc) ? $this->AverageCpc : null;
    }

    /**
     * Sets AverageCpc.
     *
     * @param StrategyAverageCpc|null $value
     * @return self
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
        return isset($this->AverageCpa) ? $this->AverageCpa : null;
    }

    /**
     * Sets AverageCpa.
     *
     * @param StrategyAverageCpa|null $value
     * @return self
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
        return isset($this->WeeklyClickPackage) ? $this->WeeklyClickPackage : null;
    }

    /**
     * Sets WeeklyClickPackage.
     *
     * @param StrategyWeeklyClickPackage|null $value
     * @return self
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
        return isset($this->AverageRoi) ? $this->AverageRoi : null;
    }

    /**
     * Sets AverageRoi.
     *
     * @param StrategyAverageRoi|null $value
     * @return self
     */
    public function setAverageRoi(StrategyAverageRoi $value = null)
    {
        $this->AverageRoi = $value;

        return $this;
    }


}

