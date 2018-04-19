<?php

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
        return isset($this->Keyword) ? $this->Keyword : null;
    }

    /**
     * Sets Keyword.
     *
     * @param string|null $value
     * @return $this
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
        return isset($this->RegionIds) ? $this->RegionIds : null;
    }

    /**
     * Sets RegionIds.
     *
     * @param int[]|null $value
     * @return $this
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
        return isset($this->AllDevices) ? $this->AllDevices : null;
    }

    /**
     * Sets AllDevices.
     *
     * @param string|null $value
     * @return $this
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
        return isset($this->MobilePhones) ? $this->MobilePhones : null;
    }

    /**
     * Sets MobilePhones.
     *
     * @param string|null $value
     * @return $this
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
        return isset($this->Tablets) ? $this->Tablets : null;
    }

    /**
     * Sets Tablets.
     *
     * @param string|null $value
     * @return $this
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
        return isset($this->Desktops) ? $this->Desktops : null;
    }

    /**
     * Sets Desktops.
     *
     * @param string|null $value
     * @return $this
     * @see YesNoEnum
     */
    public function setDesktops($value = null)
    {
        $this->Desktops = $value;

        return $this;
    }


}

