<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Strategies;

use AllowDynamicProperties;
use Biplane\YandexDirect\Api\V5\General\GetRequestGeneral;
use Override;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class GetRequest extends GetRequestGeneral
{
    /** @var StrategiesSelectionCriteria */
    protected $SelectionCriteria;

    /** @var non-empty-list<'Id'|'AttributionModel'|'CounterIds'|'PriorityGoals'|'Type'|'Name'|'StatusArchived'> */
    protected $FieldNames;

//    Can be omitted.
//    protected $StrategyMaximumClicksFieldNames;

//    Can be omitted.
//    protected $StrategyMaximumConversionRateFieldNames;

//    Can be omitted.
//    protected $StrategyAverageCpcFieldNames;

//    Can be omitted.
//    protected $StrategyAverageCpaFieldNames;

//    Can be omitted.
//    protected $StrategyMaxProfitFieldNames;

//    Can be omitted.
//    protected $StrategyPayForConversionFieldNames;

//    Can be omitted.
//    protected $StrategyAverageCpaPerCampaignFieldNames;

//    Can be omitted.
//    protected $StrategyPayForConversionPerCampaignFieldNames;

//    Can be omitted.
//    protected $StrategyPayForConversionPerFilterFieldNames;

//    Can be omitted.
//    protected $StrategyAverageCpaPerFilterFieldNames;

//    Can be omitted.
//    protected $StrategyAverageCpcPerCampaignFieldNames;

//    Can be omitted.
//    protected $StrategyAverageCpcPerFilterFieldNames;

//    Can be omitted.
//    protected $StrategyAverageCrrFieldNames;

//    Can be omitted.
//    protected $StrategyPayForConversionCrrFieldNames;

//    Can be omitted.
//    protected $StrategyAverageCpaMultipleGoalsFieldNames;

//    Can be omitted.
//    protected $StrategyPayForConversionMultipleGoalsFieldNames;

    /**
     * Create a new instance.
     *
     * @return static
     */
    #[Override]
    public static function create(): static
    {
        return new static();
    }

    /**
     * Get SelectionCriteria
     */
    public function getSelectionCriteria(): StrategiesSelectionCriteria
    {
        return $this->SelectionCriteria;
    }

    /**
     * Set SelectionCriteria
     *
     * @return $this
     */
    public function setSelectionCriteria(StrategiesSelectionCriteria $value)
    {
        $this->SelectionCriteria = $value;

        return $this;
    }

    /**
     * Get FieldNames
     *
     * @see \Biplane\YandexDirect\Api\V5\Strategies\StrategyFieldEnum
     *
     * @return non-empty-list<'Id'|'AttributionModel'|'CounterIds'|'PriorityGoals'|'Type'|'Name'|'StatusArchived'>
     */
    public function getFieldNames(): array
    {
        return $this->FieldNames;
    }

    /**
     * Set FieldNames
     *
     * @see \Biplane\YandexDirect\Api\V5\Strategies\StrategyFieldEnum
     *
     * @param non-empty-list<'Id'|'AttributionModel'|'CounterIds'|'PriorityGoals'|'Type'|'Name'|'StatusArchived'> $value
     *
     * @return $this
     */
    public function setFieldNames(array $value)
    {
        $this->FieldNames = $value;

        return $this;
    }

    /**
     * Get StrategyMaximumClicksFieldNames
     *
     * @see \Biplane\YandexDirect\Api\V5\Strategies\StrategyMaximumClicksFieldEnum
     *
     * @return list<'WeeklySpendLimit'|'CustomPeriodBudget'|'BudgetType'|'BidCeiling'>
     */
    public function getStrategyMaximumClicksFieldNames(): array
    {
        return $this->StrategyMaximumClicksFieldNames ?? [];
    }

    /**
     * Set StrategyMaximumClicksFieldNames
     *
     * @see \Biplane\YandexDirect\Api\V5\Strategies\StrategyMaximumClicksFieldEnum
     *
     * @param list<'WeeklySpendLimit'|'CustomPeriodBudget'|'BudgetType'|'BidCeiling'> $value
     *
     * @return $this
     */
    public function setStrategyMaximumClicksFieldNames(array $value)
    {
        $this->StrategyMaximumClicksFieldNames = $value;

        return $this;
    }

    /**
     * Get StrategyMaximumConversionRateFieldNames
     *
     * @see \Biplane\YandexDirect\Api\V5\Strategies\StrategyMaximumConversionRateFieldEnum
     *
     * @return list<'WeeklySpendLimit'|'CustomPeriodBudget'|'BudgetType'|'BidCeiling'|'GoalId'>
     */
    public function getStrategyMaximumConversionRateFieldNames(): array
    {
        return $this->StrategyMaximumConversionRateFieldNames ?? [];
    }

    /**
     * Set StrategyMaximumConversionRateFieldNames
     *
     * @see \Biplane\YandexDirect\Api\V5\Strategies\StrategyMaximumConversionRateFieldEnum
     *
     * @param list<'WeeklySpendLimit'|'CustomPeriodBudget'|'BudgetType'|'BidCeiling'|'GoalId'> $value
     *
     * @return $this
     */
    public function setStrategyMaximumConversionRateFieldNames(array $value)
    {
        $this->StrategyMaximumConversionRateFieldNames = $value;

        return $this;
    }

    /**
     * Get StrategyAverageCpcFieldNames
     *
     * @see \Biplane\YandexDirect\Api\V5\Strategies\StrategyAverageCpcFieldEnum
     *
     * @return list<'AverageCpc'|'WeeklySpendLimit'|'CustomPeriodBudget'|'BudgetType'>
     */
    public function getStrategyAverageCpcFieldNames(): array
    {
        return $this->StrategyAverageCpcFieldNames ?? [];
    }

    /**
     * Set StrategyAverageCpcFieldNames
     *
     * @see \Biplane\YandexDirect\Api\V5\Strategies\StrategyAverageCpcFieldEnum
     *
     * @param list<'AverageCpc'|'WeeklySpendLimit'|'CustomPeriodBudget'|'BudgetType'> $value
     *
     * @return $this
     */
    public function setStrategyAverageCpcFieldNames(array $value)
    {
        $this->StrategyAverageCpcFieldNames = $value;

        return $this;
    }

    /**
     * Get StrategyAverageCpaFieldNames
     *
     * @see \Biplane\YandexDirect\Api\V5\Strategies\StrategyAverageCpaFieldEnum
     *
     * @return list<'AverageCpa'|'GoalId'|'WeeklySpendLimit'|'CustomPeriodBudget'|'BudgetType'|'BidCeiling'|'ExplorationBudget'>
     */
    public function getStrategyAverageCpaFieldNames(): array
    {
        return $this->StrategyAverageCpaFieldNames ?? [];
    }

    /**
     * Set StrategyAverageCpaFieldNames
     *
     * @see \Biplane\YandexDirect\Api\V5\Strategies\StrategyAverageCpaFieldEnum
     *
     * @param list<'AverageCpa'|'GoalId'|'WeeklySpendLimit'|'CustomPeriodBudget'|'BudgetType'|'BidCeiling'|'ExplorationBudget'> $value
     *
     * @return $this
     */
    public function setStrategyAverageCpaFieldNames(array $value)
    {
        $this->StrategyAverageCpaFieldNames = $value;

        return $this;
    }

    /**
     * Get StrategyMaxProfitFieldNames
     *
     * @see \Biplane\YandexDirect\Api\V5\Strategies\StrategyMaxProfitFieldEnum
     *
     * @return list<'WeeklySpendLimit'|'CustomPeriodBudget'|'BudgetType'|'ExplorationBudget'>
     */
    public function getStrategyMaxProfitFieldNames(): array
    {
        return $this->StrategyMaxProfitFieldNames ?? [];
    }

    /**
     * Set StrategyMaxProfitFieldNames
     *
     * @see \Biplane\YandexDirect\Api\V5\Strategies\StrategyMaxProfitFieldEnum
     *
     * @param list<'WeeklySpendLimit'|'CustomPeriodBudget'|'BudgetType'|'ExplorationBudget'> $value
     *
     * @return $this
     */
    public function setStrategyMaxProfitFieldNames(array $value)
    {
        $this->StrategyMaxProfitFieldNames = $value;

        return $this;
    }

    /**
     * Get StrategyPayForConversionFieldNames
     *
     * @see \Biplane\YandexDirect\Api\V5\Strategies\StrategyPayForConversionFieldEnum
     *
     * @return list<'Cpa'|'GoalId'|'WeeklySpendLimit'|'CustomPeriodBudget'|'BudgetType'>
     */
    public function getStrategyPayForConversionFieldNames(): array
    {
        return $this->StrategyPayForConversionFieldNames ?? [];
    }

    /**
     * Set StrategyPayForConversionFieldNames
     *
     * @see \Biplane\YandexDirect\Api\V5\Strategies\StrategyPayForConversionFieldEnum
     *
     * @param list<'Cpa'|'GoalId'|'WeeklySpendLimit'|'CustomPeriodBudget'|'BudgetType'> $value
     *
     * @return $this
     */
    public function setStrategyPayForConversionFieldNames(array $value)
    {
        $this->StrategyPayForConversionFieldNames = $value;

        return $this;
    }

    /**
     * Get StrategyAverageCpaPerCampaignFieldNames
     *
     * @see \Biplane\YandexDirect\Api\V5\Strategies\StrategyAverageCpaPerCampaignFieldEnum
     *
     * @return list<'AverageCpa'|'GoalId'|'WeeklySpendLimit'|'CustomPeriodBudget'|'BudgetType'|'BidCeiling'|'ExplorationBudget'>
     */
    public function getStrategyAverageCpaPerCampaignFieldNames(): array
    {
        return $this->StrategyAverageCpaPerCampaignFieldNames ?? [];
    }

    /**
     * Set StrategyAverageCpaPerCampaignFieldNames
     *
     * @see \Biplane\YandexDirect\Api\V5\Strategies\StrategyAverageCpaPerCampaignFieldEnum
     *
     * @param list<'AverageCpa'|'GoalId'|'WeeklySpendLimit'|'CustomPeriodBudget'|'BudgetType'|'BidCeiling'|'ExplorationBudget'> $value
     *
     * @return $this
     */
    public function setStrategyAverageCpaPerCampaignFieldNames(array $value)
    {
        $this->StrategyAverageCpaPerCampaignFieldNames = $value;

        return $this;
    }

    /**
     * Get StrategyPayForConversionPerCampaignFieldNames
     *
     * @see \Biplane\YandexDirect\Api\V5\Strategies\StrategyPayForConversionPerCampaignFieldEnum
     *
     * @return list<'Cpa'|'GoalId'|'WeeklySpendLimit'|'CustomPeriodBudget'|'BudgetType'>
     */
    public function getStrategyPayForConversionPerCampaignFieldNames(): array
    {
        return $this->StrategyPayForConversionPerCampaignFieldNames ?? [];
    }

    /**
     * Set StrategyPayForConversionPerCampaignFieldNames
     *
     * @see \Biplane\YandexDirect\Api\V5\Strategies\StrategyPayForConversionPerCampaignFieldEnum
     *
     * @param list<'Cpa'|'GoalId'|'WeeklySpendLimit'|'CustomPeriodBudget'|'BudgetType'> $value
     *
     * @return $this
     */
    public function setStrategyPayForConversionPerCampaignFieldNames(array $value)
    {
        $this->StrategyPayForConversionPerCampaignFieldNames = $value;

        return $this;
    }

    /**
     * Get StrategyPayForConversionPerFilterFieldNames
     *
     * @see \Biplane\YandexDirect\Api\V5\Strategies\StrategyPayForConversionPerFilterFieldEnum
     *
     * @return list<'Cpa'|'GoalId'|'WeeklySpendLimit'|'CustomPeriodBudget'|'BudgetType'>
     */
    public function getStrategyPayForConversionPerFilterFieldNames(): array
    {
        return $this->StrategyPayForConversionPerFilterFieldNames ?? [];
    }

    /**
     * Set StrategyPayForConversionPerFilterFieldNames
     *
     * @see \Biplane\YandexDirect\Api\V5\Strategies\StrategyPayForConversionPerFilterFieldEnum
     *
     * @param list<'Cpa'|'GoalId'|'WeeklySpendLimit'|'CustomPeriodBudget'|'BudgetType'> $value
     *
     * @return $this
     */
    public function setStrategyPayForConversionPerFilterFieldNames(array $value)
    {
        $this->StrategyPayForConversionPerFilterFieldNames = $value;

        return $this;
    }

    /**
     * Get StrategyAverageCpaPerFilterFieldNames
     *
     * @see \Biplane\YandexDirect\Api\V5\Strategies\StrategyAverageCpaPerFilterFieldEnum
     *
     * @return list<'FilterAverageCpa'|'GoalId'|'WeeklySpendLimit'|'CustomPeriodBudget'|'BudgetType'|'BidCeiling'|'ExplorationBudget'>
     */
    public function getStrategyAverageCpaPerFilterFieldNames(): array
    {
        return $this->StrategyAverageCpaPerFilterFieldNames ?? [];
    }

    /**
     * Set StrategyAverageCpaPerFilterFieldNames
     *
     * @see \Biplane\YandexDirect\Api\V5\Strategies\StrategyAverageCpaPerFilterFieldEnum
     *
     * @param list<'FilterAverageCpa'|'GoalId'|'WeeklySpendLimit'|'CustomPeriodBudget'|'BudgetType'|'BidCeiling'|'ExplorationBudget'> $value
     *
     * @return $this
     */
    public function setStrategyAverageCpaPerFilterFieldNames(array $value)
    {
        $this->StrategyAverageCpaPerFilterFieldNames = $value;

        return $this;
    }

    /**
     * Get StrategyAverageCpcPerCampaignFieldNames
     *
     * @see \Biplane\YandexDirect\Api\V5\Strategies\StrategyAverageCpcPerCampaignFieldEnum
     *
     * @return list<'AverageCpc'|'WeeklySpendLimit'|'CustomPeriodBudget'|'BudgetType'|'BidCeiling'>
     */
    public function getStrategyAverageCpcPerCampaignFieldNames(): array
    {
        return $this->StrategyAverageCpcPerCampaignFieldNames ?? [];
    }

    /**
     * Set StrategyAverageCpcPerCampaignFieldNames
     *
     * @see \Biplane\YandexDirect\Api\V5\Strategies\StrategyAverageCpcPerCampaignFieldEnum
     *
     * @param list<'AverageCpc'|'WeeklySpendLimit'|'CustomPeriodBudget'|'BudgetType'|'BidCeiling'> $value
     *
     * @return $this
     */
    public function setStrategyAverageCpcPerCampaignFieldNames(array $value)
    {
        $this->StrategyAverageCpcPerCampaignFieldNames = $value;

        return $this;
    }

    /**
     * Get StrategyAverageCpcPerFilterFieldNames
     *
     * @see \Biplane\YandexDirect\Api\V5\Strategies\StrategyAverageCpcPerFilterFieldEnum
     *
     * @return list<'FilterAverageCpc'|'WeeklySpendLimit'|'CustomPeriodBudget'|'BudgetType'|'BidCeiling'>
     */
    public function getStrategyAverageCpcPerFilterFieldNames(): array
    {
        return $this->StrategyAverageCpcPerFilterFieldNames ?? [];
    }

    /**
     * Set StrategyAverageCpcPerFilterFieldNames
     *
     * @see \Biplane\YandexDirect\Api\V5\Strategies\StrategyAverageCpcPerFilterFieldEnum
     *
     * @param list<'FilterAverageCpc'|'WeeklySpendLimit'|'CustomPeriodBudget'|'BudgetType'|'BidCeiling'> $value
     *
     * @return $this
     */
    public function setStrategyAverageCpcPerFilterFieldNames(array $value)
    {
        $this->StrategyAverageCpcPerFilterFieldNames = $value;

        return $this;
    }

    /**
     * Get StrategyAverageCrrFieldNames
     *
     * @see \Biplane\YandexDirect\Api\V5\Strategies\StrategyAverageCrrFieldEnum
     *
     * @return list<'Crr'|'GoalId'|'WeeklySpendLimit'|'CustomPeriodBudget'|'BudgetType'|'ExplorationBudget'>
     */
    public function getStrategyAverageCrrFieldNames(): array
    {
        return $this->StrategyAverageCrrFieldNames ?? [];
    }

    /**
     * Set StrategyAverageCrrFieldNames
     *
     * @see \Biplane\YandexDirect\Api\V5\Strategies\StrategyAverageCrrFieldEnum
     *
     * @param list<'Crr'|'GoalId'|'WeeklySpendLimit'|'CustomPeriodBudget'|'BudgetType'|'ExplorationBudget'> $value
     *
     * @return $this
     */
    public function setStrategyAverageCrrFieldNames(array $value)
    {
        $this->StrategyAverageCrrFieldNames = $value;

        return $this;
    }

    /**
     * Get StrategyPayForConversionCrrFieldNames
     *
     * @see \Biplane\YandexDirect\Api\V5\Strategies\StrategyPayForConversionCrrFieldEnum
     *
     * @return list<'Crr'|'GoalId'|'WeeklySpendLimit'|'CustomPeriodBudget'|'BudgetType'>
     */
    public function getStrategyPayForConversionCrrFieldNames(): array
    {
        return $this->StrategyPayForConversionCrrFieldNames ?? [];
    }

    /**
     * Set StrategyPayForConversionCrrFieldNames
     *
     * @see \Biplane\YandexDirect\Api\V5\Strategies\StrategyPayForConversionCrrFieldEnum
     *
     * @param list<'Crr'|'GoalId'|'WeeklySpendLimit'|'CustomPeriodBudget'|'BudgetType'> $value
     *
     * @return $this
     */
    public function setStrategyPayForConversionCrrFieldNames(array $value)
    {
        $this->StrategyPayForConversionCrrFieldNames = $value;

        return $this;
    }

    /**
     * Get StrategyAverageCpaMultipleGoalsFieldNames
     *
     * @see \Biplane\YandexDirect\Api\V5\Strategies\StrategyAverageCpaMultipleGoalsFieldEnum
     *
     * @return list<'WeeklySpendLimit'|'CustomPeriodBudget'|'BudgetType'|'ExplorationBudget'|'BidCeiling'>
     */
    public function getStrategyAverageCpaMultipleGoalsFieldNames(): array
    {
        return $this->StrategyAverageCpaMultipleGoalsFieldNames ?? [];
    }

    /**
     * Set StrategyAverageCpaMultipleGoalsFieldNames
     *
     * @see \Biplane\YandexDirect\Api\V5\Strategies\StrategyAverageCpaMultipleGoalsFieldEnum
     *
     * @param list<'WeeklySpendLimit'|'CustomPeriodBudget'|'BudgetType'|'ExplorationBudget'|'BidCeiling'> $value
     *
     * @return $this
     */
    public function setStrategyAverageCpaMultipleGoalsFieldNames(array $value)
    {
        $this->StrategyAverageCpaMultipleGoalsFieldNames = $value;

        return $this;
    }

    /**
     * Get StrategyPayForConversionMultipleGoalsFieldNames
     *
     * @see \Biplane\YandexDirect\Api\V5\Strategies\StrategyPayForConversionMultipleGoalsFieldEnum
     *
     * @return list<'WeeklySpendLimit'|'CustomPeriodBudget'|'BudgetType'>
     */
    public function getStrategyPayForConversionMultipleGoalsFieldNames(): array
    {
        return $this->StrategyPayForConversionMultipleGoalsFieldNames ?? [];
    }

    /**
     * Set StrategyPayForConversionMultipleGoalsFieldNames
     *
     * @see \Biplane\YandexDirect\Api\V5\Strategies\StrategyPayForConversionMultipleGoalsFieldEnum
     *
     * @param list<'WeeklySpendLimit'|'CustomPeriodBudget'|'BudgetType'> $value
     *
     * @return $this
     */
    public function setStrategyPayForConversionMultipleGoalsFieldNames(array $value)
    {
        $this->StrategyPayForConversionMultipleGoalsFieldNames = $value;

        return $this;
    }
}
