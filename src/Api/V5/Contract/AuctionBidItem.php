<?php

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
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets TrafficVolume.
     *
     * @return int
     */
    public function getTrafficVolume()
    {
        return $this->TrafficVolume;
    }

    /**
     * Sets TrafficVolume.
     *
     * @param int $value
     * @return $this
     */
    public function setTrafficVolume($value)
    {
        $this->TrafficVolume = $value;

        return $this;
    }

    /**
     * Gets Bid.
     *
     * @return int
     */
    public function getBid()
    {
        return $this->Bid;
    }

    /**
     * Sets Bid.
     *
     * @param int $value
     * @return $this
     */
    public function setBid($value)
    {
        $this->Bid = $value;

        return $this;
    }

    /**
     * Gets Price.
     *
     * @return int
     */
    public function getPrice()
    {
        return $this->Price;
    }

    /**
     * Sets Price.
     *
     * @param int $value
     * @return $this
     */
    public function setPrice($value)
    {
        $this->Price = $value;

        return $this;
    }


}

