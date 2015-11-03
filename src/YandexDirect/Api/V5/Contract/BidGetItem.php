<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class BidGetItem extends BidBase
{

    protected $Bid = null;

    protected $ContextBid = null;

    protected $StrategyPriority = null;

    protected $CompetitorsBids = null;

    protected $SearchPrices = null;

    protected $ContextCoverage = null;

    protected $MinSearchPrice = null;

    protected $CurrentSearchPrice = null;

    protected $AuctionBids = null;

    /**
     * Creates a new instance of BidGetItem.
     *
     * @return BidGetItem
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets Bid.
     *
     * @return int|null
     */
    public function getBid()
    {
        return $this->Bid;
    }

    /**
     * Sets Bid.
     *
     * @param int|null $value
     * @return $this
     */
    public function setBid($value = null)
    {
        $this->Bid = $value;

        return $this;
    }

    /**
     * Gets ContextBid.
     *
     * @return int|null
     */
    public function getContextBid()
    {
        return $this->ContextBid;
    }

    /**
     * Sets ContextBid.
     *
     * @param int|null $value
     * @return $this
     */
    public function setContextBid($value = null)
    {
        $this->ContextBid = $value;

        return $this;
    }

    /**
     * Gets StrategyPriority.
     *
     * @return PriorityEnum|null
     */
    public function getStrategyPriority()
    {
        return $this->StrategyPriority;
    }

    /**
     * Sets StrategyPriority.
     *
     * @param PriorityEnum|null $value
     * @return $this
     */
    public function setStrategyPriority(PriorityEnum $value = null)
    {
        $this->StrategyPriority = $value;

        return $this;
    }

    /**
     * Gets CompetitorsBids.
     *
     * @return int[]|null
     */
    public function getCompetitorsBids()
    {
        return $this->CompetitorsBids;
    }

    /**
     * Sets CompetitorsBids.
     *
     * @param int[]|null $value
     * @return $this
     */
    public function setCompetitorsBids(array $value = null)
    {
        $this->CompetitorsBids = $value;

        return $this;
    }

    /**
     * Gets SearchPrices.
     *
     * @return SearchPrices[]|null
     */
    public function getSearchPrices()
    {
        return $this->SearchPrices;
    }

    /**
     * Sets SearchPrices.
     *
     * @param SearchPrices[]|null $value
     * @return $this
     */
    public function setSearchPrices(array $value = null)
    {
        $this->SearchPrices = $value;

        return $this;
    }

    /**
     * Gets ContextCoverage.
     *
     * @return ContextCoverage|null
     */
    public function getContextCoverage()
    {
        return $this->ContextCoverage;
    }

    /**
     * Sets ContextCoverage.
     *
     * @param ContextCoverage|null $value
     * @return $this
     */
    public function setContextCoverage(ContextCoverage $value = null)
    {
        $this->ContextCoverage = $value;

        return $this;
    }

    /**
     * Gets MinSearchPrice.
     *
     * @return int|null
     */
    public function getMinSearchPrice()
    {
        return $this->MinSearchPrice;
    }

    /**
     * Sets MinSearchPrice.
     *
     * @param int|null $value
     * @return $this
     */
    public function setMinSearchPrice($value = null)
    {
        $this->MinSearchPrice = $value;

        return $this;
    }

    /**
     * Gets CurrentSearchPrice.
     *
     * @return int|null
     */
    public function getCurrentSearchPrice()
    {
        return $this->CurrentSearchPrice;
    }

    /**
     * Sets CurrentSearchPrice.
     *
     * @param int|null $value
     * @return $this
     */
    public function setCurrentSearchPrice($value = null)
    {
        $this->CurrentSearchPrice = $value;

        return $this;
    }

    /**
     * Gets AuctionBids.
     *
     * @return AuctionBidItem[]|null
     */
    public function getAuctionBids()
    {
        return $this->AuctionBids;
    }

    /**
     * Sets AuctionBids.
     *
     * @param AuctionBidItem[]|null $value
     * @return $this
     */
    public function setAuctionBids(array $value = null)
    {
        $this->AuctionBids = $value;

        return $this;
    }


}

