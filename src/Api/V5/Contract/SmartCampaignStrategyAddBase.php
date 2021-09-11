<?php

declare(strict_types=1);

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
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets AverageCpcPerCampaign.
     */
    public function getAverageCpcPerCampaign(): ?StrategyAverageCpcPerCampaignAdd
    {
        return $this->AverageCpcPerCampaign ?? null;
    }

    /**
     * Sets AverageCpcPerCampaign.
     *
     * @return $this
     */
    public function setAverageCpcPerCampaign(?StrategyAverageCpcPerCampaignAdd $value = null)
    {
        $this->AverageCpcPerCampaign = $value;

        return $this;
    }

    /**
     * Gets AverageCpcPerFilter.
     */
    public function getAverageCpcPerFilter(): ?StrategyAverageCpcPerFilterAdd
    {
        return $this->AverageCpcPerFilter ?? null;
    }

    /**
     * Sets AverageCpcPerFilter.
     *
     * @return $this
     */
    public function setAverageCpcPerFilter(?StrategyAverageCpcPerFilterAdd $value = null)
    {
        $this->AverageCpcPerFilter = $value;

        return $this;
    }

    /**
     * Gets AverageCpaPerCampaign.
     */
    public function getAverageCpaPerCampaign(): ?StrategyAverageCpaPerCampaignAdd
    {
        return $this->AverageCpaPerCampaign ?? null;
    }

    /**
     * Sets AverageCpaPerCampaign.
     *
     * @return $this
     */
    public function setAverageCpaPerCampaign(?StrategyAverageCpaPerCampaignAdd $value = null)
    {
        $this->AverageCpaPerCampaign = $value;

        return $this;
    }

    /**
     * Gets PayForConversionPerCampaign.
     */
    public function getPayForConversionPerCampaign(): ?StrategyPayForConversionPerCampaignAdd
    {
        return $this->PayForConversionPerCampaign ?? null;
    }

    /**
     * Sets PayForConversionPerCampaign.
     *
     * @return $this
     */
    public function setPayForConversionPerCampaign(?StrategyPayForConversionPerCampaignAdd $value = null)
    {
        $this->PayForConversionPerCampaign = $value;

        return $this;
    }

    /**
     * Gets PayForConversionPerFilter.
     */
    public function getPayForConversionPerFilter(): ?StrategyPayForConversionPerFilterAdd
    {
        return $this->PayForConversionPerFilter ?? null;
    }

    /**
     * Sets PayForConversionPerFilter.
     *
     * @return $this
     */
    public function setPayForConversionPerFilter(?StrategyPayForConversionPerFilterAdd $value = null)
    {
        $this->PayForConversionPerFilter = $value;

        return $this;
    }

    /**
     * Gets AverageCpaPerFilter.
     */
    public function getAverageCpaPerFilter(): ?StrategyAverageCpaPerFilterAdd
    {
        return $this->AverageCpaPerFilter ?? null;
    }

    /**
     * Sets AverageCpaPerFilter.
     *
     * @return $this
     */
    public function setAverageCpaPerFilter(?StrategyAverageCpaPerFilterAdd $value = null)
    {
        $this->AverageCpaPerFilter = $value;

        return $this;
    }

    /**
     * Gets AverageRoi.
     */
    public function getAverageRoi(): ?StrategyAverageRoiAdd
    {
        return $this->AverageRoi ?? null;
    }

    /**
     * Sets AverageRoi.
     *
     * @return $this
     */
    public function setAverageRoi(?StrategyAverageRoiAdd $value = null)
    {
        $this->AverageRoi = $value;

        return $this;
    }

    /**
     * Gets AverageCrr.
     */
    public function getAverageCrr(): ?StrategyAverageCrrAdd
    {
        return $this->AverageCrr ?? null;
    }

    /**
     * Sets AverageCrr.
     *
     * @return $this
     */
    public function setAverageCrr(?StrategyAverageCrrAdd $value = null)
    {
        $this->AverageCrr = $value;

        return $this;
    }

    /**
     * Gets PayForConversionCrr.
     */
    public function getPayForConversionCrr(): ?StrategyPayForConversionCrrAdd
    {
        return $this->PayForConversionCrr ?? null;
    }

    /**
     * Sets PayForConversionCrr.
     *
     * @return $this
     */
    public function setPayForConversionCrr(?StrategyPayForConversionCrrAdd $value = null)
    {
        $this->PayForConversionCrr = $value;

        return $this;
    }
}
