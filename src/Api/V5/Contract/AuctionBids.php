<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class AuctionBids
{
//    Can be omitted.
//    protected $AuctionBidItems = null;

    /**
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    /**
     * @return AuctionBidItem[]|null
     */
    public function getAuctionBidItems(): ?array
    {
        return $this->AuctionBidItems ?? null;
    }

    /**
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
