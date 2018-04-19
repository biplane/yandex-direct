<?php

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
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets Position.
     *
     * @return string|null
     * @see PositionEnum
     */
    public function getPosition()
    {
        return isset($this->Position) ? $this->Position : null;
    }

    /**
     * Sets Position.
     *
     * @param string|null $value
     * @return self
     * @see PositionEnum
     */
    public function setPosition($value = null)
    {
        $this->Position = $value;

        return $this;
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
     * @return self
     */
    public function setPrice($value = null)
    {
        $this->Price = $value;

        return $this;
    }


}

