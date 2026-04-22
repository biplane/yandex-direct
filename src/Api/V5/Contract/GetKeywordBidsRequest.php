<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;
use Override;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class GetKeywordBidsRequest extends GetRequestGeneral
{
    /** @var KeywordBidsSelectionCriteria */
    protected $SelectionCriteria;

    /** @var non-empty-list<'KeywordId'|'AdGroupId'|'CampaignId'|'ServingStatus'|'StrategyPriority'> */
    protected $FieldNames;

//    Can be omitted.
//    protected $SearchFieldNames;

//    Can be omitted.
//    protected $NetworkFieldNames;

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
    public function getSelectionCriteria(): KeywordBidsSelectionCriteria
    {
        return $this->SelectionCriteria;
    }

    /**
     * Set SelectionCriteria
     *
     * @return $this
     */
    public function setSelectionCriteria(KeywordBidsSelectionCriteria $value)
    {
        $this->SelectionCriteria = $value;

        return $this;
    }

    /**
     * Get FieldNames
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\KeywordBidFieldEnum
     *
     * @return non-empty-list<'KeywordId'|'AdGroupId'|'CampaignId'|'ServingStatus'|'StrategyPriority'>
     */
    public function getFieldNames(): array
    {
        return $this->FieldNames;
    }

    /**
     * Set FieldNames
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\KeywordBidFieldEnum
     *
     * @param non-empty-list<'KeywordId'|'AdGroupId'|'CampaignId'|'ServingStatus'|'StrategyPriority'> $value
     *
     * @return $this
     */
    public function setFieldNames(array $value)
    {
        $this->FieldNames = $value;

        return $this;
    }

    /**
     * Get SearchFieldNames
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\KeywordBidSearchFieldEnum
     *
     * @return list<'Bid'|'AutotargetingSearchBidIsAuto'|'AuctionBids'>
     */
    public function getSearchFieldNames(): array
    {
        return $this->SearchFieldNames ?? [];
    }

    /**
     * Set SearchFieldNames
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\KeywordBidSearchFieldEnum
     *
     * @param list<'Bid'|'AutotargetingSearchBidIsAuto'|'AuctionBids'> $value
     *
     * @return $this
     */
    public function setSearchFieldNames(array $value)
    {
        $this->SearchFieldNames = $value;

        return $this;
    }

    /**
     * Get NetworkFieldNames
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\KeywordBidNetworkFieldEnum
     *
     * @return list<'Bid'|'Coverage'>
     */
    public function getNetworkFieldNames(): array
    {
        return $this->NetworkFieldNames ?? [];
    }

    /**
     * Set NetworkFieldNames
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\KeywordBidNetworkFieldEnum
     *
     * @param list<'Bid'|'Coverage'> $value
     *
     * @return $this
     */
    public function setNetworkFieldNames(array $value)
    {
        $this->NetworkFieldNames = $value;

        return $this;
    }
}
