<?php

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
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets Price.
     *
     * @return int
     */
    public function getPrice()
    {
        return $this->Price;
    }

    /**
     * Sets Price.
     *
     * @param int $value
     * @return $this
     */
    public function setPrice($value)
    {
        $this->Price = $value;

        return $this;
    }

    /**
     * Gets OldPrice.
     *
     * @return int|null
     */
    public function getOldPrice()
    {
        return isset($this->OldPrice) ? $this->OldPrice : null;
    }

    /**
     * Sets OldPrice.
     *
     * @param int|null $value
     * @return $this
     */
    public function setOldPrice($value = null)
    {
        $this->OldPrice = $value;

        return $this;
    }

    /**
     * Gets PriceQualifier.
     *
     * @return string
     * @see PriceQualifierEnum
     */
    public function getPriceQualifier()
    {
        return $this->PriceQualifier;
    }

    /**
     * Sets PriceQualifier.
     *
     * @param string $value
     * @return $this
     * @see PriceQualifierEnum
     */
    public function setPriceQualifier($value)
    {
        $this->PriceQualifier = $value;

        return $this;
    }

    /**
     * Gets PriceCurrency.
     *
     * @return string
     * @see PriceCurrencyEnum
     */
    public function getPriceCurrency()
    {
        return $this->PriceCurrency;
    }

    /**
     * Sets PriceCurrency.
     *
     * @param string $value
     * @return $this
     * @see PriceCurrencyEnum
     */
    public function setPriceCurrency($value)
    {
        $this->PriceCurrency = $value;

        return $this;
    }


}

