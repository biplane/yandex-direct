<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class PriceExtensionGetItem
{

//    Can be omit.
//    protected $Price = null;

//    Can be omit.
//    protected $OldPrice = null;

//    Can be omit.
//    protected $PriceQualifier = null;

//    Can be omit.
//    protected $PriceCurrency = null;

    /**
     * Creates a new instance of PriceExtensionGetItem.
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
     * @return int|null
     */
    public function getPrice()
    {
        return isset($this->Price) ? $this->Price : null;
    }

    /**
     * Sets Price.
     *
     * @param int|null $value
     * @return $this
     */
    public function setPrice($value = null)
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
     * @return string|null
     * @see PriceQualifierEnum
     */
    public function getPriceQualifier()
    {
        return isset($this->PriceQualifier) ? $this->PriceQualifier : null;
    }

    /**
     * Sets PriceQualifier.
     *
     * @param string|null $value
     * @return $this
     * @see PriceQualifierEnum
     */
    public function setPriceQualifier($value = null)
    {
        $this->PriceQualifier = $value;

        return $this;
    }

    /**
     * Gets PriceCurrency.
     *
     * @return string|null
     * @see PriceCurrencyEnum
     */
    public function getPriceCurrency()
    {
        return isset($this->PriceCurrency) ? $this->PriceCurrency : null;
    }

    /**
     * Sets PriceCurrency.
     *
     * @param string|null $value
     * @return $this
     * @see PriceCurrencyEnum
     */
    public function setPriceCurrency($value = null)
    {
        $this->PriceCurrency = $value;

        return $this;
    }


}

