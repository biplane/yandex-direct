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
//    protected $AverageCpcPerCampaign = null;

//    Can be omitted.
//    protected $AverageCpcPerFilter = null;

//    Can be omitted.
//    protected $AverageCpaPerCampaign = null;

//    Can be omitted.
//    protected $PayForConversionPerCampaign = null;

//    Can be omitted.
//    protected $PayForConversionPerFilter = null;

//    Can be omitted.
//    protected $AverageCpaPerFilter = null;

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

    public function getAverageCpcPerCampaign(): ?StrategyAverageCpcPerCampaign
    {
        return $this->AverageCpcPerCampaign ?? null;
    }

    /**
     * @return $this
     */
    public function setAverageCpcPerCampaign(?StrategyAverageCpcPerCampaign $value = null)
    {
        $this->AverageCpcPerCampaign = $value;

        return $this;
    }

    public function getAverageCpcPerFilter(): ?StrategyAverageCpcPerFilter
    {
        return $this->AverageCpcPerFilter ?? null;
    }

    /**
     * @return $this
     */
    public function setAverageCpcPerFilter(?StrategyAverageCpcPerFilter $value = null)
    {
        $this->AverageCpcPerFilter = $value;

        return $this;
    }

    public function getAverageCpaPerCampaign(): ?StrategyAverageCpaPerCampaign
    {
        return $this->AverageCpaPerCampaign ?? null;
    }

    /**
     * @return $this
     */
    public function setAverageCpaPerCampaign(?StrategyAverageCpaPerCampaign $value = null)
    {
        $this->AverageCpaPerCampaign = $value;

        return $this;
    }

    public function getPayForConversionPerCampaign(): ?StrategyPayForConversionPerCampaign
    {
        return $this->PayForConversionPerCampaign ?? null;
    }

    /**
     * @return $this
     */
    public function setPayForConversionPerCampaign(?StrategyPayForConversionPerCampaign $value = null)
    {
        $this->PayForConversionPerCampaign = $value;

        return $this;
    }

    public function getPayForConversionPerFilter(): ?StrategyPayForConversionPerFilter
    {
        return $this->PayForConversionPerFilter ?? null;
    }

    /**
     * @return $this
     */
    public function setPayForConversionPerFilter(?StrategyPayForConversionPerFilter $value = null)
    {
        $this->PayForConversionPerFilter = $value;

        return $this;
    }

    public function getAverageCpaPerFilter(): ?StrategyAverageCpaPerFilter
    {
        return $this->AverageCpaPerFilter ?? null;
    }

    /**
     * @return $this
     */
    public function setAverageCpaPerFilter(?StrategyAverageCpaPerFilter $value = null)
    {
        $this->AverageCpaPerFilter = $value;

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
