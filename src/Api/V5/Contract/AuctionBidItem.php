<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class AuctionBidItem
{
    protected $TrafficVolume = null;

    protected $Bid = null;

    protected $Price = null;

    /**
     * Creates a new instance of AuctionBidItem.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets TrafficVolume.
     */
    public function getTrafficVolume(): int
    {
        return $this->TrafficVolume;
    }

    /**
     * Sets TrafficVolume.
     *
     * @return $this
     */
    public function setTrafficVolume(int $value)
    {
        $this->TrafficVolume = $value;

        return $this;
    }

    /**
     * Gets Bid.
     */
    public function getBid(): int
    {
        return $this->Bid;
    }

    /**
     * Sets Bid.
     *
     * @return $this
     */
    public function setBid(int $value)
    {
        $this->Bid = $value;

        return $this;
    }

    /**
     * Gets Price.
     */
    public function getPrice(): int
    {
        return $this->Price;
    }

    /**
     * Sets Price.
     *
     * @return $this
     */
    public function setPrice(int $value)
    {
        $this->Price = $value;

        return $this;
    }
}
