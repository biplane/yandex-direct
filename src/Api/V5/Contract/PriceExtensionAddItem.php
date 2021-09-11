<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class PriceExtensionAddItem
{
    protected $Price = null;

//    Can be omit.
//    protected $OldPrice = null;

    protected $PriceQualifier = null;

    protected $PriceCurrency = null;

    /**
     * Creates a new instance of PriceExtensionAddItem.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets Price.
     */
    public function getPrice(): int
    {
        return $this->Price;
    }

    /**
     * Sets Price.
     *
     * @return $this
     */
    public function setPrice(int $value)
    {
        $this->Price = $value;

        return $this;
    }

    /**
     * Gets OldPrice.
     */
    public function getOldPrice(): ?int
    {
        return $this->OldPrice ?? null;
    }

    /**
     * Sets OldPrice.
     *
     * @return $this
     */
    public function setOldPrice(?int $value = null)
    {
        $this->OldPrice = $value;

        return $this;
    }

    /**
     * Gets PriceQualifier.
     *
     * @see PriceQualifierEnum
     */
    public function getPriceQualifier(): string
    {
        return $this->PriceQualifier;
    }

    /**
     * Sets PriceQualifier.
     *
     * @see PriceQualifierEnum
     *
     * @return $this
     */
    public function setPriceQualifier(string $value)
    {
        $this->PriceQualifier = $value;

        return $this;
    }

    /**
     * Gets PriceCurrency.
     *
     * @see PriceCurrencyEnum
     */
    public function getPriceCurrency(): string
    {
        return $this->PriceCurrency;
    }

    /**
     * Sets PriceCurrency.
     *
     * @see PriceCurrencyEnum
     *
     * @return $this
     */
    public function setPriceCurrency(string $value)
    {
        $this->PriceCurrency = $value;

        return $this;
    }
}
