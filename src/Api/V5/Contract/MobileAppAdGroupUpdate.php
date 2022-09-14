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
//    protected $TargetDeviceType = null;

//    Can be omitted.
//    protected $TargetCarrier = null;

//    Can be omitted.
//    protected $TargetOperatingSystemVersion = null;

    /**
     * @return static
     */
    public static function create()
    {
        return new static();
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
}
