<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class SmartCampaignStrategyAddBase
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

    public function getAverageCpcPerCampaign(): ?StrategyAverageCpcPerCampaignAdd
    {
        return $this->AverageCpcPerCampaign ?? null;
    }

    /**
     * @return $this
     */
    public function setAverageCpcPerCampaign(?StrategyAverageCpcPerCampaignAdd $value = null)
    {
        $this->AverageCpcPerCampaign = $value;

        return $this;
    }

    public function getAverageCpcPerFilter(): ?StrategyAverageCpcPerFilterAdd
    {
        return $this->AverageCpcPerFilter ?? null;
    }

    /**
     * @return $this
     */
    public function setAverageCpcPerFilter(?StrategyAverageCpcPerFilterAdd $value = null)
    {
        $this->AverageCpcPerFilter = $value;

        return $this;
    }

    public function getAverageCpaPerCampaign(): ?StrategyAverageCpaPerCampaignAdd
    {
        return $this->AverageCpaPerCampaign ?? null;
    }

    /**
     * @return $this
     */
    public function setAverageCpaPerCampaign(?StrategyAverageCpaPerCampaignAdd $value = null)
    {
        $this->AverageCpaPerCampaign = $value;

        return $this;
    }

    public function getPayForConversionPerCampaign(): ?StrategyPayForConversionPerCampaignAdd
    {
        return $this->PayForConversionPerCampaign ?? null;
    }

    /**
     * @return $this
     */
    public function setPayForConversionPerCampaign(?StrategyPayForConversionPerCampaignAdd $value = null)
    {
        $this->PayForConversionPerCampaign = $value;

        return $this;
    }

    public function getPayForConversionPerFilter(): ?StrategyPayForConversionPerFilterAdd
    {
        return $this->PayForConversionPerFilter ?? null;
    }

    /**
     * @return $this
     */
    public function setPayForConversionPerFilter(?StrategyPayForConversionPerFilterAdd $value = null)
    {
        $this->PayForConversionPerFilter = $value;

        return $this;
    }

    public function getAverageCpaPerFilter(): ?StrategyAverageCpaPerFilterAdd
    {
        return $this->AverageCpaPerFilter ?? null;
    }

    /**
     * @return $this
     */
    public function setAverageCpaPerFilter(?StrategyAverageCpaPerFilterAdd $value = null)
    {
        $this->AverageCpaPerFilter = $value;

        return $this;
    }

    public function getAverageRoi(): ?StrategyAverageRoiAdd
    {
        return $this->AverageRoi ?? null;
    }

    /**
     * @return $this
     */
    public function setAverageRoi(?StrategyAverageRoiAdd $value = null)
    {
        $this->AverageRoi = $value;

        return $this;
    }

    public function getAverageCrr(): ?StrategyAverageCrrAdd
    {
        return $this->AverageCrr ?? null;
    }

    /**
     * @return $this
     */
    public function setAverageCrr(?StrategyAverageCrrAdd $value = null)
    {
        $this->AverageCrr = $value;

        return $this;
    }

    public function getPayForConversionCrr(): ?StrategyPayForConversionCrrAdd
    {
        return $this->PayForConversionCrr ?? null;
    }

    /**
     * @return $this
     */
    public function setPayForConversionCrr(?StrategyPayForConversionCrrAdd $value = null)
    {
        $this->PayForConversionCrr = $value;

        return $this;
    }
}
