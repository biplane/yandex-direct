<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V4\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class PhraseAuctionBids
{
    /** @var string|null */
    protected $Position = null;

    /** @var float|null */
    protected $Bid = null;

    /** @var float|null */
    protected $Price = null;

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
     * Get Position
     */
    public function getPosition(): ?string
    {
        return $this->Position;
    }

    /**
     * Set Position
     *
     * @return $this
     */
    public function setPosition(?string $value)
    {
        $this->Position = $value;

        return $this;
    }

    /**
     * Get Bid
     */
    public function getBid(): ?float
    {
        return $this->Bid;
    }

    /**
     * Set Bid
     *
     * @return $this
     */
    public function setBid(?float $value)
    {
        $this->Bid = $value;

        return $this;
    }

    /**
     * Get Price
     */
    public function getPrice(): ?float
    {
        return $this->Price;
    }

    /**
     * Set Price
     *
     * @return $this
     */
    public function setPrice(?float $value)
    {
        $this->Price = $value;

        return $this;
    }
}
