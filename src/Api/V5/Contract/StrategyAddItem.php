<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class StrategyAddItem
{
//    Can be omitted.
//    protected $AttributionModel = null;

    protected $Name = null;

//    Can be omitted.
//    protected $CounterIds = null;

//    Can be omitted.
//    protected $PriorityGoals = null;

//    Can be omitted.
//    protected $WbMaximumClicks = null;

//    Can be omitted.
//    protected $WbMaximumConversionRate = null;

//    Can be omitted.
//    protected $AverageCpc = null;

//    Can be omitted.
//    protected $AverageCpa = null;

//    Can be omitted.
//    protected $PayForConversion = null;

//    Can be omitted.
//    protected $AverageCpaPerCampaign = null;

//    Can be omitted.
//    protected $PayForConversionPerCampaign = null;

//    Can be omitted.
//    protected $PayForConversionPerFilter = null;

//    Can be omitted.
//    protected $AverageCpaPerFilter = null;

//    Can be omitted.
//    protected $AverageCpcPerCampaign = null;

//    Can be omitted.
//    protected $AverageCpcPerFilter = null;

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

    /**
     * @see AttributionModelEnum
     */
    public function getAttributionModel(): ?string
    {
        return $this->AttributionModel ?? null;
    }

    /**
     * @see AttributionModelEnum
     *
     * @return $this
     */
    public function setAttributionModel(?string $value = null)
    {
        $this->AttributionModel = $value;

        return $this;
    }

    public function getName(): string
    {
        return $this->Name;
    }

    /**
     * @return $this
     */
    public function setName(string $value)
    {
        $this->Name = $value;

        return $this;
    }

    /**
     * @return float[]|null
     */
    public function getCounterIds(): ?array
    {
        return $this->CounterIds ?? null;
    }

    /**
     * @param float[]|null $value
     *
     * @return $this
     */
    public function setCounterIds(?array $value = null)
    {
        $this->CounterIds = $value;

        return $this;
    }

    public function getPriorityGoals(): ?PriorityGoalsArray
    {
        return $this->PriorityGoals ?? null;
    }

    /**
     * @return $this
     */
    public function setPriorityGoals(?PriorityGoalsArray $value = null)
    {
        $this->PriorityGoals = $value;

        return $this;
    }

    public function getWbMaximumClicks(): ?StrategyMaximumClicksAddItem
    {
        return $this->WbMaximumClicks ?? null;
    }

    /**
     * @return $this
     */
    public function setWbMaximumClicks(?StrategyMaximumClicksAddItem $value = null)
    {
        $this->WbMaximumClicks = $value;

        return $this;
    }

    public function getWbMaximumConversionRate(): ?StrategyMaximumConversionRateAddItem
    {
        return $this->WbMaximumConversionRate ?? null;
    }

    /**
     * @return $this
     */
    public function setWbMaximumConversionRate(?StrategyMaximumConversionRateAddItem $value = null)
    {
        $this->WbMaximumConversionRate = $value;

        return $this;
    }

    public function getAverageCpc(): ?StrategyAverageCpcAddItem
    {
        return $this->AverageCpc ?? null;
    }

    /**
     * @return $this
     */
    public function setAverageCpc(?StrategyAverageCpcAddItem $value = null)
    {
        $this->AverageCpc = $value;

        return $this;
    }

    public function getAverageCpa(): ?StrategyAverageCpaAddItem
    {
        return $this->AverageCpa ?? null;
    }

    /**
     * @return $this
     */
    public function setAverageCpa(?StrategyAverageCpaAddItem $value = null)
    {
        $this->AverageCpa = $value;

        return $this;
    }

    public function getPayForConversion(): ?StrategyPayForConversionAddItem
    {
        return $this->PayForConversion ?? null;
    }

    /**
     * @return $this
     */
    public function setPayForConversion(?StrategyPayForConversionAddItem $value = null)
    {
        $this->PayForConversion = $value;

        return $this;
    }

    public function getAverageCpaPerCampaign(): ?StrategyAverageCpaPerCampaignAddItem
    {
        return $this->AverageCpaPerCampaign ?? null;
    }

    /**
     * @return $this
     */
    public function setAverageCpaPerCampaign(?StrategyAverageCpaPerCampaignAddItem $value = null)
    {
        $this->AverageCpaPerCampaign = $value;

        return $this;
    }

    public function getPayForConversionPerCampaign(): ?StrategyPayForConversionPerCampaignAddItem
    {
        return $this->PayForConversionPerCampaign ?? null;
    }

    /**
     * @return $this
     */
    public function setPayForConversionPerCampaign(?StrategyPayForConversionPerCampaignAddItem $value = null)
    {
        $this->PayForConversionPerCampaign = $value;

        return $this;
    }

    public function getPayForConversionPerFilter(): ?StrategyPayForConversionPerFilterAddItem
    {
        return $this->PayForConversionPerFilter ?? null;
    }

    /**
     * @return $this
     */
    public function setPayForConversionPerFilter(?StrategyPayForConversionPerFilterAddItem $value = null)
    {
        $this->PayForConversionPerFilter = $value;

        return $this;
    }

    public function getAverageCpaPerFilter(): ?StrategyAverageCpaPerFilterAddItem
    {
        return $this->AverageCpaPerFilter ?? null;
    }

    /**
     * @return $this
     */
    public function setAverageCpaPerFilter(?StrategyAverageCpaPerFilterAddItem $value = null)
    {
        $this->AverageCpaPerFilter = $value;

        return $this;
    }

    public function getAverageCpcPerCampaign(): ?StrategyAverageCpcPerCampaignAddItem
    {
        return $this->AverageCpcPerCampaign ?? null;
    }

    /**
     * @return $this
     */
    public function setAverageCpcPerCampaign(?StrategyAverageCpcPerCampaignAddItem $value = null)
    {
        $this->AverageCpcPerCampaign = $value;

        return $this;
    }

    public function getAverageCpcPerFilter(): ?StrategyAverageCpcPerFilterAddItem
    {
        return $this->AverageCpcPerFilter ?? null;
    }

    /**
     * @return $this
     */
    public function setAverageCpcPerFilter(?StrategyAverageCpcPerFilterAddItem $value = null)
    {
        $this->AverageCpcPerFilter = $value;

        return $this;
    }

    public function getAverageCrr(): ?StrategyAverageCrrAddItem
    {
        return $this->AverageCrr ?? null;
    }

    /**
     * @return $this
     */
    public function setAverageCrr(?StrategyAverageCrrAddItem $value = null)
    {
        $this->AverageCrr = $value;

        return $this;
    }

    public function getPayForConversionCrr(): ?StrategyPayForConversionCrrAddItem
    {
        return $this->PayForConversionCrr ?? null;
    }

    /**
     * @return $this
     */
    public function setPayForConversionCrr(?StrategyPayForConversionCrrAddItem $value = null)
    {
        $this->PayForConversionCrr = $value;

        return $this;
    }
}
