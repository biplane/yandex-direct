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
    /** @var int */
    protected $Id;

//    Can be omitted.
//    protected $AttributionModel;

//    Can be omitted.
//    protected $Name;

//    Can be omitted.
//    protected $CounterIds;

//    Can be omitted.
//    protected $PriorityGoals;

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
    public static function create()
    {
        return new static();
    }

    /**
     * Get Id
     */
    public function getId(): int
    {
        return $this->Id;
    }

    /**
     * Set Id
     *
     * @return $this
     */
    public function setId(int $value)
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
     * Get WbMaximumClicks
     */
    public function getWbMaximumClicks(): ?StrategyMaximumClicksUpdateItem
    {
        return $this->WbMaximumClicks ?? null;
    }

    /**
     * Set WbMaximumClicks
     *
     * @return $this
     */
    public function setWbMaximumClicks(?StrategyMaximumClicksUpdateItem $value)
    {
        $this->WbMaximumClicks = $value;

        return $this;
    }

    /**
     * Get WbMaximumConversionRate
     */
    public function getWbMaximumConversionRate(): ?StrategyMaximumConversionRateUpdateItem
    {
        return $this->WbMaximumConversionRate ?? null;
    }

    /**
     * Set WbMaximumConversionRate
     *
     * @return $this
     */
    public function setWbMaximumConversionRate(?StrategyMaximumConversionRateUpdateItem $value)
    {
        $this->WbMaximumConversionRate = $value;

        return $this;
    }

    /**
     * Get AverageCpc
     */
    public function getAverageCpc(): ?StrategyAverageCpcUpdateItem
    {
        return $this->AverageCpc ?? null;
    }

    /**
     * Set AverageCpc
     *
     * @return $this
     */
    public function setAverageCpc(?StrategyAverageCpcUpdateItem $value)
    {
        $this->AverageCpc = $value;

        return $this;
    }

    /**
     * Get AverageCpa
     */
    public function getAverageCpa(): ?StrategyAverageCpaUpdateItem
    {
        return $this->AverageCpa ?? null;
    }

    /**
     * Set AverageCpa
     *
     * @return $this
     */
    public function setAverageCpa(?StrategyAverageCpaUpdateItem $value)
    {
        $this->AverageCpa = $value;

        return $this;
    }

    /**
     * Get MaxProfit
     */
    public function getMaxProfit(): ?StrategyMaxProfitUpdateItem
    {
        return $this->MaxProfit ?? null;
    }

    /**
     * Set MaxProfit
     *
     * @return $this
     */
    public function setMaxProfit(?StrategyMaxProfitUpdateItem $value)
    {
        $this->MaxProfit = $value;

        return $this;
    }

    /**
     * Get PayForConversion
     */
    public function getPayForConversion(): ?StrategyPayForConversionUpdateItem
    {
        return $this->PayForConversion ?? null;
    }

    /**
     * Set PayForConversion
     *
     * @return $this
     */
    public function setPayForConversion(?StrategyPayForConversionUpdateItem $value)
    {
        $this->PayForConversion = $value;

        return $this;
    }

    /**
     * Get AverageCpaPerCampaign
     */
    public function getAverageCpaPerCampaign(): ?StrategyAverageCpaPerCampaignUpdateItem
    {
        return $this->AverageCpaPerCampaign ?? null;
    }

    /**
     * Set AverageCpaPerCampaign
     *
     * @return $this
     */
    public function setAverageCpaPerCampaign(?StrategyAverageCpaPerCampaignUpdateItem $value)
    {
        $this->AverageCpaPerCampaign = $value;

        return $this;
    }

    /**
     * Get PayForConversionPerCampaign
     */
    public function getPayForConversionPerCampaign(): ?StrategyPayForConversionPerCampaignUpdateItem
    {
        return $this->PayForConversionPerCampaign ?? null;
    }

    /**
     * Set PayForConversionPerCampaign
     *
     * @return $this
     */
    public function setPayForConversionPerCampaign(?StrategyPayForConversionPerCampaignUpdateItem $value)
    {
        $this->PayForConversionPerCampaign = $value;

        return $this;
    }

    /**
     * Get PayForConversionPerFilter
     */
    public function getPayForConversionPerFilter(): ?StrategyPayForConversionPerFilterUpdateItem
    {
        return $this->PayForConversionPerFilter ?? null;
    }

    /**
     * Set PayForConversionPerFilter
     *
     * @return $this
     */
    public function setPayForConversionPerFilter(?StrategyPayForConversionPerFilterUpdateItem $value)
    {
        $this->PayForConversionPerFilter = $value;

        return $this;
    }

    /**
     * Get AverageCpaPerFilter
     */
    public function getAverageCpaPerFilter(): ?StrategyAverageCpaPerFilterUpdateItem
    {
        return $this->AverageCpaPerFilter ?? null;
    }

    /**
     * Set AverageCpaPerFilter
     *
     * @return $this
     */
    public function setAverageCpaPerFilter(?StrategyAverageCpaPerFilterUpdateItem $value)
    {
        $this->AverageCpaPerFilter = $value;

        return $this;
    }

    /**
     * Get AverageCpcPerCampaign
     */
    public function getAverageCpcPerCampaign(): ?StrategyAverageCpcPerCampaignUpdateItem
    {
        return $this->AverageCpcPerCampaign ?? null;
    }

    /**
     * Set AverageCpcPerCampaign
     *
     * @return $this
     */
    public function setAverageCpcPerCampaign(?StrategyAverageCpcPerCampaignUpdateItem $value)
    {
        $this->AverageCpcPerCampaign = $value;

        return $this;
    }

    /**
     * Get AverageCpcPerFilter
     */
    public function getAverageCpcPerFilter(): ?StrategyAverageCpcPerFilterUpdateItem
    {
        return $this->AverageCpcPerFilter ?? null;
    }

    /**
     * Set AverageCpcPerFilter
     *
     * @return $this
     */
    public function setAverageCpcPerFilter(?StrategyAverageCpcPerFilterUpdateItem $value)
    {
        $this->AverageCpcPerFilter = $value;

        return $this;
    }

    /**
     * Get AverageCrr
     */
    public function getAverageCrr(): ?StrategyAverageCrrUpdateItem
    {
        return $this->AverageCrr ?? null;
    }

    /**
     * Set AverageCrr
     *
     * @return $this
     */
    public function setAverageCrr(?StrategyAverageCrrUpdateItem $value)
    {
        $this->AverageCrr = $value;

        return $this;
    }

    /**
     * Get PayForConversionCrr
     */
    public function getPayForConversionCrr(): ?StrategyPayForConversionCrrUpdateItem
    {
        return $this->PayForConversionCrr ?? null;
    }

    /**
     * Set PayForConversionCrr
     *
     * @return $this
     */
    public function setPayForConversionCrr(?StrategyPayForConversionCrrUpdateItem $value)
    {
        $this->PayForConversionCrr = $value;

        return $this;
    }

    /**
     * Get AverageCpaMultipleGoals
     */
    public function getAverageCpaMultipleGoals(): ?StrategyAverageCpaMultipleGoalsUpdateItem
    {
        return $this->AverageCpaMultipleGoals ?? null;
    }

    /**
     * Set AverageCpaMultipleGoals
     *
     * @return $this
     */
    public function setAverageCpaMultipleGoals(?StrategyAverageCpaMultipleGoalsUpdateItem $value)
    {
        $this->AverageCpaMultipleGoals = $value;

        return $this;
    }

    /**
     * Get PayForConversionMultipleGoals
     */
    public function getPayForConversionMultipleGoals(): ?StrategyPayForConversionMultipleGoalsUpdateItem
    {
        return $this->PayForConversionMultipleGoals ?? null;
    }

    /**
     * Set PayForConversionMultipleGoals
     *
     * @return $this
     */
    public function setPayForConversionMultipleGoals(?StrategyPayForConversionMultipleGoalsUpdateItem $value)
    {
        $this->PayForConversionMultipleGoals = $value;

        return $this;
    }
}
