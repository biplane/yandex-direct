<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class AuctionBids
{

//    Can be omit.
//    protected $AuctionBidItems = null;

    /**
     * Creates a new instance of AuctionBids.
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets AuctionBidItems.
     *
     * @return AuctionBidItem[]|null
     */
    public function getAuctionBidItems()
    {
        return isset($this->AuctionBidItems) ? $this->AuctionBidItems : null;
    }

    /**
     * Sets AuctionBidItems.
     *
     * @param AuctionBidItem[]|null $value
     * @return $this
     */
    public function setAuctionBidItems(array $value = null)
    {
        $this->AuctionBidItems = $value;

        return $this;
    }


}

