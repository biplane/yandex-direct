<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class MobileAppAdFeatureItem
{

    protected $Feature = null;

    protected $Enabled = null;

    /**
     * Creates a new instance of MobileAppAdFeatureItem.
     *
     * @return MobileAppAdFeatureItem
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets Feature.
     *
     * @return MobileAppFeatureEnum
     */
    public function getFeature()
    {
        return $this->Feature;
    }

    /**
     * Sets Feature.
     *
     * @param MobileAppFeatureEnum $value
     * @return $this
     */
    public function setFeature(MobileAppFeatureEnum $value)
    {
        $this->Feature = $value;

        return $this;
    }

    /**
     * Gets Enabled.
     *
     * @return YesNoEnum
     */
    public function getEnabled()
    {
        return $this->Enabled;
    }

    /**
     * Sets Enabled.
     *
     * @param YesNoEnum $value
     * @return $this
     */
    public function setEnabled(YesNoEnum $value)
    {
        $this->Enabled = $value;

        return $this;
    }


}

