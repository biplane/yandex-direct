<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class MobileAppAdFeatureGetItem extends MobileAppAdFeatureItem
{

    protected $IsAvailable = null;

    /**
     * Creates a new instance of MobileAppAdFeatureGetItem.
     *
     * @return MobileAppAdFeatureGetItem
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets IsAvailable.
     *
     * @return YesNoUnknownEnum
     */
    public function getIsAvailable()
    {
        return $this->IsAvailable;
    }

    /**
     * Sets IsAvailable.
     *
     * @param YesNoUnknownEnum $value
     * @return $this
     */
    public function setIsAvailable(YesNoUnknownEnum $value)
    {
        $this->IsAvailable = $value;

        return $this;
    }


}

