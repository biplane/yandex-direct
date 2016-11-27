<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class MobileAppAdGroupUpdate
{

    protected $TargetDeviceType = null;

    protected $TargetCarrier = null;

    protected $TargetOperatingSystemVersion = null;

    /**
     * Creates a new instance of MobileAppAdGroupUpdate.
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets TargetDeviceType.
     *
     * @return string[]|null
     * @see TargetDeviceTypeEnum
     */
    public function getTargetDeviceType()
    {
        return $this->TargetDeviceType;
    }

    /**
     * Sets TargetDeviceType.
     *
     * @param string[]|null $value
     * @return self
     * @see TargetDeviceTypeEnum
     */
    public function setTargetDeviceType(array $value = null)
    {
        $this->TargetDeviceType = $value;

        return $this;
    }

    /**
     * Gets TargetCarrier.
     *
     * @return string|null
     * @see TargetCarrierEnum
     */
    public function getTargetCarrier()
    {
        return $this->TargetCarrier;
    }

    /**
     * Sets TargetCarrier.
     *
     * @param string|null $value
     * @return self
     * @see TargetCarrierEnum
     */
    public function setTargetCarrier($value = null)
    {
        $this->TargetCarrier = $value;

        return $this;
    }

    /**
     * Gets TargetOperatingSystemVersion.
     *
     * @return string|null
     */
    public function getTargetOperatingSystemVersion()
    {
        return $this->TargetOperatingSystemVersion;
    }

    /**
     * Sets TargetOperatingSystemVersion.
     *
     * @param string|null $value
     * @return self
     */
    public function setTargetOperatingSystemVersion($value = null)
    {
        $this->TargetOperatingSystemVersion = $value;

        return $this;
    }


}

