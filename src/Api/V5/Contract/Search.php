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
//    protected $Bid;

//    Can be omitted.
//    protected $AutotargetingSearchBidIsAuto;

//    Can be omitted.
//    protected $AuctionBids;

    /**
     * Create a new instance.
     *
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    /**
     * Get Bid
     */
    public function getBid(): ?int
    {
        return $this->Bid ?? null;
    }

    /**
     * Set Bid
     *
     * @return $this
     */
    public function setBid(?int $value)
    {
        $this->Bid = $value;

        return $this;
    }

    /**
     * Get AutotargetingSearchBidIsAuto
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\YesNoEnum
     *
     * @return 'YES'|'NO'|null
     */
    public function getAutotargetingSearchBidIsAuto(): ?string
    {
        return $this->AutotargetingSearchBidIsAuto ?? null;
    }

    /**
     * Set AutotargetingSearchBidIsAuto
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\YesNoEnum
     *
     * @param 'YES'|'NO'|null $value
     *
     * @return $this
     */
    public function setAutotargetingSearchBidIsAuto(?string $value)
    {
        $this->AutotargetingSearchBidIsAuto = $value;

        return $this;
    }

    /**
     * Get AuctionBids
     */
    public function getAuctionBids(): ?AuctionBids
    {
        return $this->AuctionBids ?? null;
    }

    /**
     * Set AuctionBids
     *
     * @return $this
     */
    public function setAuctionBids(?AuctionBids $value)
    {
        $this->AuctionBids = $value;

        return $this;
    }
}
