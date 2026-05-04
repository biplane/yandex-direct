<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Bids;

use AllowDynamicProperties;
use Biplane\YandexDirect\Api\V5\General\GetRequestGeneral;
use Override;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class GetRequest extends GetRequestGeneral
{
    /** @var BidsSelectionCriteria */
    protected $SelectionCriteria;

    /** @var non-empty-list<'KeywordId'|'AdGroupId'|'CampaignId'|'Bid'|'AutotargetingSearchBidIsAuto'|'ContextBid'|'StrategyPriority'|'CompetitorsBids'|'SearchPrices'|'ContextCoverage'|'MinSearchPrice'|'CurrentSearchPrice'|'AuctionBids'|'ServingStatus'> */
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
    public function getSelectionCriteria(): BidsSelectionCriteria
    {
        return $this->SelectionCriteria;
    }

    /**
     * Set SelectionCriteria
     *
     * @return $this
     */
    public function setSelectionCriteria(BidsSelectionCriteria $value)
    {
        $this->SelectionCriteria = $value;

        return $this;
    }

    /**
     * Get FieldNames
     *
     * @see \Biplane\YandexDirect\Api\V5\Bids\BidFieldEnum
     *
     * @return non-empty-list<'KeywordId'|'AdGroupId'|'CampaignId'|'Bid'|'AutotargetingSearchBidIsAuto'|'ContextBid'|'StrategyPriority'|'CompetitorsBids'|'SearchPrices'|'ContextCoverage'|'MinSearchPrice'|'CurrentSearchPrice'|'AuctionBids'|'ServingStatus'>
     */
    public function getFieldNames(): array
    {
        return $this->FieldNames;
    }

    /**
     * Set FieldNames
     *
     * @see \Biplane\YandexDirect\Api\V5\Bids\BidFieldEnum
     *
     * @param non-empty-list<'KeywordId'|'AdGroupId'|'CampaignId'|'Bid'|'AutotargetingSearchBidIsAuto'|'ContextBid'|'StrategyPriority'|'CompetitorsBids'|'SearchPrices'|'ContextCoverage'|'MinSearchPrice'|'CurrentSearchPrice'|'AuctionBids'|'ServingStatus'> $value
     *
     * @return $this
     */
    public function setFieldNames(array $value)
    {
        $this->FieldNames = $value;

        return $this;
    }
}
