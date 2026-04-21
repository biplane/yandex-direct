<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class AuctionBidItem
{
    /** @var int */
    protected $TrafficVolume;

    /** @var int */
    protected $Bid;

    /** @var int */
    protected $Price;

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
     * Get TrafficVolume
     */
    public function getTrafficVolume(): int
    {
        return $this->TrafficVolume;
    }

    /**
     * Set TrafficVolume
     *
     * @return $this
     */
    public function setTrafficVolume(int $value)
    {
        $this->TrafficVolume = $value;

        return $this;
    }

    /**
     * Get Bid
     */
    public function getBid(): int
    {
        return $this->Bid;
    }

    /**
     * Set Bid
     *
     * @return $this
     */
    public function setBid(int $value)
    {
        $this->Bid = $value;

        return $this;
    }

    /**
     * Get Price
     */
    public function getPrice(): int
    {
        return $this->Price;
    }

    /**
     * Set Price
     *
     * @return $this
     */
    public function setPrice(int $value)
    {
        $this->Price = $value;

        return $this;
    }
}
