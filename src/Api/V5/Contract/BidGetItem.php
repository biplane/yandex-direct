<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;
use Override;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class BidGetItem extends BidActionResult
{
//    Can be omitted.
//    protected $Bid;

//    Can be omitted.
//    protected $AutotargetingSearchBidIsAuto;

//    Can be omitted.
//    protected $ContextBid;

//    Can be omitted.
//    protected $StrategyPriority;

//    Can be omitted.
//    protected $CompetitorsBids;

//    Can be omitted.
//    protected $SearchPrices;

//    Can be omitted.
//    protected $ContextCoverage;

//    Can be omitted.
//    protected $MinSearchPrice;

//    Can be omitted.
//    protected $CurrentSearchPrice;

//    Can be omitted.
//    protected $AuctionBids;

//    Can be omitted.
//    protected $ServingStatus;

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
     * Get Bid
     */
    public function getBid(): ?int
    {
        return $this->Bid ?? null;
    }

    /**
     * Set Bid
     *
     * @return $this
     */
    public function setBid(?int $value)
    {
        $this->Bid = $value;

        return $this;
    }

    /**
     * Get AutotargetingSearchBidIsAuto
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\YesNoEnum
     *
     * @return 'YES'|'NO'|null
     */
    public function getAutotargetingSearchBidIsAuto(): ?string
    {
        return $this->AutotargetingSearchBidIsAuto ?? null;
    }

    /**
     * Set AutotargetingSearchBidIsAuto
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\YesNoEnum
     *
     * @param 'YES'|'NO'|null $value
     *
     * @return $this
     */
    public function setAutotargetingSearchBidIsAuto(?string $value)
    {
        $this->AutotargetingSearchBidIsAuto = $value;

        return $this;
    }

    /**
     * Get ContextBid
     */
    public function getContextBid(): ?int
    {
        return $this->ContextBid ?? null;
    }

    /**
     * Set ContextBid
     *
     * @return $this
     */
    public function setContextBid(?int $value)
    {
        $this->ContextBid = $value;

        return $this;
    }

    /**
     * Get StrategyPriority
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\PriorityEnum
     *
     * @return 'LOW'|'NORMAL'|'HIGH'|null
     */
    public function getStrategyPriority(): ?string
    {
        return $this->StrategyPriority ?? null;
    }

    /**
     * Set StrategyPriority
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\PriorityEnum
     *
     * @param 'LOW'|'NORMAL'|'HIGH'|null $value
     *
     * @return $this
     */
    public function setStrategyPriority(?string $value)
    {
        $this->StrategyPriority = $value;

        return $this;
    }

    /**
     * Get CompetitorsBids
     *
     * @return list<int>
     */
    public function getCompetitorsBids(): array
    {
        return $this->CompetitorsBids ?? [];
    }

    /**
     * Set CompetitorsBids
     *
     * @param list<int> $value
     *
     * @return $this
     */
    public function setCompetitorsBids(array $value)
    {
        $this->CompetitorsBids = $value;

        return $this;
    }

    /**
     * Get SearchPrices
     *
     * @return list<SearchPrices>
     */
    public function getSearchPrices(): array
    {
        return $this->SearchPrices ?? [];
    }

    /**
     * Set SearchPrices
     *
     * @param list<SearchPrices> $value
     *
     * @return $this
     */
    public function setSearchPrices(array $value)
    {
        $this->SearchPrices = $value;

        return $this;
    }

    /**
     * Get ContextCoverage
     */
    public function getContextCoverage(): ?ContextCoverage
    {
        return $this->ContextCoverage ?? null;
    }

    /**
     * Set ContextCoverage
     *
     * @return $this
     */
    public function setContextCoverage(?ContextCoverage $value)
    {
        $this->ContextCoverage = $value;

        return $this;
    }

    /**
     * Get MinSearchPrice
     */
    public function getMinSearchPrice(): ?int
    {
        return $this->MinSearchPrice ?? null;
    }

    /**
     * Set MinSearchPrice
     *
     * @return $this
     */
    public function setMinSearchPrice(?int $value)
    {
        $this->MinSearchPrice = $value;

        return $this;
    }

    /**
     * Get CurrentSearchPrice
     */
    public function getCurrentSearchPrice(): ?int
    {
        return $this->CurrentSearchPrice ?? null;
    }

    /**
     * Set CurrentSearchPrice
     *
     * @return $this
     */
    public function setCurrentSearchPrice(?int $value)
    {
        $this->CurrentSearchPrice = $value;

        return $this;
    }

    /**
     * Get AuctionBids
     *
     * @return list<AuctionBidItem>
     */
    public function getAuctionBids(): array
    {
        return $this->AuctionBids ?? [];
    }

    /**
     * Set AuctionBids
     *
     * @param list<AuctionBidItem> $value
     *
     * @return $this
     */
    public function setAuctionBids(array $value)
    {
        $this->AuctionBids = $value;

        return $this;
    }

    /**
     * Get ServingStatus
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\ServingStatusEnum
     *
     * @return 'ELIGIBLE'|'RARELY_SERVED'|null
     */
    public function getServingStatus(): ?string
    {
        return $this->ServingStatus ?? null;
    }

    /**
     * Set ServingStatus
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\ServingStatusEnum
     *
     * @param 'ELIGIBLE'|'RARELY_SERVED'|null $value
     *
     * @return $this
     */
    public function setServingStatus(?string $value)
    {
        $this->ServingStatus = $value;

        return $this;
    }
}
