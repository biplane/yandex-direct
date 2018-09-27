<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class CpmBannerAdBuilderAdGet extends AdBuilderAdGetBase
{

//    Can be omit.
//    protected $Href = null;

//    Can be omit.
//    protected $TrackingPixels = null;

    /**
     * Creates a new instance of CpmBannerAdBuilderAdGet.
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets Href.
     *
     * @return string|null
     */
    public function getHref()
    {
        return isset($this->Href) ? $this->Href : null;
    }

    /**
     * Sets Href.
     *
     * @param string|null $value
     * @return $this
     */
    public function setHref($value = null)
    {
        $this->Href = $value;

        return $this;
    }

    /**
     * Gets TrackingPixels.
     *
     * @return TrackingPixelGetItem[]|null
     */
    public function getTrackingPixels()
    {
        return isset($this->TrackingPixels) ? $this->TrackingPixels : null;
    }

    /**
     * Sets TrackingPixels.
     *
     * @param TrackingPixelGetItem[]|null $value
     * @return $this
     */
    public function setTrackingPixels(array $value = null)
    {
        $this->TrackingPixels = $value;

        return $this;
    }


}

