<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class SmartCampaignStrategyBase
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
    public static function create(): static
    {
        return new static();
    }

    /**
     * Get AverageCpcPerCampaign
     */
    public function getAverageCpcPerCampaign(): ?StrategyAverageCpcPerCampaign
    {
        return $this->AverageCpcPerCampaign ?? null;
    }

    /**
     * Set AverageCpcPerCampaign
     *
     * @return $this
     */
    public function setAverageCpcPerCampaign(?StrategyAverageCpcPerCampaign $value)
    {
        $this->AverageCpcPerCampaign = $value;

        return $this;
    }

    /**
     * Get AverageCpcPerFilter
     */
    public function getAverageCpcPerFilter(): ?StrategyAverageCpcPerFilter
    {
        return $this->AverageCpcPerFilter ?? null;
    }

    /**
     * Set AverageCpcPerFilter
     *
     * @return $this
     */
    public function setAverageCpcPerFilter(?StrategyAverageCpcPerFilter $value)
    {
        $this->AverageCpcPerFilter = $value;

        return $this;
    }

    /**
     * Get AverageCpaPerCampaign
     */
    public function getAverageCpaPerCampaign(): ?StrategyAverageCpaPerCampaign
    {
        return $this->AverageCpaPerCampaign ?? null;
    }

    /**
     * Set AverageCpaPerCampaign
     *
     * @return $this
     */
    public function setAverageCpaPerCampaign(?StrategyAverageCpaPerCampaign $value)
    {
        $this->AverageCpaPerCampaign = $value;

        return $this;
    }

    /**
     * Get PayForConversionPerCampaign
     */
    public function getPayForConversionPerCampaign(): ?StrategyPayForConversionPerCampaign
    {
        return $this->PayForConversionPerCampaign ?? null;
    }

    /**
     * Set PayForConversionPerCampaign
     *
     * @return $this
     */
    public function setPayForConversionPerCampaign(?StrategyPayForConversionPerCampaign $value)
    {
        $this->PayForConversionPerCampaign = $value;

        return $this;
    }

    /**
     * Get PayForConversionPerFilter
     */
    public function getPayForConversionPerFilter(): ?StrategyPayForConversionPerFilter
    {
        return $this->PayForConversionPerFilter ?? null;
    }

    /**
     * Set PayForConversionPerFilter
     *
     * @return $this
     */
    public function setPayForConversionPerFilter(?StrategyPayForConversionPerFilter $value)
    {
        $this->PayForConversionPerFilter = $value;

        return $this;
    }

    /**
     * Get AverageCpaPerFilter
     */
    public function getAverageCpaPerFilter(): ?StrategyAverageCpaPerFilter
    {
        return $this->AverageCpaPerFilter ?? null;
    }

    /**
     * Set AverageCpaPerFilter
     *
     * @return $this
     */
    public function setAverageCpaPerFilter(?StrategyAverageCpaPerFilter $value)
    {
        $this->AverageCpaPerFilter = $value;

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
