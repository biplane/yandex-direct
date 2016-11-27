<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class AuctionBidItem
{

    protected $Position = null;

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
     * Gets Position.
     *
     * @return string
     */
    public function getPosition()
    {
        return $this->Position;
    }

    /**
     * Sets Position.
     *
     * @param string $value
     * @return self
     */
    public function setPosition($value)
    {
        $this->Position = $value;

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
     * @return self
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
     * @return self
     */
    public function setPrice($value)
    {
        $this->Price = $value;

        return $this;
    }


}

