<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class MobileAppAdGroupAdd
{
    protected $StoreUrl = null;

    protected $TargetDeviceType = [];

    protected $TargetCarrier = null;

    protected $TargetOperatingSystemVersion = null;

    /**
     * Creates a new instance of MobileAppAdGroupAdd.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets StoreUrl.
     */
    public function getStoreUrl(): string
    {
        return $this->StoreUrl;
    }

    /**
     * Sets StoreUrl.
     *
     * @return $this
     */
    public function setStoreUrl(string $value)
    {
        $this->StoreUrl = $value;

        return $this;
    }

    /**
     * Gets TargetDeviceType.
     *
     * @see TargetDeviceTypeEnum
     *
     * @return string[]
     */
    public function getTargetDeviceType(): array
    {
        return $this->TargetDeviceType;
    }

    /**
     * Sets TargetDeviceType.
     *
     * @see TargetDeviceTypeEnum
     *
     * @param string[] $value
     *
     * @return $this
     */
    public function setTargetDeviceType(array $value)
    {
        $this->TargetDeviceType = $value;

        return $this;
    }

    /**
     * Gets TargetCarrier.
     *
     * @see TargetCarrierEnum
     */
    public function getTargetCarrier(): string
    {
        return $this->TargetCarrier;
    }

    /**
     * Sets TargetCarrier.
     *
     * @see TargetCarrierEnum
     *
     * @return $this
     */
    public function setTargetCarrier(string $value)
    {
        $this->TargetCarrier = $value;

        return $this;
    }

    /**
     * Gets TargetOperatingSystemVersion.
     */
    public function getTargetOperatingSystemVersion(): string
    {
        return $this->TargetOperatingSystemVersion;
    }

    /**
     * Sets TargetOperatingSystemVersion.
     *
     * @return $this
     */
    public function setTargetOperatingSystemVersion(string $value)
    {
        $this->TargetOperatingSystemVersion = $value;

        return $this;
    }
}
