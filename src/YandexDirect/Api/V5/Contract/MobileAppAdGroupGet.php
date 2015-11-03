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
     * @return MobileAppAdGroupGet
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
     * @return $this
     */
    public function setStoreUrl($value = null)
    {
        $this->StoreUrl = $value;

        return $this;
    }

    /**
     * Gets TargetDeviceType.
     *
     * @return TargetDeviceTypeEnum[]|null
     */
    public function getTargetDeviceType()
    {
        return $this->TargetDeviceType;
    }

    /**
     * Sets TargetDeviceType.
     *
     * @param TargetDeviceTypeEnum[]|null $value
     * @return $this
     */
    public function setTargetDeviceType(array $value = null)
    {
        $this->TargetDeviceType = $value;

        return $this;
    }

    /**
     * Gets TargetCarrier.
     *
     * @return TargetCarrierEnum|null
     */
    public function getTargetCarrier()
    {
        return $this->TargetCarrier;
    }

    /**
     * Sets TargetCarrier.
     *
     * @param TargetCarrierEnum|null $value
     * @return $this
     */
    public function setTargetCarrier(TargetCarrierEnum $value = null)
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
     * @return $this
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
     * @return $this
     */
    public function setAppIconModeration(ExtensionModeration $value = null)
    {
        $this->AppIconModeration = $value;

        return $this;
    }

    /**
     * Gets AppOperatingSystemType.
     *
     * @return MobileOperatingSystemTypeEnum|null
     */
    public function getAppOperatingSystemType()
    {
        return $this->AppOperatingSystemType;
    }

    /**
     * Sets AppOperatingSystemType.
     *
     * @param MobileOperatingSystemTypeEnum|null $value
     * @return $this
     */
    public function setAppOperatingSystemType(MobileOperatingSystemTypeEnum $value = null)
    {
        $this->AppOperatingSystemType = $value;

        return $this;
    }

    /**
     * Gets AppAvailabilityStatus.
     *
     * @return AppAvailabilityStatusEnum|null
     */
    public function getAppAvailabilityStatus()
    {
        return $this->AppAvailabilityStatus;
    }

    /**
     * Sets AppAvailabilityStatus.
     *
     * @param AppAvailabilityStatusEnum|null $value
     * @return $this
     */
    public function setAppAvailabilityStatus(AppAvailabilityStatusEnum $value = null)
    {
        $this->AppAvailabilityStatus = $value;

        return $this;
    }


}

