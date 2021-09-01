<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class SmartCampaignStrategyAddBase
{

//    Can be omit.
//    protected $AverageCpcPerCampaign = null;

//    Can be omit.
//    protected $AverageCpcPerFilter = null;

//    Can be omit.
//    protected $AverageCpaPerCampaign = null;

//    Can be omit.
//    protected $PayForConversionPerCampaign = null;

//    Can be omit.
//    protected $PayForConversionPerFilter = null;

//    Can be omit.
//    protected $AverageCpaPerFilter = null;

//    Can be omit.
//    protected $AverageRoi = null;

//    Can be omit.
//    protected $AverageCrr = null;

//    Can be omit.
//    protected $PayForConversionCrr = null;

    /**
     * Creates a new instance of SmartCampaignStrategyAddBase.
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets AverageCpcPerCampaign.
     *
     * @return StrategyAverageCpcPerCampaignAdd|null
     */
    public function getAverageCpcPerCampaign()
    {
        return isset($this->AverageCpcPerCampaign) ? $this->AverageCpcPerCampaign : null;
    }

    /**
     * Sets AverageCpcPerCampaign.
     *
     * @param StrategyAverageCpcPerCampaignAdd|null $value
     * @return $this
     */
    public function setAverageCpcPerCampaign(StrategyAverageCpcPerCampaignAdd $value = null)
    {
        $this->AverageCpcPerCampaign = $value;

        return $this;
    }

    /**
     * Gets AverageCpcPerFilter.
     *
     * @return StrategyAverageCpcPerFilterAdd|null
     */
    public function getAverageCpcPerFilter()
    {
        return isset($this->AverageCpcPerFilter) ? $this->AverageCpcPerFilter : null;
    }

    /**
     * Sets AverageCpcPerFilter.
     *
     * @param StrategyAverageCpcPerFilterAdd|null $value
     * @return $this
     */
    public function setAverageCpcPerFilter(StrategyAverageCpcPerFilterAdd $value = null)
    {
        $this->AverageCpcPerFilter = $value;

        return $this;
    }

    /**
     * Gets AverageCpaPerCampaign.
     *
     * @return StrategyAverageCpaPerCampaignAdd|null
     */
    public function getAverageCpaPerCampaign()
    {
        return isset($this->AverageCpaPerCampaign) ? $this->AverageCpaPerCampaign : null;
    }

    /**
     * Sets AverageCpaPerCampaign.
     *
     * @param StrategyAverageCpaPerCampaignAdd|null $value
     * @return $this
     */
    public function setAverageCpaPerCampaign(StrategyAverageCpaPerCampaignAdd $value = null)
    {
        $this->AverageCpaPerCampaign = $value;

        return $this;
    }

    /**
     * Gets PayForConversionPerCampaign.
     *
     * @return StrategyPayForConversionPerCampaignAdd|null
     */
    public function getPayForConversionPerCampaign()
    {
        return isset($this->PayForConversionPerCampaign) ? $this->PayForConversionPerCampaign : null;
    }

    /**
     * Sets PayForConversionPerCampaign.
     *
     * @param StrategyPayForConversionPerCampaignAdd|null $value
     * @return $this
     */
    public function setPayForConversionPerCampaign(StrategyPayForConversionPerCampaignAdd $value = null)
    {
        $this->PayForConversionPerCampaign = $value;

        return $this;
    }

    /**
     * Gets PayForConversionPerFilter.
     *
     * @return StrategyPayForConversionPerFilterAdd|null
     */
    public function getPayForConversionPerFilter()
    {
        return isset($this->PayForConversionPerFilter) ? $this->PayForConversionPerFilter : null;
    }

    /**
     * Sets PayForConversionPerFilter.
     *
     * @param StrategyPayForConversionPerFilterAdd|null $value
     * @return $this
     */
    public function setPayForConversionPerFilter(StrategyPayForConversionPerFilterAdd $value = null)
    {
        $this->PayForConversionPerFilter = $value;

        return $this;
    }

    /**
     * Gets AverageCpaPerFilter.
     *
     * @return StrategyAverageCpaPerFilterAdd|null
     */
    public function getAverageCpaPerFilter()
    {
        return isset($this->AverageCpaPerFilter) ? $this->AverageCpaPerFilter : null;
    }

    /**
     * Sets AverageCpaPerFilter.
     *
     * @param StrategyAverageCpaPerFilterAdd|null $value
     * @return $this
     */
    public function setAverageCpaPerFilter(StrategyAverageCpaPerFilterAdd $value = null)
    {
        $this->AverageCpaPerFilter = $value;

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

