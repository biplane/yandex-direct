<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class CurrenciesItem
{

    protected $Currency = null;

    protected $Properties = [];

    /**
     * Creates a new instance of CurrenciesItem.
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets Currency.
     *
     * @return string
     */
    public function getCurrency()
    {
        return $this->Currency;
    }

    /**
     * Sets Currency.
     *
     * @param string $value
     * @return $this
     */
    public function setCurrency($value)
    {
        $this->Currency = $value;

        return $this;
    }

    /**
     * Gets Properties.
     *
     * @return ConstantsItem[]
     */
    public function getProperties()
    {
        return $this->Properties;
    }

    /**
     * Sets Properties.
     *
     * @param ConstantsItem[] $value
     * @return $this
     */
    public function setProperties(array $value)
    {
        $this->Properties = $value;

        return $this;
    }


}

