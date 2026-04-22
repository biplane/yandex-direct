<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class PriceExtensionAddItem
{
    /** @var int */
    protected $Price;

//    Can be omitted.
//    protected $OldPrice;

    /** @var 'NONE'|'FROM'|'UP_TO' */
    protected $PriceQualifier;

    /** @var 'RUB'|'UAH'|'BYN'|'USD'|'EUR'|'KZT'|'TRY'|'CHF'|'UZS' */
    protected $PriceCurrency;

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

    /**
     * Get OldPrice
     */
    public function getOldPrice(): ?int
    {
        return $this->OldPrice ?? null;
    }

    /**
     * Set OldPrice
     *
     * @return $this
     */
    public function setOldPrice(?int $value)
    {
        $this->OldPrice = $value;

        return $this;
    }

    /**
     * Get PriceQualifier
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\PriceQualifierEnum
     *
     * @return 'NONE'|'FROM'|'UP_TO'
     */
    public function getPriceQualifier(): string
    {
        return $this->PriceQualifier;
    }

    /**
     * Set PriceQualifier
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\PriceQualifierEnum
     *
     * @param 'NONE'|'FROM'|'UP_TO' $value
     *
     * @return $this
     */
    public function setPriceQualifier(string $value)
    {
        $this->PriceQualifier = $value;

        return $this;
    }

    /**
     * Get PriceCurrency
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\PriceCurrencyEnum
     *
     * @return 'RUB'|'UAH'|'BYN'|'USD'|'EUR'|'KZT'|'TRY'|'CHF'|'UZS'
     */
    public function getPriceCurrency(): string
    {
        return $this->PriceCurrency;
    }

    /**
     * Set PriceCurrency
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\PriceCurrencyEnum
     *
     * @param 'RUB'|'UAH'|'BYN'|'USD'|'EUR'|'KZT'|'TRY'|'CHF'|'UZS' $value
     *
     * @return $this
     */
    public function setPriceCurrency(string $value)
    {
        $this->PriceCurrency = $value;

        return $this;
    }
}
