<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class BidGetItem extends BidActionResult
{
//    Can be omitted.
//    protected $Bid = null;

//    Can be omitted.
//    protected $ContextBid = null;

//    Can be omitted.
//    protected $StrategyPriority = null;

//    Can be omitted.
//    protected $CompetitorsBids = null;

//    Can be omitted.
//    protected $SearchPrices = null;

//    Can be omitted.
//    protected $ContextCoverage = null;

//    Can be omitted.
//    protected $MinSearchPrice = null;

//    Can be omitted.
//    protected $CurrentSearchPrice = null;

//    Can be omitted.
//    protected $AuctionBids = null;

//    Can be omitted.
//    protected $ServingStatus = null;

    public function getBid(): ?int
    {
        return $this->Bid ?? null;
    }

    /**
     * @return $this
     */
    public function setBid(?int $value = null)
    {
        $this->Bid = $value;

        return $this;
    }

    public function getContextBid(): ?int
    {
        return $this->ContextBid ?? null;
    }

    /**
     * @return $this
     */
    public function setContextBid(?int $value = null)
    {
        $this->ContextBid = $value;

        return $this;
    }

    /**
     * @see PriorityEnum
     */
    public function getStrategyPriority(): ?string
    {
        return $this->StrategyPriority ?? null;
    }

    /**
     * @see PriorityEnum
     *
     * @return $this
     */
    public function setStrategyPriority(?string $value = null)
    {
        $this->StrategyPriority = $value;

        return $this;
    }

    /**
     * @return int[]|null
     */
    public function getCompetitorsBids(): ?array
    {
        return $this->CompetitorsBids ?? null;
    }

    /**
     * @param int[]|null $value
     *
     * @return $this
     */
    public function setCompetitorsBids(?array $value = null)
    {
        $this->CompetitorsBids = $value;

        return $this;
    }

    /**
     * @return SearchPrices[]|null
     */
    public function getSearchPrices(): ?array
    {
        return $this->SearchPrices ?? null;
    }

    /**
     * @param SearchPrices[]|null $value
     *
     * @return $this
     */
    public function setSearchPrices(?array $value = null)
    {
        $this->SearchPrices = $value;

        return $this;
    }

    public function getContextCoverage(): ?ContextCoverage
    {
        return $this->ContextCoverage ?? null;
    }

    /**
     * @return $this
     */
    public function setContextCoverage(?ContextCoverage $value = null)
    {
        $this->ContextCoverage = $value;

        return $this;
    }

    public function getMinSearchPrice(): ?int
    {
        return $this->MinSearchPrice ?? null;
    }

    /**
     * @return $this
     */
    public function setMinSearchPrice(?int $value = null)
    {
        $this->MinSearchPrice = $value;

        return $this;
    }

    public function getCurrentSearchPrice(): ?int
    {
        return $this->CurrentSearchPrice ?? null;
    }

    /**
     * @return $this
     */
    public function setCurrentSearchPrice(?int $value = null)
    {
        $this->CurrentSearchPrice = $value;

        return $this;
    }

    /**
     * @return AuctionBidItem[]|null
     */
    public function getAuctionBids(): ?array
    {
        return $this->AuctionBids ?? null;
    }

    /**
     * @param AuctionBidItem[]|null $value
     *
     * @return $this
     */
    public function setAuctionBids(?array $value = null)
    {
        $this->AuctionBids = $value;

        return $this;
    }

    /**
     * @see ServingStatusEnum
     */
    public function getServingStatus(): ?string
    {
        return $this->ServingStatus ?? null;
    }

    /**
     * @see ServingStatusEnum
     *
     * @return $this
     */
    public function setServingStatus(?string $value = null)
    {
        $this->ServingStatus = $value;

        return $this;
    }
}
