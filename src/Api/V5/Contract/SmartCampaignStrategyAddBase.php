<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class SmartCampaignStrategyAddBase
{
//    Can be omitted.
//    protected $AverageCpcPerCampaign;

//    Can be omitted.
//    protected $AverageCpcPerFilter;

//    Can be omitted.
//    protected $AverageCpaPerCampaign;

//    Can be omitted.
//    protected $PayForConversionPerCampaign;

//    Can be omitted.
//    protected $PayForConversionPerFilter;

//    Can be omitted.
//    protected $AverageCpaPerFilter;

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
     * Get AverageCpcPerCampaign
     */
    public function getAverageCpcPerCampaign(): ?StrategyAverageCpcPerCampaignAdd
    {
        return $this->AverageCpcPerCampaign ?? null;
    }

    /**
     * Set AverageCpcPerCampaign
     *
     * @return $this
     */
    public function setAverageCpcPerCampaign(?StrategyAverageCpcPerCampaignAdd $value)
    {
        $this->AverageCpcPerCampaign = $value;

        return $this;
    }

    /**
     * Get AverageCpcPerFilter
     */
    public function getAverageCpcPerFilter(): ?StrategyAverageCpcPerFilterAdd
    {
        return $this->AverageCpcPerFilter ?? null;
    }

    /**
     * Set AverageCpcPerFilter
     *
     * @return $this
     */
    public function setAverageCpcPerFilter(?StrategyAverageCpcPerFilterAdd $value)
    {
        $this->AverageCpcPerFilter = $value;

        return $this;
    }

    /**
     * Get AverageCpaPerCampaign
     */
    public function getAverageCpaPerCampaign(): ?StrategyAverageCpaPerCampaignAdd
    {
        return $this->AverageCpaPerCampaign ?? null;
    }

    /**
     * Set AverageCpaPerCampaign
     *
     * @return $this
     */
    public function setAverageCpaPerCampaign(?StrategyAverageCpaPerCampaignAdd $value)
    {
        $this->AverageCpaPerCampaign = $value;

        return $this;
    }

    /**
     * Get PayForConversionPerCampaign
     */
    public function getPayForConversionPerCampaign(): ?StrategyPayForConversionPerCampaignAdd
    {
        return $this->PayForConversionPerCampaign ?? null;
    }

    /**
     * Set PayForConversionPerCampaign
     *
     * @return $this
     */
    public function setPayForConversionPerCampaign(?StrategyPayForConversionPerCampaignAdd $value)
    {
        $this->PayForConversionPerCampaign = $value;

        return $this;
    }

    /**
     * Get PayForConversionPerFilter
     */
    public function getPayForConversionPerFilter(): ?StrategyPayForConversionPerFilterAdd
    {
        return $this->PayForConversionPerFilter ?? null;
    }

    /**
     * Set PayForConversionPerFilter
     *
     * @return $this
     */
    public function setPayForConversionPerFilter(?StrategyPayForConversionPerFilterAdd $value)
    {
        $this->PayForConversionPerFilter = $value;

        return $this;
    }

    /**
     * Get AverageCpaPerFilter
     */
    public function getAverageCpaPerFilter(): ?StrategyAverageCpaPerFilterAdd
    {
        return $this->AverageCpaPerFilter ?? null;
    }

    /**
     * Set AverageCpaPerFilter
     *
     * @return $this
     */
    public function setAverageCpaPerFilter(?StrategyAverageCpaPerFilterAdd $value)
    {
        $this->AverageCpaPerFilter = $value;

        return $this;
    }

    /**
     * Get AverageRoi
     */
    public function getAverageRoi(): ?StrategyAverageRoiAdd
    {
        return $this->AverageRoi ?? null;
    }

    /**
     * Set AverageRoi
     *
     * @return $this
     */
    public function setAverageRoi(?StrategyAverageRoiAdd $value)
    {
        $this->AverageRoi = $value;

        return $this;
    }

    /**
     * Get AverageCrr
     */
    public function getAverageCrr(): ?StrategyAverageCrrAdd
    {
        return $this->AverageCrr ?? null;
    }

    /**
     * Set AverageCrr
     *
     * @return $this
     */
    public function setAverageCrr(?StrategyAverageCrrAdd $value)
    {
        $this->AverageCrr = $value;

        return $this;
    }

    /**
     * Get PayForConversionCrr
     */
    public function getPayForConversionCrr(): ?StrategyPayForConversionCrrAdd
    {
        return $this->PayForConversionCrr ?? null;
    }

    /**
     * Set PayForConversionCrr
     *
     * @return $this
     */
    public function setPayForConversionCrr(?StrategyPayForConversionCrrAdd $value)
    {
        $this->PayForConversionCrr = $value;

        return $this;
    }
}
