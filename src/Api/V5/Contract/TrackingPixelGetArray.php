<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class TrackingPixelGetArray
{

//    Can be omit.
//    protected $Items = null;

    /**
     * Creates a new instance of TrackingPixelGetArray.
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
     * @return TrackingPixelGetItem[]|null
     */
    public function getItems()
    {
        return isset($this->Items) ? $this->Items : null;
    }

    /**
     * Sets Items.
     *
     * @param TrackingPixelGetItem[]|null $value
     * @return $this
     */
    public function setItems(array $value = null)
    {
        $this->Items = $value;

        return $this;
    }


}

