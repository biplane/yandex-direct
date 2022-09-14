<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class HasSearchVolumeItem
{
//    Can be omitted.
//    protected $Keyword = null;

//    Can be omitted.
//    protected $RegionIds = null;

//    Can be omitted.
//    protected $AllDevices = null;

//    Can be omitted.
//    protected $MobilePhones = null;

//    Can be omitted.
//    protected $Tablets = null;

//    Can be omitted.
//    protected $Desktops = null;

    /**
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    public function getKeyword(): ?string
    {
        return $this->Keyword ?? null;
    }

    /**
     * @return $this
     */
    public function setKeyword(?string $value = null)
    {
        $this->Keyword = $value;

        return $this;
    }

    /**
     * @return int[]|null
     */
    public function getRegionIds(): ?array
    {
        return $this->RegionIds ?? null;
    }

    /**
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
     * @see YesNoEnum
     */
    public function getAllDevices(): ?string
    {
        return $this->AllDevices ?? null;
    }

    /**
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
     * @see YesNoEnum
     */
    public function getMobilePhones(): ?string
    {
        return $this->MobilePhones ?? null;
    }

    /**
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
     * @see YesNoEnum
     */
    public function getTablets(): ?string
    {
        return $this->Tablets ?? null;
    }

    /**
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
     * @see YesNoEnum
     */
    public function getDesktops(): ?string
    {
        return $this->Desktops ?? null;
    }

    /**
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
