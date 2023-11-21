<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class StrategyGetItem
{
//    Can be omitted.
//    protected $Id = null;

//    Can be omitted.
//    protected $AttributionModel = null;

//    Can be omitted.
//    protected $Type = null;

//    Can be omitted.
//    protected $PriorityGoals = null;

//    Can be omitted.
//    protected $CounterIds = null;

//    Can be omitted.
//    protected $Name = null;

//    Can be omitted.
//    protected $StatusArchived = null;

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

    public function getId(): ?int
    {
        return $this->Id ?? null;
    }

    /**
     * @return $this
     */
    public function setId(?int $value = null)
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

    /**
     * @see StrategyType
     */
    public function getType(): ?string
    {
        return $this->Type ?? null;
    }

    /**
     * @see StrategyType
     *
     * @return $this
     */
    public function setType(?string $value = null)
    {
        $this->Type = $value;

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
     * @see YesNoEnum
     */
    public function getStatusArchived(): ?string
    {
        return $this->StatusArchived ?? null;
    }

    /**
     * @see YesNoEnum
     *
     * @return $this
     */
    public function setStatusArchived(?string $value = null)
    {
        $this->StatusArchived = $value;

        return $this;
    }

    public function getWbMaximumClicks(): ?StrategyMaximumClicksGetItem
    {
        return $this->WbMaximumClicks ?? null;
    }

    /**
     * @return $this
     */
    public function setWbMaximumClicks(?StrategyMaximumClicksGetItem $value = null)
    {
        $this->WbMaximumClicks = $value;

        return $this;
    }

    public function getWbMaximumConversionRate(): ?StrategyMaximumConversionRateGetItem
    {
        return $this->WbMaximumConversionRate ?? null;
    }

    /**
     * @return $this
     */
    public function setWbMaximumConversionRate(?StrategyMaximumConversionRateGetItem $value = null)
    {
        $this->WbMaximumConversionRate = $value;

        return $this;
    }

    public function getAverageCpc(): ?StrategyAverageCpcGetItem
    {
        return $this->AverageCpc ?? null;
    }

    /**
     * @return $this
     */
    public function setAverageCpc(?StrategyAverageCpcGetItem $value = null)
    {
        $this->AverageCpc = $value;

        return $this;
    }

    public function getAverageCpa(): ?StrategyAverageCpaGetItem
    {
        return $this->AverageCpa ?? null;
    }

    /**
     * @return $this
     */
    public function setAverageCpa(?StrategyAverageCpaGetItem $value = null)
    {
        $this->AverageCpa = $value;

        return $this;
    }

    public function getPayForConversion(): ?StrategyPayForConversionGetItem
    {
        return $this->PayForConversion ?? null;
    }

    /**
     * @return $this
     */
    public function setPayForConversion(?StrategyPayForConversionGetItem $value = null)
    {
        $this->PayForConversion = $value;

        return $this;
    }

    public function getAverageCpaPerCampaign(): ?StrategyAverageCpaPerCampaignGetItem
    {
        return $this->AverageCpaPerCampaign ?? null;
    }

    /**
     * @return $this
     */
    public function setAverageCpaPerCampaign(?StrategyAverageCpaPerCampaignGetItem $value = null)
    {
        $this->AverageCpaPerCampaign = $value;

        return $this;
    }

    public function getPayForConversionPerCampaign(): ?StrategyPayForConversionPerCampaignGetItem
    {
        return $this->PayForConversionPerCampaign ?? null;
    }

    /**
     * @return $this
     */
    public function setPayForConversionPerCampaign(?StrategyPayForConversionPerCampaignGetItem $value = null)
    {
        $this->PayForConversionPerCampaign = $value;

        return $this;
    }

    public function getPayForConversionPerFilter(): ?StrategyPayForConversionPerFilterGetItem
    {
        return $this->PayForConversionPerFilter ?? null;
    }

    /**
     * @return $this
     */
    public function setPayForConversionPerFilter(?StrategyPayForConversionPerFilterGetItem $value = null)
    {
        $this->PayForConversionPerFilter = $value;

        return $this;
    }

    public function getAverageCpaPerFilter(): ?StrategyAverageCpaPerFilterGetItem
    {
        return $this->AverageCpaPerFilter ?? null;
    }

    /**
     * @return $this
     */
    public function setAverageCpaPerFilter(?StrategyAverageCpaPerFilterGetItem $value = null)
    {
        $this->AverageCpaPerFilter = $value;

        return $this;
    }

    public function getAverageCpcPerCampaign(): ?StrategyAverageCpcPerCampaignGetItem
    {
        return $this->AverageCpcPerCampaign ?? null;
    }

    /**
     * @return $this
     */
    public function setAverageCpcPerCampaign(?StrategyAverageCpcPerCampaignGetItem $value = null)
    {
        $this->AverageCpcPerCampaign = $value;

        return $this;
    }

    public function getAverageCpcPerFilter(): ?StrategyAverageCpcPerFilterGetItem
    {
        return $this->AverageCpcPerFilter ?? null;
    }

    /**
     * @return $this
     */
    public function setAverageCpcPerFilter(?StrategyAverageCpcPerFilterGetItem $value = null)
    {
        $this->AverageCpcPerFilter = $value;

        return $this;
    }

    public function getAverageCrr(): ?StrategyAverageCrrGetItem
    {
        return $this->AverageCrr ?? null;
    }

    /**
     * @return $this
     */
    public function setAverageCrr(?StrategyAverageCrrGetItem $value = null)
    {
        $this->AverageCrr = $value;

        return $this;
    }

    public function getPayForConversionCrr(): ?StrategyPayForConversionCrrGetItem
    {
        return $this->PayForConversionCrr ?? null;
    }

    /**
     * @return $this
     */
    public function setPayForConversionCrr(?StrategyPayForConversionCrrGetItem $value = null)
    {
        $this->PayForConversionCrr = $value;

        return $this;
    }
}
