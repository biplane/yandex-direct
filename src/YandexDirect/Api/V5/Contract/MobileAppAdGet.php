<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class MobileAppAdGet extends MobileAppAdBase
{

    protected $Features = null;

    /**
     * Creates a new instance of MobileAppAdGet.
     *
     * @return MobileAppAdGet
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
        return $this->Features;
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


}

