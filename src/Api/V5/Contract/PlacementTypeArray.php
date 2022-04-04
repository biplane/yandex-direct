<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class PlacementTypeArray
{

    protected $Items = [];

    /**
     * Creates a new instance of PlacementTypeArray.
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets Items.
     *
     * @return PlacementType[]
     */
    public function getItems()
    {
        return $this->Items;
    }

    /**
     * Sets Items.
     *
     * @param PlacementType[] $value
     * @return $this
     */
    public function setItems(array $value)
    {
        $this->Items = $value;

        return $this;
    }


}

