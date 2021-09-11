<?php

declare(strict_types=1);

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
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets AuctionBidItems.
     *
     * @return AuctionBidItem[]|null
     */
    public function getAuctionBidItems(): ?array
    {
        return $this->AuctionBidItems ?? null;
    }

    /**
     * Sets AuctionBidItems.
     *
     * @param AuctionBidItem[]|null $value
     *
     * @return $this
     */
    public function setAuctionBidItems(?array $value = null)
    {
        $this->AuctionBidItems = $value;

        return $this;
    }
}
