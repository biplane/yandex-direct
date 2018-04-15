<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class Search
{

    protected $Bid = null;

    protected $AuctionBids = null;

    /**
     * Creates a new instance of Search.
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
        return $this->Bid;
    }

    /**
     * Sets Bid.
     *
     * @param int|null $value
     * @return self
     */
    public function setBid($value = null)
    {
        $this->Bid = $value;

        return $this;
    }

    /**
     * Gets AuctionBids.
     *
     * @return AuctionBids|null
     */
    public function getAuctionBids()
    {
        return $this->AuctionBids;
    }

    /**
     * Sets AuctionBids.
     *
     * @param AuctionBids|null $value
     * @return self
     */
    public function setAuctionBids(AuctionBids $value = null)
    {
        $this->AuctionBids = $value;

        return $this;
    }


}

