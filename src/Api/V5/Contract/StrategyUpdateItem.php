<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class StrategyUpdateItem
{
    protected $Id = null;

//    Can be omitted.
//    protected $AttributionModel = null;

//    Can be omitted.
//    protected $Name = null;

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

    public function getId(): int
    {
        return $this->Id;
    }

    /**
     * @return $this
     */
    public function setId(int $value)
    {
        $this->Id = $value;

        return $this;
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

    public function getName(): ?string
    {
        return $this->Name ?? null;
    }

    /**
     * @return $this
     */
    public function setName(?string $value = null)
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

    public function getWbMaximumClicks(): ?StrategyMaximumClicksUpdateItem
    {
        return $this->WbMaximumClicks ?? null;
    }

    /**
     * @return $this
     */
    public function setWbMaximumClicks(?StrategyMaximumClicksUpdateItem $value = null)
    {
        $this->WbMaximumClicks = $value;

        return $this;
    }

    public function getWbMaximumConversionRate(): ?StrategyMaximumConversionRateUpdateItem
    {
        return $this->WbMaximumConversionRate ?? null;
    }

    /**
     * @return $this
     */
    public function setWbMaximumConversionRate(?StrategyMaximumConversionRateUpdateItem $value = null)
    {
        $this->WbMaximumConversionRate = $value;

        return $this;
    }

    public function getAverageCpc(): ?StrategyAverageCpcUpdateItem
    {
        return $this->AverageCpc ?? null;
    }

    /**
     * @return $this
     */
    public function setAverageCpc(?StrategyAverageCpcUpdateItem $value = null)
    {
        $this->AverageCpc = $value;

        return $this;
    }

    public function getAverageCpa(): ?StrategyAverageCpaUpdateItem
    {
        return $this->AverageCpa ?? null;
    }

    /**
     * @return $this
     */
    public function setAverageCpa(?StrategyAverageCpaUpdateItem $value = null)
    {
        $this->AverageCpa = $value;

        return $this;
    }

    public function getPayForConversion(): ?StrategyPayForConversionUpdateItem
    {
        return $this->PayForConversion ?? null;
    }

    /**
     * @return $this
     */
    public function setPayForConversion(?StrategyPayForConversionUpdateItem $value = null)
    {
        $this->PayForConversion = $value;

        return $this;
    }

    public function getAverageCpaPerCampaign(): ?StrategyAverageCpaPerCampaignUpdateItem
    {
        return $this->AverageCpaPerCampaign ?? null;
    }

    /**
     * @return $this
     */
    public function setAverageCpaPerCampaign(?StrategyAverageCpaPerCampaignUpdateItem $value = null)
    {
        $this->AverageCpaPerCampaign = $value;

        return $this;
    }

    public function getPayForConversionPerCampaign(): ?StrategyPayForConversionPerCampaignUpdateItem
    {
        return $this->PayForConversionPerCampaign ?? null;
    }

    /**
     * @return $this
     */
    public function setPayForConversionPerCampaign(?StrategyPayForConversionPerCampaignUpdateItem $value = null)
    {
        $this->PayForConversionPerCampaign = $value;

        return $this;
    }

    public function getPayForConversionPerFilter(): ?StrategyPayForConversionPerFilterUpdateItem
    {
        return $this->PayForConversionPerFilter ?? null;
    }

    /**
     * @return $this
     */
    public function setPayForConversionPerFilter(?StrategyPayForConversionPerFilterUpdateItem $value = null)
    {
        $this->PayForConversionPerFilter = $value;

        return $this;
    }

    public function getAverageCpaPerFilter(): ?StrategyAverageCpaPerFilterUpdateItem
    {
        return $this->AverageCpaPerFilter ?? null;
    }

    /**
     * @return $this
     */
    public function setAverageCpaPerFilter(?StrategyAverageCpaPerFilterUpdateItem $value = null)
    {
        $this->AverageCpaPerFilter = $value;

        return $this;
    }

    public function getAverageCpcPerCampaign(): ?StrategyAverageCpcPerCampaignUpdateItem
    {
        return $this->AverageCpcPerCampaign ?? null;
    }

    /**
     * @return $this
     */
    public function setAverageCpcPerCampaign(?StrategyAverageCpcPerCampaignUpdateItem $value = null)
    {
        $this->AverageCpcPerCampaign = $value;

        return $this;
    }

    public function getAverageCpcPerFilter(): ?StrategyAverageCpcPerFilterUpdateItem
    {
        return $this->AverageCpcPerFilter ?? null;
    }

    /**
     * @return $this
     */
    public function setAverageCpcPerFilter(?StrategyAverageCpcPerFilterUpdateItem $value = null)
    {
        $this->AverageCpcPerFilter = $value;

        return $this;
    }

    public function getAverageCrr(): ?StrategyAverageCrrUpdateItem
    {
        return $this->AverageCrr ?? null;
    }

    /**
     * @return $this
     */
    public function setAverageCrr(?StrategyAverageCrrUpdateItem $value = null)
    {
        $this->AverageCrr = $value;

        return $this;
    }

    public function getPayForConversionCrr(): ?StrategyPayForConversionCrrUpdateItem
    {
        return $this->PayForConversionCrr ?? null;
    }

    /**
     * @return $this
     */
    public function setPayForConversionCrr(?StrategyPayForConversionCrrUpdateItem $value = null)
    {
        $this->PayForConversionCrr = $value;

        return $this;
    }
}
