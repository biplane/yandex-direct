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
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    public function getPosition(): ?string
    {
        return $this->Position;
    }

    /**
     * @return $this
     */
    public function setPosition(?string $value = null)
    {
        $this->Position = $value;

        return $this;
    }

    public function getBid(): ?float
    {
        return $this->Bid;
    }

    /**
     * @return $this
     */
    public function setBid(?float $value = null)
    {
        $this->Bid = $value;

        return $this;
    }

    public function getPrice(): ?float
    {
        return $this->Price;
    }

    /**
     * @return $this
     */
    public function setPrice(?float $value = null)
    {
        $this->Price = $value;

        return $this;
    }
}
