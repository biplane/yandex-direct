<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class GetSmartAdTargetsRequest extends GetRequestGeneral
{
    /** @var AdTargetsSelectionCriteria */
    protected $SelectionCriteria;

    /** @var non-empty-list<'Id'|'AdGroupId'|'CampaignId'|'Name'|'AverageCpc'|'AverageCpa'|'StrategyPriority'|'Conditions'|'ConditionType'|'State'|'Audience'|'AvailableItemsOnly'> */
    protected $FieldNames;

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
     * Get SelectionCriteria
     */
    public function getSelectionCriteria(): AdTargetsSelectionCriteria
    {
        return $this->SelectionCriteria;
    }

    /**
     * Set SelectionCriteria
     *
     * @return $this
     */
    public function setSelectionCriteria(AdTargetsSelectionCriteria $value)
    {
        $this->SelectionCriteria = $value;

        return $this;
    }

    /**
     * Get FieldNames
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\SmartAdTargetFieldEnum
     *
     * @return non-empty-list<'Id'|'AdGroupId'|'CampaignId'|'Name'|'AverageCpc'|'AverageCpa'|'StrategyPriority'|'Conditions'|'ConditionType'|'State'|'Audience'|'AvailableItemsOnly'>
     */
    public function getFieldNames(): array
    {
        return $this->FieldNames;
    }

    /**
     * Set FieldNames
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\SmartAdTargetFieldEnum
     *
     * @param non-empty-list<'Id'|'AdGroupId'|'CampaignId'|'Name'|'AverageCpc'|'AverageCpa'|'StrategyPriority'|'Conditions'|'ConditionType'|'State'|'Audience'|'AvailableItemsOnly'> $value
     *
     * @return $this
     */
    public function setFieldNames(array $value)
    {
        $this->FieldNames = $value;

        return $this;
    }
}
