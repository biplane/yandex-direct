<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class MobileAppAdGroupGet
{
//    Can be omitted.
//    protected $StoreUrl;

//    Can be omitted.
//    protected $TargetDeviceType;

//    Can be omitted.
//    protected $TargetCarrier;

//    Can be omitted.
//    protected $TargetOperatingSystemVersion;

//    Can be omitted.
//    protected $AppIconModeration;

//    Can be omitted.
//    protected $AppOperatingSystemType;

//    Can be omitted.
//    protected $AppAvailabilityStatus;

    /**
     * Create a new instance.
     *
     * @return static
     */
    public static function create(): static
    {
        return new static();
    }

    /**
     * Get StoreUrl
     */
    public function getStoreUrl(): ?string
    {
        return $this->StoreUrl ?? null;
    }

    /**
     * Set StoreUrl
     *
     * @return $this
     */
    public function setStoreUrl(?string $value)
    {
        $this->StoreUrl = $value;

        return $this;
    }

    /**
     * Get TargetDeviceType
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\TargetDeviceTypeEnum
     *
     * @return list<'DEVICE_TYPE_MOBILE'|'DEVICE_TYPE_TABLET'>
     */
    public function getTargetDeviceType(): array
    {
        return $this->TargetDeviceType ?? [];
    }

    /**
     * Set TargetDeviceType
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\TargetDeviceTypeEnum
     *
     * @param list<'DEVICE_TYPE_MOBILE'|'DEVICE_TYPE_TABLET'> $value
     *
     * @return $this
     */
    public function setTargetDeviceType(array $value)
    {
        $this->TargetDeviceType = $value;

        return $this;
    }

    /**
     * Get TargetCarrier
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\TargetCarrierEnum
     *
     * @return 'WI_FI_ONLY'|'WI_FI_AND_CELLULAR'|null
     */
    public function getTargetCarrier(): ?string
    {
        return $this->TargetCarrier ?? null;
    }

    /**
     * Set TargetCarrier
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\TargetCarrierEnum
     *
     * @param 'WI_FI_ONLY'|'WI_FI_AND_CELLULAR'|null $value
     *
     * @return $this
     */
    public function setTargetCarrier(?string $value)
    {
        $this->TargetCarrier = $value;

        return $this;
    }

    /**
     * Get TargetOperatingSystemVersion
     */
    public function getTargetOperatingSystemVersion(): ?string
    {
        return $this->TargetOperatingSystemVersion ?? null;
    }

    /**
     * Set TargetOperatingSystemVersion
     *
     * @return $this
     */
    public function setTargetOperatingSystemVersion(?string $value)
    {
        $this->TargetOperatingSystemVersion = $value;

        return $this;
    }

    /**
     * Get AppIconModeration
     */
    public function getAppIconModeration(): ?ExtensionModeration
    {
        return $this->AppIconModeration ?? null;
    }

    /**
     * Set AppIconModeration
     *
     * @return $this
     */
    public function setAppIconModeration(?ExtensionModeration $value)
    {
        $this->AppIconModeration = $value;

        return $this;
    }

    /**
     * Get AppOperatingSystemType
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\MobileOperatingSystemTypeEnum
     *
     * @return 'IOS'|'ANDROID'|'OS_TYPE_OTHER'|'OS_TYPE_UNKNOWN'|null
     */
    public function getAppOperatingSystemType(): ?string
    {
        return $this->AppOperatingSystemType ?? null;
    }

    /**
     * Set AppOperatingSystemType
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\MobileOperatingSystemTypeEnum
     *
     * @param 'IOS'|'ANDROID'|'OS_TYPE_OTHER'|'OS_TYPE_UNKNOWN'|null $value
     *
     * @return $this
     */
    public function setAppOperatingSystemType(?string $value)
    {
        $this->AppOperatingSystemType = $value;

        return $this;
    }

    /**
     * Get AppAvailabilityStatus
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\AppAvailabilityStatusEnum
     *
     * @return 'UNPROCESSED'|'AVAILABLE'|'NOT_AVAILABLE'|null
     */
    public function getAppAvailabilityStatus(): ?string
    {
        return $this->AppAvailabilityStatus ?? null;
    }

    /**
     * Set AppAvailabilityStatus
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\AppAvailabilityStatusEnum
     *
     * @param 'UNPROCESSED'|'AVAILABLE'|'NOT_AVAILABLE'|null $value
     *
     * @return $this
     */
    public function setAppAvailabilityStatus(?string $value)
    {
        $this->AppAvailabilityStatus = $value;

        return $this;
    }
}
