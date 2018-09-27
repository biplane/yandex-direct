<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class CpmBannerAdBuilderAdAdd extends AdBuilderAdAddBase
{

    protected $Href = null;

//    Can be omit.
//    protected $TrackingPixels = null;

    /**
     * Creates a new instance of CpmBannerAdBuilderAdAdd.
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
     * @return string
     */
    public function getHref()
    {
        return $this->Href;
    }

    /**
     * Sets Href.
     *
     * @param string $value
     * @return $this
     */
    public function setHref($value)
    {
        $this->Href = $value;

        return $this;
    }

    /**
     * Gets TrackingPixels.
     *
     * @return string[]|null
     */
    public function getTrackingPixels()
    {
        return isset($this->TrackingPixels) ? $this->TrackingPixels : null;
    }

    /**
     * Sets TrackingPixels.
     *
     * @param string[]|null $value
     * @return $this
     */
    public function setTrackingPixels(array $value = null)
    {
        $this->TrackingPixels = $value;

        return $this;
    }


}

