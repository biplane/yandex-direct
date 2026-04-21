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
//    protected $Keyword;

//    Can be omitted.
//    protected $RegionIds;

//    Can be omitted.
//    protected $AllDevices;

//    Can be omitted.
//    protected $MobilePhones;

//    Can be omitted.
//    protected $Tablets;

//    Can be omitted.
//    protected $Desktops;

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
     * Get Keyword
     */
    public function getKeyword(): ?string
    {
        return $this->Keyword ?? null;
    }

    /**
     * Set Keyword
     *
     * @return $this
     */
    public function setKeyword(?string $value)
    {
        $this->Keyword = $value;

        return $this;
    }

    /**
     * Get RegionIds
     *
     * @return list<int>
     */
    public function getRegionIds(): array
    {
        return $this->RegionIds ?? [];
    }

    /**
     * Set RegionIds
     *
     * @param list<int> $value
     *
     * @return $this
     */
    public function setRegionIds(array $value)
    {
        $this->RegionIds = $value;

        return $this;
    }

    /**
     * Get AllDevices
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\YesNoEnum
     *
     * @return 'YES'|'NO'|null
     */
    public function getAllDevices(): ?string
    {
        return $this->AllDevices ?? null;
    }

    /**
     * Set AllDevices
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\YesNoEnum
     *
     * @param 'YES'|'NO'|null $value
     *
     * @return $this
     */
    public function setAllDevices(?string $value)
    {
        $this->AllDevices = $value;

        return $this;
    }

    /**
     * Get MobilePhones
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\YesNoEnum
     *
     * @return 'YES'|'NO'|null
     */
    public function getMobilePhones(): ?string
    {
        return $this->MobilePhones ?? null;
    }

    /**
     * Set MobilePhones
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\YesNoEnum
     *
     * @param 'YES'|'NO'|null $value
     *
     * @return $this
     */
    public function setMobilePhones(?string $value)
    {
        $this->MobilePhones = $value;

        return $this;
    }

    /**
     * Get Tablets
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\YesNoEnum
     *
     * @return 'YES'|'NO'|null
     */
    public function getTablets(): ?string
    {
        return $this->Tablets ?? null;
    }

    /**
     * Set Tablets
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\YesNoEnum
     *
     * @param 'YES'|'NO'|null $value
     *
     * @return $this
     */
    public function setTablets(?string $value)
    {
        $this->Tablets = $value;

        return $this;
    }

    /**
     * Get Desktops
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\YesNoEnum
     *
     * @return 'YES'|'NO'|null
     */
    public function getDesktops(): ?string
    {
        return $this->Desktops ?? null;
    }

    /**
     * Set Desktops
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\YesNoEnum
     *
     * @param 'YES'|'NO'|null $value
     *
     * @return $this
     */
    public function setDesktops(?string $value)
    {
        $this->Desktops = $value;

        return $this;
    }
}
