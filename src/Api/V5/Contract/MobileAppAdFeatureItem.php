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
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets Feature.
     *
     * @return string
     * @see MobileAppFeatureEnum
     */
    public function getFeature()
    {
        return $this->Feature;
    }

    /**
     * Sets Feature.
     *
     * @param string $value
     * @return self
     * @see MobileAppFeatureEnum
     */
    public function setFeature($value)
    {
        $this->Feature = $value;

        return $this;
    }

    /**
     * Gets Enabled.
     *
     * @return string
     * @see YesNoEnum
     */
    public function getEnabled()
    {
        return $this->Enabled;
    }

    /**
     * Sets Enabled.
     *
     * @param string $value
     * @return self
     * @see YesNoEnum
     */
    public function setEnabled($value)
    {
        $this->Enabled = $value;

        return $this;
    }


}

