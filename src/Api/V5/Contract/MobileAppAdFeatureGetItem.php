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
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets IsAvailable.
     *
     * @return string
     * @see YesNoUnknownEnum
     */
    public function getIsAvailable()
    {
        return $this->IsAvailable;
    }

    /**
     * Sets IsAvailable.
     *
     * @param string $value
     * @return $this
     * @see YesNoUnknownEnum
     */
    public function setIsAvailable($value)
    {
        $this->IsAvailable = $value;

        return $this;
    }


}

