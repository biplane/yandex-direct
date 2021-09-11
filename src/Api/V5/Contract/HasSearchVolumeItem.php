<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class HasSearchVolumeItem
{
//    Can be omit.
//    protected $Keyword = null;

//    Can be omit.
//    protected $RegionIds = null;

//    Can be omit.
//    protected $AllDevices = null;

//    Can be omit.
//    protected $MobilePhones = null;

//    Can be omit.
//    protected $Tablets = null;

//    Can be omit.
//    protected $Desktops = null;

    /**
     * Creates a new instance of HasSearchVolumeItem.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets Keyword.
     */
    public function getKeyword(): ?string
    {
        return $this->Keyword ?? null;
    }

    /**
     * Sets Keyword.
     *
     * @return $this
     */
    public function setKeyword(?string $value = null)
    {
        $this->Keyword = $value;

        return $this;
    }

    /**
     * Gets RegionIds.
     *
     * @return int[]|null
     */
    public function getRegionIds(): ?array
    {
        return $this->RegionIds ?? null;
    }

    /**
     * Sets RegionIds.
     *
     * @param int[]|null $value
     *
     * @return $this
     */
    public function setRegionIds(?array $value = null)
    {
        $this->RegionIds = $value;

        return $this;
    }

    /**
     * Gets AllDevices.
     *
     * @see YesNoEnum
     */
    public function getAllDevices(): ?string
    {
        return $this->AllDevices ?? null;
    }

    /**
     * Sets AllDevices.
     *
     * @see YesNoEnum
     *
     * @return $this
     */
    public function setAllDevices(?string $value = null)
    {
        $this->AllDevices = $value;

        return $this;
    }

    /**
     * Gets MobilePhones.
     *
     * @see YesNoEnum
     */
    public function getMobilePhones(): ?string
    {
        return $this->MobilePhones ?? null;
    }

    /**
     * Sets MobilePhones.
     *
     * @see YesNoEnum
     *
     * @return $this
     */
    public function setMobilePhones(?string $value = null)
    {
        $this->MobilePhones = $value;

        return $this;
    }

    /**
     * Gets Tablets.
     *
     * @see YesNoEnum
     */
    public function getTablets(): ?string
    {
        return $this->Tablets ?? null;
    }

    /**
     * Sets Tablets.
     *
     * @see YesNoEnum
     *
     * @return $this
     */
    public function setTablets(?string $value = null)
    {
        $this->Tablets = $value;

        return $this;
    }

    /**
     * Gets Desktops.
     *
     * @see YesNoEnum
     */
    public function getDesktops(): ?string
    {
        return $this->Desktops ?? null;
    }

    /**
     * Sets Desktops.
     *
     * @see YesNoEnum
     *
     * @return $this
     */
    public function setDesktops(?string $value = null)
    {
        $this->Desktops = $value;

        return $this;
    }
}
