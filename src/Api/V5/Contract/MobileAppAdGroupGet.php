<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class MobileAppAdGroupGet
{

//    Can be omit.
//    protected $StoreUrl = null;

//    Can be omit.
//    protected $TargetDeviceType = null;

//    Can be omit.
//    protected $TargetCarrier = null;

//    Can be omit.
//    protected $TargetOperatingSystemVersion = null;

//    Can be omit.
//    protected $AppIconModeration = null;

//    Can be omit.
//    protected $AppOperatingSystemType = null;

//    Can be omit.
//    protected $AppAvailabilityStatus = null;

    /**
     * Creates a new instance of MobileAppAdGroupGet.
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
     * @return string|null
     */
    public function getStoreUrl()
    {
        return isset($this->StoreUrl) ? $this->StoreUrl : null;
    }

    /**
     * Sets StoreUrl.
     *
     * @param string|null $value
     * @return self
     */
    public function setStoreUrl($value = null)
    {
        $this->StoreUrl = $value;

        return $this;
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
        return isset($this->TargetCarrier) ? $this->TargetCarrier : null;
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
        return isset($this->TargetOperatingSystemVersion) ? $this->TargetOperatingSystemVersion : null;
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

    /**
     * Gets AppIconModeration.
     *
     * @return ExtensionModeration|null
     */
    public function getAppIconModeration()
    {
        return isset($this->AppIconModeration) ? $this->AppIconModeration : null;
    }

    /**
     * Sets AppIconModeration.
     *
     * @param ExtensionModeration|null $value
     * @return self
     */
    public function setAppIconModeration(ExtensionModeration $value = null)
    {
        $this->AppIconModeration = $value;

        return $this;
    }

    /**
     * Gets AppOperatingSystemType.
     *
     * @return string|null
     * @see MobileOperatingSystemTypeEnum
     */
    public function getAppOperatingSystemType()
    {
        return isset($this->AppOperatingSystemType) ? $this->AppOperatingSystemType : null;
    }

    /**
     * Sets AppOperatingSystemType.
     *
     * @param string|null $value
     * @return self
     * @see MobileOperatingSystemTypeEnum
     */
    public function setAppOperatingSystemType($value = null)
    {
        $this->AppOperatingSystemType = $value;

        return $this;
    }

    /**
     * Gets AppAvailabilityStatus.
     *
     * @return string|null
     * @see AppAvailabilityStatusEnum
     */
    public function getAppAvailabilityStatus()
    {
        return isset($this->AppAvailabilityStatus) ? $this->AppAvailabilityStatus : null;
    }

    /**
     * Sets AppAvailabilityStatus.
     *
     * @param string|null $value
     * @return self
     * @see AppAvailabilityStatusEnum
     */
    public function setAppAvailabilityStatus($value = null)
    {
        $this->AppAvailabilityStatus = $value;

        return $this;
    }


}

