<?php

namespace Biplane\YandexDirect\Api\V4\Contract;

/**
 * Auto-generated code.
 */
class PhraseAuctionBids
{

    protected $Position = null;

    protected $Bid = null;

    protected $Price = null;

    /**
     * Creates a new instance of PhraseAuctionBids.
     *
     * @return PhraseAuctionBids
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets Position.
     *
     * @return string|null
     */
    public function getPosition()
    {
        return $this->Position;
    }

    /**
     * Sets Position.
     *
     * @param string|null $value
     * @return $this
     */
    public function setPosition($value = null)
    {
        $this->Position = $value;

        return $this;
    }

    /**
     * Gets Bid.
     *
     * @return float|null
     */
    public function getBid()
    {
        return $this->Bid;
    }

    /**
     * Sets Bid.
     *
     * @param float|null $value
     * @return $this
     */
    public function setBid($value = null)
    {
        $this->Bid = $value;

        return $this;
    }

    /**
     * Gets Price.
     *
     * @return float|null
     */
    public function getPrice()
    {
        return $this->Price;
    }

    /**
     * Sets Price.
     *
     * @param float|null $value
     * @return $this
     */
    public function setPrice($value = null)
    {
        $this->Price = $value;

        return $this;
    }


}

