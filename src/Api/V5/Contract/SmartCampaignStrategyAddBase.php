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
//    protected $AverageCpaPerFilter = null;

//    Can be omit.
//    protected $AverageRoi = null;

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


}

