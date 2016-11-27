<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class MobileAppAdGroupGet
{

    protected $StoreUrl = null;

    protected $TargetDeviceType = null;

    protected $TargetCarrier = null;

    protected $TargetOperatingSystemVersion = null;

    protected $AppIconModeration = null;

    protected $AppOperatingSystemType = null;

    protected $AppAvailabilityStatus = null;

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
        return $this->StoreUrl;
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

    /**
     * Gets AppIconModeration.
     *
     * @return ExtensionModeration|null
     */
    public function getAppIconModeration()
    {
        return $this->AppIconModeration;
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
        return $this->AppOperatingSystemType;
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
        return $this->AppAvailabilityStatus;
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

