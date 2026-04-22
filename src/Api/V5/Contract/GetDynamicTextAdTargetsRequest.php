<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;
use Override;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class GetDynamicTextAdTargetsRequest extends GetRequestGeneral
{
    /** @var AdTargetsSelectionCriteria */
    protected $SelectionCriteria;

    /** @var non-empty-list<'AdGroupId'|'Bid'|'CampaignId'|'Conditions'|'ConditionType'|'ContextBid'|'Id'|'Name'|'State'|'StatusClarification'|'StrategyPriority'> */
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
     * @see \Biplane\YandexDirect\Api\V5\Contract\WebpageFieldEnum
     *
     * @return non-empty-list<'AdGroupId'|'Bid'|'CampaignId'|'Conditions'|'ConditionType'|'ContextBid'|'Id'|'Name'|'State'|'StatusClarification'|'StrategyPriority'>
     */
    public function getFieldNames(): array
    {
        return $this->FieldNames;
    }

    /**
     * Set FieldNames
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\WebpageFieldEnum
     *
     * @param non-empty-list<'AdGroupId'|'Bid'|'CampaignId'|'Conditions'|'ConditionType'|'ContextBid'|'Id'|'Name'|'State'|'StatusClarification'|'StrategyPriority'> $value
     *
     * @return $this
     */
    public function setFieldNames(array $value)
    {
        $this->FieldNames = $value;

        return $this;
    }
}
