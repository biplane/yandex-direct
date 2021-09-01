<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class MobileAppAdGet extends MobileAppAdBase
{

//    Can be omit.
//    protected $Features = null;

//    Can be omit.
//    protected $AdImageModeration = null;

//    Can be omit.
//    protected $VideoExtension = null;

    /**
     * Creates a new instance of MobileAppAdGet.
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
     * @return MobileAppAdFeatureGetItem[]|null
     */
    public function getFeatures()
    {
        return isset($this->Features) ? $this->Features : null;
    }

    /**
     * Sets Features.
     *
     * @param MobileAppAdFeatureGetItem[]|null $value
     * @return $this
     */
    public function setFeatures(array $value = null)
    {
        $this->Features = $value;

        return $this;
    }

    /**
     * Gets AdImageModeration.
     *
     * @return ExtensionModeration|null
     */
    public function getAdImageModeration()
    {
        return isset($this->AdImageModeration) ? $this->AdImageModeration : null;
    }

    /**
     * Sets AdImageModeration.
     *
     * @param ExtensionModeration|null $value
     * @return $this
     */
    public function setAdImageModeration(ExtensionModeration $value = null)
    {
        $this->AdImageModeration = $value;

        return $this;
    }

    /**
     * Gets VideoExtension.
     *
     * @return VideoExtensionGetItem|null
     */
    public function getVideoExtension()
    {
        return isset($this->VideoExtension) ? $this->VideoExtension : null;
    }

    /**
     * Sets VideoExtension.
     *
     * @param VideoExtensionGetItem|null $value
     * @return $this
     */
    public function setVideoExtension(VideoExtensionGetItem $value = null)
    {
        $this->VideoExtension = $value;

        return $this;
    }


}

