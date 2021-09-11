<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class SearchPrices
{
//    Can be omit.
//    protected $Position = null;

//    Can be omit.
//    protected $Price = null;

    /**
     * Creates a new instance of SearchPrices.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets Position.
     *
     * @see PositionEnum
     */
    public function getPosition(): ?string
    {
        return $this->Position ?? null;
    }

    /**
     * Sets Position.
     *
     * @see PositionEnum
     *
     * @return $this
     */
    public function setPosition(?string $value = null)
    {
        $this->Position = $value;

        return $this;
    }

    /**
     * Gets Price.
     */
    public function getPrice(): ?int
    {
        return $this->Price ?? null;
    }

    /**
     * Sets Price.
     *
     * @return $this
     */
    public function setPrice(?int $value = null)
    {
        $this->Price = $value;

        return $this;
    }
}
