<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class TrackingPixelGetItem
{

    protected $TrackingPixel = null;

    protected $Provider = null;

    /**
     * Creates a new instance of TrackingPixelGetItem.
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets TrackingPixel.
     *
     * @return string
     */
    public function getTrackingPixel()
    {
        return $this->TrackingPixel;
    }

    /**
     * Sets TrackingPixel.
     *
     * @param string $value
     * @return $this
     */
    public function setTrackingPixel($value)
    {
        $this->TrackingPixel = $value;

        return $this;
    }

    /**
     * Gets Provider.
     *
     * @return string
     */
    public function getProvider()
    {
        return $this->Provider;
    }

    /**
     * Sets Provider.
     *
     * @param string $value
     * @return $this
     */
    public function setProvider($value)
    {
        $this->Provider = $value;

        return $this;
    }


}

