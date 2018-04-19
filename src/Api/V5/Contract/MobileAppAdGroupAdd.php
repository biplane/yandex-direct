<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class MobileAppAdGroupAdd
{

    protected $StoreUrl = null;

    protected $TargetDeviceType = [];

    protected $TargetCarrier = null;

    protected $TargetOperatingSystemVersion = null;

    /**
     * Creates a new instance of MobileAppAdGroupAdd.
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets StoreUrl.
     *
     * @return string
     */
    public function getStoreUrl()
    {
        return $this->StoreUrl;
    }

    /**
     * Sets StoreUrl.
     *
     * @param string $value
     * @return $this
     */
    public function setStoreUrl($value)
    {
        $this->StoreUrl = $value;

        return $this;
    }

    /**
     * Gets TargetDeviceType.
     *
     * @return string[]
     * @see TargetDeviceTypeEnum
     */
    public function getTargetDeviceType()
    {
        return $this->TargetDeviceType;
    }

    /**
     * Sets TargetDeviceType.
     *
     * @param string[] $value
     * @return $this
     * @see TargetDeviceTypeEnum
     */
    public function setTargetDeviceType(array $value)
    {
        $this->TargetDeviceType = $value;

        return $this;
    }

    /**
     * Gets TargetCarrier.
     *
     * @return string
     * @see TargetCarrierEnum
     */
    public function getTargetCarrier()
    {
        return $this->TargetCarrier;
    }

    /**
     * Sets TargetCarrier.
     *
     * @param string $value
     * @return $this
     * @see TargetCarrierEnum
     */
    public function setTargetCarrier($value)
    {
        $this->TargetCarrier = $value;

        return $this;
    }

    /**
     * Gets TargetOperatingSystemVersion.
     *
     * @return string
     */
    public function getTargetOperatingSystemVersion()
    {
        return $this->TargetOperatingSystemVersion;
    }

    /**
     * Sets TargetOperatingSystemVersion.
     *
     * @param string $value
     * @return $this
     */
    public function setTargetOperatingSystemVersion($value)
    {
        $this->TargetOperatingSystemVersion = $value;

        return $this;
    }


}

