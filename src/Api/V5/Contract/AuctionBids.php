<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class AuctionBids
{

    protected $AuctionBidItems = null;

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
        return $this->AuctionBidItems;
    }

    /**
     * Sets AuctionBidItems.
     *
     * @param AuctionBidItem[]|null $value
     * @return self
     */
    public function setAuctionBidItems(array $value = null)
    {
        $this->AuctionBidItems = $value;

        return $this;
    }


}

