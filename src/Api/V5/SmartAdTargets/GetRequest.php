<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\SmartAdTargets;

use AllowDynamicProperties;
use Biplane\YandexDirect\Api\V5\General\AdTargetsSelectionCriteria;
use Biplane\YandexDirect\Api\V5\General\GetRequestGeneral;
use Override;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class GetRequest extends GetRequestGeneral
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
    #[Override]
    public static function create(): static
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
     * @see \Biplane\YandexDirect\Api\V5\SmartAdTargets\SmartAdTargetFieldEnum
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
     * @see \Biplane\YandexDirect\Api\V5\SmartAdTargets\SmartAdTargetFieldEnum
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
