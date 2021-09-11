<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class BidGetItem extends BidActionResult
{
//    Can be omit.
//    protected $Bid = null;

//    Can be omit.
//    protected $ContextBid = null;

//    Can be omit.
//    protected $StrategyPriority = null;

//    Can be omit.
//    protected $CompetitorsBids = null;

//    Can be omit.
//    protected $SearchPrices = null;

//    Can be omit.
//    protected $ContextCoverage = null;

//    Can be omit.
//    protected $MinSearchPrice = null;

//    Can be omit.
//    protected $CurrentSearchPrice = null;

//    Can be omit.
//    protected $AuctionBids = null;

//    Can be omit.
//    protected $ServingStatus = null;

    /**
     * Creates a new instance of BidGetItem.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets Bid.
     */
    public function getBid(): ?int
    {
        return $this->Bid ?? null;
    }

    /**
     * Sets Bid.
     *
     * @return $this
     */
    public function setBid(?int $value = null)
    {
        $this->Bid = $value;

        return $this;
    }

    /**
     * Gets ContextBid.
     */
    public function getContextBid(): ?int
    {
        return $this->ContextBid ?? null;
    }

    /**
     * Sets ContextBid.
     *
     * @return $this
     */
    public function setContextBid(?int $value = null)
    {
        $this->ContextBid = $value;

        return $this;
    }

    /**
     * Gets StrategyPriority.
     *
     * @see PriorityEnum
     */
    public function getStrategyPriority(): ?string
    {
        return $this->StrategyPriority ?? null;
    }

    /**
     * Sets StrategyPriority.
     *
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
     * Gets CompetitorsBids.
     *
     * @return int[]|null
     */
    public function getCompetitorsBids(): ?array
    {
        return $this->CompetitorsBids ?? null;
    }

    /**
     * Sets CompetitorsBids.
     *
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
     * Gets SearchPrices.
     *
     * @return SearchPrices[]|null
     */
    public function getSearchPrices(): ?array
    {
        return $this->SearchPrices ?? null;
    }

    /**
     * Sets SearchPrices.
     *
     * @param SearchPrices[]|null $value
     *
     * @return $this
     */
    public function setSearchPrices(?array $value = null)
    {
        $this->SearchPrices = $value;

        return $this;
    }

    /**
     * Gets ContextCoverage.
     */
    public function getContextCoverage(): ?ContextCoverage
    {
        return $this->ContextCoverage ?? null;
    }

    /**
     * Sets ContextCoverage.
     *
     * @return $this
     */
    public function setContextCoverage(?ContextCoverage $value = null)
    {
        $this->ContextCoverage = $value;

        return $this;
    }

    /**
     * Gets MinSearchPrice.
     */
    public function getMinSearchPrice(): ?int
    {
        return $this->MinSearchPrice ?? null;
    }

    /**
     * Sets MinSearchPrice.
     *
     * @return $this
     */
    public function setMinSearchPrice(?int $value = null)
    {
        $this->MinSearchPrice = $value;

        return $this;
    }

    /**
     * Gets CurrentSearchPrice.
     */
    public function getCurrentSearchPrice(): ?int
    {
        return $this->CurrentSearchPrice ?? null;
    }

    /**
     * Sets CurrentSearchPrice.
     *
     * @return $this
     */
    public function setCurrentSearchPrice(?int $value = null)
    {
        $this->CurrentSearchPrice = $value;

        return $this;
    }

    /**
     * Gets AuctionBids.
     *
     * @return AuctionBidItem[]|null
     */
    public function getAuctionBids(): ?array
    {
        return $this->AuctionBids ?? null;
    }

    /**
     * Sets AuctionBids.
     *
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
     * Gets ServingStatus.
     *
     * @see ServingStatusEnum
     */
    public function getServingStatus(): ?string
    {
        return $this->ServingStatus ?? null;
    }

    /**
     * Sets ServingStatus.
     *
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
