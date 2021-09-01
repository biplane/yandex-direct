<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class MobileAppAdUpdate extends MobileAppAdBase
{

//    Can be omit.
//    protected $Features = null;

//    Can be omit.
//    protected $AgeLabel = null;

//    Can be omit.
//    protected $VideoExtension = null;

    /**
     * Creates a new instance of MobileAppAdUpdate.
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets Features.
     *
     * @return MobileAppAdFeatureItem[]|null
     */
    public function getFeatures()
    {
        return isset($this->Features) ? $this->Features : null;
    }

    /**
     * Sets Features.
     *
     * @param MobileAppAdFeatureItem[]|null $value
     * @return $this
     */
    public function setFeatures(array $value = null)
    {
        $this->Features = $value;

        return $this;
    }

    /**
     * Gets AgeLabel.
     *
     * @return string|null
     * @see MobAppAgeLabelEnum
     */
    public function getAgeLabel()
    {
        return isset($this->AgeLabel) ? $this->AgeLabel : null;
    }

    /**
     * Sets AgeLabel.
     *
     * @param string|null $value
     * @return $this
     * @see MobAppAgeLabelEnum
     */
    public function setAgeLabel($value = null)
    {
        $this->AgeLabel = $value;

        return $this;
    }

    /**
     * Gets VideoExtension.
     *
     * @return VideoExtensionUpdateItem|null
     */
    public function getVideoExtension()
    {
        return isset($this->VideoExtension) ? $this->VideoExtension : null;
    }

    /**
     * Sets VideoExtension.
     *
     * @param VideoExtensionUpdateItem|null $value
     * @return $this
     */
    public function setVideoExtension(VideoExtensionUpdateItem $value = null)
    {
        $this->VideoExtension = $value;

        return $this;
    }


}

