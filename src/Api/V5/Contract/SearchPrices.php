<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class SearchPrices
{
//    Can be omitted.
//    protected $Position;

//    Can be omitted.
//    protected $Price;

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
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\PositionEnum
     *
     * @return 'PREMIUMFIRST'|'PREMIUMBLOCK'|'FOOTERFIRST'|'FOOTERBLOCK'|'P11'|'P12'|'P13'|'P14'|'P21'|'P22'|'P23'|'P24'|null
     */
    public function getPosition(): ?string
    {
        return $this->Position ?? null;
    }

    /**
     * Set Position
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\PositionEnum
     *
     * @param 'PREMIUMFIRST'|'PREMIUMBLOCK'|'FOOTERFIRST'|'FOOTERBLOCK'|'P11'|'P12'|'P13'|'P14'|'P21'|'P22'|'P23'|'P24'|null $value
     *
     * @return $this
     */
    public function setPosition(?string $value)
    {
        $this->Position = $value;

        return $this;
    }

    /**
     * Get Price
     */
    public function getPrice(): ?int
    {
        return $this->Price ?? null;
    }

    /**
     * Set Price
     *
     * @return $this
     */
    public function setPrice(?int $value)
    {
        $this->Price = $value;

        return $this;
    }
}
