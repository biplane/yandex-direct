<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class MobileAppAdGroupAdd
{
    /** @var string */
    protected $StoreUrl;

    /** @var non-empty-list<'DEVICE_TYPE_MOBILE'|'DEVICE_TYPE_TABLET'> */
    protected $TargetDeviceType;

    /** @var 'WI_FI_ONLY'|'WI_FI_AND_CELLULAR' */
    protected $TargetCarrier;

    /** @var string */
    protected $TargetOperatingSystemVersion;

    /**
     * Create a new instance.
     *
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    /**
     * Get StoreUrl
     */
    public function getStoreUrl(): string
    {
        return $this->StoreUrl;
    }

    /**
     * Set StoreUrl
     *
     * @return $this
     */
    public function setStoreUrl(string $value)
    {
        $this->StoreUrl = $value;

        return $this;
    }

    /**
     * Get TargetDeviceType
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\TargetDeviceTypeEnum
     *
     * @return non-empty-list<'DEVICE_TYPE_MOBILE'|'DEVICE_TYPE_TABLET'>
     */
    public function getTargetDeviceType(): array
    {
        return $this->TargetDeviceType;
    }

    /**
     * Set TargetDeviceType
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\TargetDeviceTypeEnum
     *
     * @param non-empty-list<'DEVICE_TYPE_MOBILE'|'DEVICE_TYPE_TABLET'> $value
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
     * @return 'WI_FI_ONLY'|'WI_FI_AND_CELLULAR'
     */
    public function getTargetCarrier(): string
    {
        return $this->TargetCarrier;
    }

    /**
     * Set TargetCarrier
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\TargetCarrierEnum
     *
     * @param 'WI_FI_ONLY'|'WI_FI_AND_CELLULAR' $value
     *
     * @return $this
     */
    public function setTargetCarrier(string $value)
    {
        $this->TargetCarrier = $value;

        return $this;
    }

    /**
     * Get TargetOperatingSystemVersion
     */
    public function getTargetOperatingSystemVersion(): string
    {
        return $this->TargetOperatingSystemVersion;
    }

    /**
     * Set TargetOperatingSystemVersion
     *
     * @return $this
     */
    public function setTargetOperatingSystemVersion(string $value)
    {
        $this->TargetOperatingSystemVersion = $value;

        return $this;
    }
}
