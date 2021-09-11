<?php

declare(strict_types=1);

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
     * Gets AuctionBids.
     */
    public function getAuctionBids(): ?AuctionBids
    {
        return $this->AuctionBids ?? null;
    }

    /**
     * Sets AuctionBids.
     *
     * @return $this
     */
    public function setAuctionBids(?AuctionBids $value = null)
    {
        $this->AuctionBids = $value;

        return $this;
    }
}
