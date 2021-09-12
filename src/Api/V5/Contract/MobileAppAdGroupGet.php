<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class MobileAppAdGroupGet
{
//    Can be omitted.
//    protected $StoreUrl = null;

//    Can be omitted.
//    protected $TargetDeviceType = null;

//    Can be omitted.
//    protected $TargetCarrier = null;

//    Can be omitted.
//    protected $TargetOperatingSystemVersion = null;

//    Can be omitted.
//    protected $AppIconModeration = null;

//    Can be omitted.
//    protected $AppOperatingSystemType = null;

//    Can be omitted.
//    protected $AppAvailabilityStatus = null;

    /**
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    public function getStoreUrl(): ?string
    {
        return $this->StoreUrl ?? null;
    }

    /**
     * @return $this
     */
    public function setStoreUrl(?string $value = null)
    {
        $this->StoreUrl = $value;

        return $this;
    }

    /**
     * @see TargetDeviceTypeEnum
     *
     * @return string[]|null
     */
    public function getTargetDeviceType(): ?array
    {
        return $this->TargetDeviceType ?? null;
    }

    /**
     * @see TargetDeviceTypeEnum
     *
     * @param string[]|null $value
     *
     * @return $this
     */
    public function setTargetDeviceType(?array $value = null)
    {
        $this->TargetDeviceType = $value;

        return $this;
    }

    /**
     * @see TargetCarrierEnum
     */
    public function getTargetCarrier(): ?string
    {
        return $this->TargetCarrier ?? null;
    }

    /**
     * @see TargetCarrierEnum
     *
     * @return $this
     */
    public function setTargetCarrier(?string $value = null)
    {
        $this->TargetCarrier = $value;

        return $this;
    }

    public function getTargetOperatingSystemVersion(): ?string
    {
        return $this->TargetOperatingSystemVersion ?? null;
    }

    /**
     * @return $this
     */
    public function setTargetOperatingSystemVersion(?string $value = null)
    {
        $this->TargetOperatingSystemVersion = $value;

        return $this;
    }

    public function getAppIconModeration(): ?ExtensionModeration
    {
        return $this->AppIconModeration ?? null;
    }

    /**
     * @return $this
     */
    public function setAppIconModeration(?ExtensionModeration $value = null)
    {
        $this->AppIconModeration = $value;

        return $this;
    }

    /**
     * @see MobileOperatingSystemTypeEnum
     */
    public function getAppOperatingSystemType(): ?string
    {
        return $this->AppOperatingSystemType ?? null;
    }

    /**
     * @see MobileOperatingSystemTypeEnum
     *
     * @return $this
     */
    public function setAppOperatingSystemType(?string $value = null)
    {
        $this->AppOperatingSystemType = $value;

        return $this;
    }

    /**
     * @see AppAvailabilityStatusEnum
     */
    public function getAppAvailabilityStatus(): ?string
    {
        return $this->AppAvailabilityStatus ?? null;
    }

    /**
     * @see AppAvailabilityStatusEnum
     *
     * @return $this
     */
    public function setAppAvailabilityStatus(?string $value = null)
    {
        $this->AppAvailabilityStatus = $value;

        return $this;
    }
}
