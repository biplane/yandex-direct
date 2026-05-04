<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Bids;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class AuctionBidItem
{
    /** @var string */
    protected $Position;

    /** @var int */
    protected $Bid;

    /** @var int */
    protected $Price;

    /**
     * Create a new instance.
     *
     * @return static
     */
    public static function create(): static
    {
        return new static();
    }

    /**
     * Get Position
     */
    public function getPosition(): string
    {
        return $this->Position;
    }

    /**
     * Set Position
     *
     * @return $this
     */
    public function setPosition(string $value)
    {
        $this->Position = $value;

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
