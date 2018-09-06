<?php

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
     *
     * @return self
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
        return isset($this->Bid) ? $this->Bid : null;
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
        return isset($this->ContextBid) ? $this->ContextBid : null;
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
     * @return string|null
     * @see PriorityEnum
     */
    public function getStrategyPriority()
    {
        return isset($this->StrategyPriority) ? $this->StrategyPriority : null;
    }

    /**
     * Sets StrategyPriority.
     *
     * @param string|null $value
     * @return $this
     * @see PriorityEnum
     */
    public function setStrategyPriority($value = null)
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
        return isset($this->CompetitorsBids) ? $this->CompetitorsBids : null;
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
        return isset($this->SearchPrices) ? $this->SearchPrices : null;
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
        return isset($this->ContextCoverage) ? $this->ContextCoverage : null;
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
        return isset($this->MinSearchPrice) ? $this->MinSearchPrice : null;
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
        return isset($this->CurrentSearchPrice) ? $this->CurrentSearchPrice : null;
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
        return isset($this->AuctionBids) ? $this->AuctionBids : null;
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

    /**
     * Gets ServingStatus.
     *
     * @return string|null
     * @see ServingStatusEnum
     */
    public function getServingStatus()
    {
        return isset($this->ServingStatus) ? $this->ServingStatus : null;
    }

    /**
     * Sets ServingStatus.
     *
     * @param string|null $value
     * @return $this
     * @see ServingStatusEnum
     */
    public function setServingStatus($value = null)
    {
        $this->ServingStatus = $value;

        return $this;
    }


}

