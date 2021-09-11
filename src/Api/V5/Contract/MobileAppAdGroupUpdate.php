<?php

declare(strict_types=1);

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
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets TargetDeviceType.
     *
     * @see TargetDeviceTypeEnum
     *
     * @return string[]|null
     */
    public function getTargetDeviceType(): ?array
    {
        return $this->TargetDeviceType ?? null;
    }

    /**
     * Sets TargetDeviceType.
     *
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
     * Gets TargetCarrier.
     *
     * @see TargetCarrierEnum
     */
    public function getTargetCarrier(): ?string
    {
        return $this->TargetCarrier ?? null;
    }

    /**
     * Sets TargetCarrier.
     *
     * @see TargetCarrierEnum
     *
     * @return $this
     */
    public function setTargetCarrier(?string $value = null)
    {
        $this->TargetCarrier = $value;

        return $this;
    }

    /**
     * Gets TargetOperatingSystemVersion.
     */
    public function getTargetOperatingSystemVersion(): ?string
    {
        return $this->TargetOperatingSystemVersion ?? null;
    }

    /**
     * Sets TargetOperatingSystemVersion.
     *
     * @return $this
     */
    public function setTargetOperatingSystemVersion(?string $value = null)
    {
        $this->TargetOperatingSystemVersion = $value;

        return $this;
    }
}
