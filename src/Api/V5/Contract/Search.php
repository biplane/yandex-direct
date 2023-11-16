<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class Search
{
//    Can be omitted.
//    protected $Bid = null;

//    Can be omitted.
//    protected $AutotargetingSearchBidIsAuto = null;

//    Can be omitted.
//    protected $AuctionBids = null;

    /**
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    public function getBid(): ?int
    {
        return $this->Bid ?? null;
    }

    /**
     * @return $this
     */
    public function setBid(?int $value = null)
    {
        $this->Bid = $value;

        return $this;
    }

    /**
     * @see YesNoEnum
     */
    public function getAutotargetingSearchBidIsAuto(): ?string
    {
        return $this->AutotargetingSearchBidIsAuto ?? null;
    }

    /**
     * @see YesNoEnum
     *
     * @return $this
     */
    public function setAutotargetingSearchBidIsAuto(?string $value = null)
    {
        $this->AutotargetingSearchBidIsAuto = $value;

        return $this;
    }

    public function getAuctionBids(): ?AuctionBids
    {
        return $this->AuctionBids ?? null;
    }

    /**
     * @return $this
     */
    public function setAuctionBids(?AuctionBids $value = null)
    {
        $this->AuctionBids = $value;

        return $this;
    }
}
