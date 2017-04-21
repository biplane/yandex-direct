<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class HasSearchVolumeItem
{

    protected $Keyword = null;

    protected $RegionIds = null;

    protected $AllDevices = null;

    protected $MobilePhones = null;

    protected $Tablets = null;

    protected $Desktops = null;

    /**
     * Creates a new instance of HasSearchVolumeItem.
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets Keyword.
     *
     * @return string|null
     */
    public function getKeyword()
    {
        return $this->Keyword;
    }

    /**
     * Sets Keyword.
     *
     * @param string|null $value
     * @return self
     */
    public function setKeyword($value = null)
    {
        $this->Keyword = $value;

        return $this;
    }

    /**
     * Gets RegionIds.
     *
     * @return int[]|null
     */
    public function getRegionIds()
    {
        return $this->RegionIds;
    }

    /**
     * Sets RegionIds.
     *
     * @param int[]|null $value
     * @return self
     */
    public function setRegionIds(array $value = null)
    {
        $this->RegionIds = $value;

        return $this;
    }

    /**
     * Gets AllDevices.
     *
     * @return string|null
     * @see YesNoEnum
     */
    public function getAllDevices()
    {
        return $this->AllDevices;
    }

    /**
     * Sets AllDevices.
     *
     * @param string|null $value
     * @return self
     * @see YesNoEnum
     */
    public function setAllDevices($value = null)
    {
        $this->AllDevices = $value;

        return $this;
    }

    /**
     * Gets MobilePhones.
     *
     * @return string|null
     * @see YesNoEnum
     */
    public function getMobilePhones()
    {
        return $this->MobilePhones;
    }

    /**
     * Sets MobilePhones.
     *
     * @param string|null $value
     * @return self
     * @see YesNoEnum
     */
    public function setMobilePhones($value = null)
    {
        $this->MobilePhones = $value;

        return $this;
    }

    /**
     * Gets Tablets.
     *
     * @return string|null
     * @see YesNoEnum
     */
    public function getTablets()
    {
        return $this->Tablets;
    }

    /**
     * Sets Tablets.
     *
     * @param string|null $value
     * @return self
     * @see YesNoEnum
     */
    public function setTablets($value = null)
    {
        $this->Tablets = $value;

        return $this;
    }

    /**
     * Gets Desktops.
     *
     * @return string|null
     * @see YesNoEnum
     */
    public function getDesktops()
    {
        return $this->Desktops;
    }

    /**
     * Sets Desktops.
     *
     * @param string|null $value
     * @return self
     * @see YesNoEnum
     */
    public function setDesktops($value = null)
    {
        $this->Desktops = $value;

        return $this;
    }


}

