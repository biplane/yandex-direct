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
//    protected $Id;

//    Can be omitted.
//    protected $AttributionModel;

//    Can be omitted.
//    protected $Type;

//    Can be omitted.
//    protected $PriorityGoals;

//    Can be omitted.
//    protected $CounterIds;

//    Can be omitted.
//    protected $Name;

//    Can be omitted.
//    protected $StatusArchived;

//    Can be omitted.
//    protected $WbMaximumClicks;

//    Can be omitted.
//    protected $WbMaximumConversionRate;

//    Can be omitted.
//    protected $AverageCpc;

//    Can be omitted.
//    protected $AverageCpa;

//    Can be omitted.
//    protected $MaxProfit;

//    Can be omitted.
//    protected $PayForConversion;

//    Can be omitted.
//    protected $AverageCpaPerCampaign;

//    Can be omitted.
//    protected $PayForConversionPerCampaign;

//    Can be omitted.
//    protected $PayForConversionPerFilter;

//    Can be omitted.
//    protected $AverageCpaPerFilter;

//    Can be omitted.
//    protected $AverageCpcPerCampaign;

//    Can be omitted.
//    protected $AverageCpcPerFilter;

//    Can be omitted.
//    protected $AverageCrr;

//    Can be omitted.
//    protected $PayForConversionCrr;

//    Can be omitted.
//    protected $AverageCpaMultipleGoals;

//    Can be omitted.
//    protected $PayForConversionMultipleGoals;

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
     * Get Id
     */
    public function getId(): ?int
    {
        return $this->Id ?? null;
    }

    /**
     * Set Id
     *
     * @return $this
     */
    public function setId(?int $value)
    {
        $this->Id = $value;

        return $this;
    }

    /**
     * Get AttributionModel
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\AttributionModelEnum
     *
     * @return 'LC'|'LSC'|'FC'|'LYDC'|'LSCCD'|'FCCD'|'LYDCCD'|'AUTO'|null
     */
    public function getAttributionModel(): ?string
    {
        return $this->AttributionModel ?? null;
    }

    /**
     * Set AttributionModel
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\AttributionModelEnum
     *
     * @param 'LC'|'LSC'|'FC'|'LYDC'|'LSCCD'|'FCCD'|'LYDCCD'|'AUTO'|null $value
     *
     * @return $this
     */
    public function setAttributionModel(?string $value)
    {
        $this->AttributionModel = $value;

        return $this;
    }

    /**
     * Get Type
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\StrategyType
     *
     * @return 'AVERAGE_CPC'|'AVERAGE_CPA'|'PAY_FOR_CONVERSION'|'WB_MAXIMUM_CONVERSION_RATE'|'WB_MAXIMUM_CLICKS'|'AVERAGE_CRR'|'PAY_FOR_CONVERSION_CRR'|'AVERAGE_CPC_PER_CAMPAIGN'|'AVERAGE_CPC_PER_FILTER'|'AVERAGE_CPA_PER_CAMPAIGN'|'AVERAGE_CPA_PER_FILTER'|'PAY_FOR_CONVERSION_PER_CAMPAIGN'|'PAY_FOR_CONVERSION_PER_FILTER'|'MAX_PROFIT'|'AVERAGE_CPA_MULTIPLE_GOALS'|'PAY_FOR_CONVERSION_MULTIPLE_GOALS'|'UNKNOWN'|null
     */
    public function getType(): ?string
    {
        return $this->Type ?? null;
    }

    /**
     * Set Type
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\StrategyType
     *
     * @param 'AVERAGE_CPC'|'AVERAGE_CPA'|'PAY_FOR_CONVERSION'|'WB_MAXIMUM_CONVERSION_RATE'|'WB_MAXIMUM_CLICKS'|'AVERAGE_CRR'|'PAY_FOR_CONVERSION_CRR'|'AVERAGE_CPC_PER_CAMPAIGN'|'AVERAGE_CPC_PER_FILTER'|'AVERAGE_CPA_PER_CAMPAIGN'|'AVERAGE_CPA_PER_FILTER'|'PAY_FOR_CONVERSION_PER_CAMPAIGN'|'PAY_FOR_CONVERSION_PER_FILTER'|'MAX_PROFIT'|'AVERAGE_CPA_MULTIPLE_GOALS'|'PAY_FOR_CONVERSION_MULTIPLE_GOALS'|'UNKNOWN'|null $value
     *
     * @return $this
     */
    public function setType(?string $value)
    {
        $this->Type = $value;

        return $this;
    }

    /**
     * Get PriorityGoals
     */
    public function getPriorityGoals(): ?PriorityGoalsArray
    {
        return $this->PriorityGoals ?? null;
    }

    /**
     * Set PriorityGoals
     *
     * @return $this
     */
    public function setPriorityGoals(?PriorityGoalsArray $value)
    {
        $this->PriorityGoals = $value;

        return $this;
    }

    /**
     * Get CounterIds
     *
     * @return non-empty-list<int>|null
     */
    public function getCounterIds(): ?array
    {
        return $this->CounterIds ?? null;
    }

    /**
     * Set CounterIds
     *
     * @param non-empty-list<int>|null $value
     *
     * @return $this
     */
    public function setCounterIds(?array $value)
    {
        $this->CounterIds = $value;

        return $this;
    }

    /**
     * Get Name
     */
    public function getName(): ?string
    {
        return $this->Name ?? null;
    }

    /**
     * Set Name
     *
     * @return $this
     */
    public function setName(?string $value)
    {
        $this->Name = $value;

        return $this;
    }

    /**
     * Get StatusArchived
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\YesNoEnum
     *
     * @return 'YES'|'NO'|null
     */
    public function getStatusArchived(): ?string
    {
        return $this->StatusArchived ?? null;
    }

    /**
     * Set StatusArchived
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\YesNoEnum
     *
     * @param 'YES'|'NO'|null $value
     *
     * @return $this
     */
    public function setStatusArchived(?string $value)
    {
        $this->StatusArchived = $value;

        return $this;
    }

    /**
     * Get WbMaximumClicks
     */
    public function getWbMaximumClicks(): ?StrategyMaximumClicksGetItem
    {
        return $this->WbMaximumClicks ?? null;
    }

    /**
     * Set WbMaximumClicks
     *
     * @return $this
     */
    public function setWbMaximumClicks(?StrategyMaximumClicksGetItem $value)
    {
        $this->WbMaximumClicks = $value;

        return $this;
    }

    /**
     * Get WbMaximumConversionRate
     */
    public function getWbMaximumConversionRate(): ?StrategyMaximumConversionRateGetItem
    {
        return $this->WbMaximumConversionRate ?? null;
    }

    /**
     * Set WbMaximumConversionRate
     *
     * @return $this
     */
    public function setWbMaximumConversionRate(?StrategyMaximumConversionRateGetItem $value)
    {
        $this->WbMaximumConversionRate = $value;

        return $this;
    }

    /**
     * Get AverageCpc
     */
    public function getAverageCpc(): ?StrategyAverageCpcGetItem
    {
        return $this->AverageCpc ?? null;
    }

    /**
     * Set AverageCpc
     *
     * @return $this
     */
    public function setAverageCpc(?StrategyAverageCpcGetItem $value)
    {
        $this->AverageCpc = $value;

        return $this;
    }

    /**
     * Get AverageCpa
     */
    public function getAverageCpa(): ?StrategyAverageCpaGetItem
    {
        return $this->AverageCpa ?? null;
    }

    /**
     * Set AverageCpa
     *
     * @return $this
     */
    public function setAverageCpa(?StrategyAverageCpaGetItem $value)
    {
        $this->AverageCpa = $value;

        return $this;
    }

    /**
     * Get MaxProfit
     */
    public function getMaxProfit(): ?StrategyMaxProfitGetItem
    {
        return $this->MaxProfit ?? null;
    }

    /**
     * Set MaxProfit
     *
     * @return $this
     */
    public function setMaxProfit(?StrategyMaxProfitGetItem $value)
    {
        $this->MaxProfit = $value;

        return $this;
    }

    /**
     * Get PayForConversion
     */
    public function getPayForConversion(): ?StrategyPayForConversionGetItem
    {
        return $this->PayForConversion ?? null;
    }

    /**
     * Set PayForConversion
     *
     * @return $this
     */
    public function setPayForConversion(?StrategyPayForConversionGetItem $value)
    {
        $this->PayForConversion = $value;

        return $this;
    }

    /**
     * Get AverageCpaPerCampaign
     */
    public function getAverageCpaPerCampaign(): ?StrategyAverageCpaPerCampaignGetItem
    {
        return $this->AverageCpaPerCampaign ?? null;
    }

    /**
     * Set AverageCpaPerCampaign
     *
     * @return $this
     */
    public function setAverageCpaPerCampaign(?StrategyAverageCpaPerCampaignGetItem $value)
    {
        $this->AverageCpaPerCampaign = $value;

        return $this;
    }

    /**
     * Get PayForConversionPerCampaign
     */
    public function getPayForConversionPerCampaign(): ?StrategyPayForConversionPerCampaignGetItem
    {
        return $this->PayForConversionPerCampaign ?? null;
    }

    /**
     * Set PayForConversionPerCampaign
     *
     * @return $this
     */
    public function setPayForConversionPerCampaign(?StrategyPayForConversionPerCampaignGetItem $value)
    {
        $this->PayForConversionPerCampaign = $value;

        return $this;
    }

    /**
     * Get PayForConversionPerFilter
     */
    public function getPayForConversionPerFilter(): ?StrategyPayForConversionPerFilterGetItem
    {
        return $this->PayForConversionPerFilter ?? null;
    }

    /**
     * Set PayForConversionPerFilter
     *
     * @return $this
     */
    public function setPayForConversionPerFilter(?StrategyPayForConversionPerFilterGetItem $value)
    {
        $this->PayForConversionPerFilter = $value;

        return $this;
    }

    /**
     * Get AverageCpaPerFilter
     */
    public function getAverageCpaPerFilter(): ?StrategyAverageCpaPerFilterGetItem
    {
        return $this->AverageCpaPerFilter ?? null;
    }

    /**
     * Set AverageCpaPerFilter
     *
     * @return $this
     */
    public function setAverageCpaPerFilter(?StrategyAverageCpaPerFilterGetItem $value)
    {
        $this->AverageCpaPerFilter = $value;

        return $this;
    }

    /**
     * Get AverageCpcPerCampaign
     */
    public function getAverageCpcPerCampaign(): ?StrategyAverageCpcPerCampaignGetItem
    {
        return $this->AverageCpcPerCampaign ?? null;
    }

    /**
     * Set AverageCpcPerCampaign
     *
     * @return $this
     */
    public function setAverageCpcPerCampaign(?StrategyAverageCpcPerCampaignGetItem $value)
    {
        $this->AverageCpcPerCampaign = $value;

        return $this;
    }

    /**
     * Get AverageCpcPerFilter
     */
    public function getAverageCpcPerFilter(): ?StrategyAverageCpcPerFilterGetItem
    {
        return $this->AverageCpcPerFilter ?? null;
    }

    /**
     * Set AverageCpcPerFilter
     *
     * @return $this
     */
    public function setAverageCpcPerFilter(?StrategyAverageCpcPerFilterGetItem $value)
    {
        $this->AverageCpcPerFilter = $value;

        return $this;
    }

    /**
     * Get AverageCrr
     */
    public function getAverageCrr(): ?StrategyAverageCrrGetItem
    {
        return $this->AverageCrr ?? null;
    }

    /**
     * Set AverageCrr
     *
     * @return $this
     */
    public function setAverageCrr(?StrategyAverageCrrGetItem $value)
    {
        $this->AverageCrr = $value;

        return $this;
    }

    /**
     * Get PayForConversionCrr
     */
    public function getPayForConversionCrr(): ?StrategyPayForConversionCrrGetItem
    {
        return $this->PayForConversionCrr ?? null;
    }

    /**
     * Set PayForConversionCrr
     *
     * @return $this
     */
    public function setPayForConversionCrr(?StrategyPayForConversionCrrGetItem $value)
    {
        $this->PayForConversionCrr = $value;

        return $this;
    }

    /**
     * Get AverageCpaMultipleGoals
     */
    public function getAverageCpaMultipleGoals(): ?StrategyAverageCpaMultipleGoalsGetItem
    {
        return $this->AverageCpaMultipleGoals ?? null;
    }

    /**
     * Set AverageCpaMultipleGoals
     *
     * @return $this
     */
    public function setAverageCpaMultipleGoals(?StrategyAverageCpaMultipleGoalsGetItem $value)
    {
        $this->AverageCpaMultipleGoals = $value;

        return $this;
    }

    /**
     * Get PayForConversionMultipleGoals
     */
    public function getPayForConversionMultipleGoals(): ?StrategyPayForConversionMultipleGoalsGetItem
    {
        return $this->PayForConversionMultipleGoals ?? null;
    }

    /**
     * Set PayForConversionMultipleGoals
     *
     * @return $this
     */
    public function setPayForConversionMultipleGoals(?StrategyPayForConversionMultipleGoalsGetItem $value)
    {
        $this->PayForConversionMultipleGoals = $value;

        return $this;
    }
}
