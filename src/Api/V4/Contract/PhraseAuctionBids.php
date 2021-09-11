<?php

declare(strict_types=1);

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
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets Position.
     */
    public function getPosition(): ?string
    {
        return $this->Position;
    }

    /**
     * Sets Position.
     *
     * @return $this
     */
    public function setPosition(?string $value = null)
    {
        $this->Position = $value;

        return $this;
    }

    /**
     * Gets Bid.
     */
    public function getBid(): ?float
    {
        return $this->Bid;
    }

    /**
     * Sets Bid.
     *
     * @return $this
     */
    public function setBid(?float $value = null)
    {
        $this->Bid = $value;

        return $this;
    }

    /**
     * Gets Price.
     */
    public function getPrice(): ?float
    {
        return $this->Price;
    }

    /**
     * Sets Price.
     *
     * @return $this
     */
    public function setPrice(?float $value = null)
    {
        $this->Price = $value;

        return $this;
    }
}
