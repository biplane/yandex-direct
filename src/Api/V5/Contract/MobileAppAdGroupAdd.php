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
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    public function getStoreUrl(): string
    {
        return $this->StoreUrl;
    }

    /**
     * @return $this
     */
    public function setStoreUrl(string $value)
    {
        $this->StoreUrl = $value;

        return $this;
    }

    /**
     * @see TargetDeviceTypeEnum
     *
     * @return string[]
     */
    public function getTargetDeviceType(): array
    {
        return $this->TargetDeviceType;
    }

    /**
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
     * @see TargetCarrierEnum
     */
    public function getTargetCarrier(): string
    {
        return $this->TargetCarrier;
    }

    /**
     * @see TargetCarrierEnum
     *
     * @return $this
     */
    public function setTargetCarrier(string $value)
    {
        $this->TargetCarrier = $value;

        return $this;
    }

    public function getTargetOperatingSystemVersion(): string
    {
        return $this->TargetOperatingSystemVersion;
    }

    /**
     * @return $this
     */
    public function setTargetOperatingSystemVersion(string $value)
    {
        $this->TargetOperatingSystemVersion = $value;

        return $this;
    }
}
