<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\AudienceTargets;

use AllowDynamicProperties;
use Biplane\YandexDirect\Api\V5\General\GetRequestGeneral;
use Override;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class GetRequest extends GetRequestGeneral
{
    /** @var AudienceTargetSelectionCriteria */
    protected $SelectionCriteria;

    /** @var non-empty-list<'Id'|'AdGroupId'|'CampaignId'|'RetargetingListId'|'InterestId'|'ContextBid'|'StrategyPriority'|'State'> */
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
    public function getSelectionCriteria(): AudienceTargetSelectionCriteria
    {
        return $this->SelectionCriteria;
    }

    /**
     * Set SelectionCriteria
     *
     * @return $this
     */
    public function setSelectionCriteria(AudienceTargetSelectionCriteria $value)
    {
        $this->SelectionCriteria = $value;

        return $this;
    }

    /**
     * Get FieldNames
     *
     * @see \Biplane\YandexDirect\Api\V5\AudienceTargets\AudienceTargetFieldEnum
     *
     * @return non-empty-list<'Id'|'AdGroupId'|'CampaignId'|'RetargetingListId'|'InterestId'|'ContextBid'|'StrategyPriority'|'State'>
     */
    public function getFieldNames(): array
    {
        return $this->FieldNames;
    }

    /**
     * Set FieldNames
     *
     * @see \Biplane\YandexDirect\Api\V5\AudienceTargets\AudienceTargetFieldEnum
     *
     * @param non-empty-list<'Id'|'AdGroupId'|'CampaignId'|'RetargetingListId'|'InterestId'|'ContextBid'|'StrategyPriority'|'State'> $value
     *
     * @return $this
     */
    public function setFieldNames(array $value)
    {
        $this->FieldNames = $value;

        return $this;
    }
}
