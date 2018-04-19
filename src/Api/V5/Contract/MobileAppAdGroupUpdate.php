<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class MobileAppAdGroupUpdate
{

//    Can be omit.
//    protected $TargetDeviceType = null;

//    Can be omit.
//    protected $TargetCarrier = null;

//    Can be omit.
//    protected $TargetOperatingSystemVersion = null;

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
        return isset($this->TargetDeviceType) ? $this->TargetDeviceType : null;
    }

    /**
     * Sets TargetDeviceType.
     *
     * @param string[]|null $value
     * @return $this
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
        return isset($this->TargetCarrier) ? $this->TargetCarrier : null;
    }

    /**
     * Sets TargetCarrier.
     *
     * @param string|null $value
     * @return $this
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
        return isset($this->TargetOperatingSystemVersion) ? $this->TargetOperatingSystemVersion : null;
    }

    /**
     * Sets TargetOperatingSystemVersion.
     *
     * @param string|null $value
     * @return $this
     */
    public function setTargetOperatingSystemVersion($value = null)
    {
        $this->TargetOperatingSystemVersion = $value;

        return $this;
    }


}

