<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class Search
{

//    Can be omit.
//    protected $Bid = null;

//    Can be omit.
//    protected $AuctionBids = null;

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
     * Gets AuctionBids.
     *
     * @return AuctionBids|null
     */
    public function getAuctionBids()
    {
        return isset($this->AuctionBids) ? $this->AuctionBids : null;
    }

    /**
     * Sets AuctionBids.
     *
     * @param AuctionBids|null $value
     * @return $this
     */
    public function setAuctionBids(AuctionBids $value = null)
    {
        $this->AuctionBids = $value;

        return $this;
    }


}

