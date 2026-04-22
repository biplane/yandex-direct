<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class MobileAppAdGroupUpdate
{
//    Can be omitted.
//    protected $TargetDeviceType;

//    Can be omitted.
//    protected $TargetCarrier;

//    Can be omitted.
//    protected $TargetOperatingSystemVersion;

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
}
