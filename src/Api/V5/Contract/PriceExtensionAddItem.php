<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class PriceExtensionAddItem
{
    protected $Price = null;

//    Can be omitted.
//    protected $OldPrice = null;

    protected $PriceQualifier = null;

    protected $PriceCurrency = null;

    /**
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    public function getPrice(): int
    {
        return $this->Price;
    }

    /**
     * @return $this
     */
    public function setPrice(int $value)
    {
        $this->Price = $value;

        return $this;
    }

    public function getOldPrice(): ?int
    {
        return $this->OldPrice ?? null;
    }

    /**
     * @return $this
     */
    public function setOldPrice(?int $value = null)
    {
        $this->OldPrice = $value;

        return $this;
    }

    /**
     * @see PriceQualifierEnum
     */
    public function getPriceQualifier(): string
    {
        return $this->PriceQualifier;
    }

    /**
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
     * @see PriceCurrencyEnum
     */
    public function getPriceCurrency(): string
    {
        return $this->PriceCurrency;
    }

    /**
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
