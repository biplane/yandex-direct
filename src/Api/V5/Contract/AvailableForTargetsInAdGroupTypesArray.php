<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class AvailableForTargetsInAdGroupTypesArray
{

    protected $Items = [];

    /**
     * Creates a new instance of AvailableForTargetsInAdGroupTypesArray.
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
     * @return string[]
     * @see AdGroupTypesEnum
     */
    public function getItems()
    {
        return $this->Items;
    }

    /**
     * Sets Items.
     *
     * @param string[] $value
     * @return $this
     * @see AdGroupTypesEnum
     */
    public function setItems(array $value)
    {
        $this->Items = $value;

        return $this;
    }


}

