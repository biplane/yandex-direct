<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class MobileAppAdGroupGet
{
//    Can be omit.
//    protected $StoreUrl = null;

//    Can be omit.
//    protected $TargetDeviceType = null;

//    Can be omit.
//    protected $TargetCarrier = null;

//    Can be omit.
//    protected $TargetOperatingSystemVersion = null;

//    Can be omit.
//    protected $AppIconModeration = null;

//    Can be omit.
//    protected $AppOperatingSystemType = null;

//    Can be omit.
//    protected $AppAvailabilityStatus = null;

    /**
     * Creates a new instance of MobileAppAdGroupGet.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets StoreUrl.
     */
    public function getStoreUrl(): ?string
    {
        return $this->StoreUrl ?? null;
    }

    /**
     * Sets StoreUrl.
     *
     * @return $this
     */
    public function setStoreUrl(?string $value = null)
    {
        $this->StoreUrl = $value;

        return $this;
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

    /**
     * Gets AppIconModeration.
     */
    public function getAppIconModeration(): ?ExtensionModeration
    {
        return $this->AppIconModeration ?? null;
    }

    /**
     * Sets AppIconModeration.
     *
     * @return $this
     */
    public function setAppIconModeration(?ExtensionModeration $value = null)
    {
        $this->AppIconModeration = $value;

        return $this;
    }

    /**
     * Gets AppOperatingSystemType.
     *
     * @see MobileOperatingSystemTypeEnum
     */
    public function getAppOperatingSystemType(): ?string
    {
        return $this->AppOperatingSystemType ?? null;
    }

    /**
     * Sets AppOperatingSystemType.
     *
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
     * Gets AppAvailabilityStatus.
     *
     * @see AppAvailabilityStatusEnum
     */
    public function getAppAvailabilityStatus(): ?string
    {
        return $this->AppAvailabilityStatus ?? null;
    }

    /**
     * Sets AppAvailabilityStatus.
     *
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
