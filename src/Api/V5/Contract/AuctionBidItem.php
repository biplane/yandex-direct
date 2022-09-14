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
    protected $TrafficVolume = null;

    protected $Bid = null;

    protected $Price = null;

    /**
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    public function getTrafficVolume(): int
    {
        return $this->TrafficVolume;
    }

    /**
     * @return $this
     */
    public function setTrafficVolume(int $value)
    {
        $this->TrafficVolume = $value;

        return $this;
    }

    public function getBid(): int
    {
        return $this->Bid;
    }

    /**
     * @return $this
     */
    public function setBid(int $value)
    {
        $this->Bid = $value;

        return $this;
    }

    public function getPrice(): int
    {
        return $this->Price;
    }

    /**
     * @return $this
     */
    public function setPrice(int $value)
    {
        $this->Price = $value;

        return $this;
    }
}
