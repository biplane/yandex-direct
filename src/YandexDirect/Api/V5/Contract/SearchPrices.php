<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class SearchPrices
{

    protected $Position = null;

    protected $Price = null;

    /**
     * Creates a new instance of SearchPrices.
     *
     * @return SearchPrices
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets Position.
     *
     * @return PositionEnum|null
     */
    public function getPosition()
    {
        return $this->Position;
    }

    /**
     * Sets Position.
     *
     * @param PositionEnum|null $value
     * @return $this
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
        return $this->Price;
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


}

