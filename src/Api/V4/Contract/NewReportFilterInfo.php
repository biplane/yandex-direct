<?php

namespace Biplane\YandexDirect\Api\V4\Contract;

/**
 * Auto-generated code.
 */
class NewReportFilterInfo
{

    protected $PageType = null;

    protected $PositionType = null;

    protected $Banner = null;

    protected $Geo = null;

    protected $Phrase = null;

    protected $PageName = null;

    protected $StatGoals = null;

    protected $WithImage = null;

    protected $DeviceType = null;

    protected $Age = null;

    protected $Gender = null;

    protected $CarrierType = null;

    protected $MobilePlatform = null;

    /**
     * Creates a new instance of NewReportFilterInfo.
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets PageType.
     *
     * @return string|null
     */
    public function getPageType()
    {
        return $this->PageType;
    }

    /**
     * Sets PageType.
     *
     * @param string|null $value
     * @return self
     */
    public function setPageType($value = null)
    {
        $this->PageType = $value;

        return $this;
    }

    /**
     * Gets PositionType.
     *
     * @return string|null
     */
    public function getPositionType()
    {
        return $this->PositionType;
    }

    /**
     * Sets PositionType.
     *
     * @param string|null $value
     * @return self
     */
    public function setPositionType($value = null)
    {
        $this->PositionType = $value;

        return $this;
    }

    /**
     * Gets Banner.
     *
     * @return int[]|null
     */
    public function getBanner()
    {
        return $this->Banner;
    }

    /**
     * Sets Banner.
     *
     * @param int[]|null $value
     * @return self
     */
    public function setBanner(array $value = null)
    {
        $this->Banner = $value;

        return $this;
    }

    /**
     * Gets Geo.
     *
     * @return int[]|null
     */
    public function getGeo()
    {
        return $this->Geo;
    }

    /**
     * Sets Geo.
     *
     * @param int[]|null $value
     * @return self
     */
    public function setGeo(array $value = null)
    {
        $this->Geo = $value;

        return $this;
    }

    /**
     * Gets Phrase.
     *
     * @return string[]|null
     */
    public function getPhrase()
    {
        return $this->Phrase;
    }

    /**
     * Sets Phrase.
     *
     * @param string[]|null $value
     * @return self
     */
    public function setPhrase(array $value = null)
    {
        $this->Phrase = $value;

        return $this;
    }

    /**
     * Gets PageName.
     *
     * @return string[]|null
     */
    public function getPageName()
    {
        return $this->PageName;
    }

    /**
     * Sets PageName.
     *
     * @param string[]|null $value
     * @return self
     */
    public function setPageName(array $value = null)
    {
        $this->PageName = $value;

        return $this;
    }

    /**
     * Gets StatGoals.
     *
     * @return int[]|null
     */
    public function getStatGoals()
    {
        return $this->StatGoals;
    }

    /**
     * Sets StatGoals.
     *
     * @param int[]|null $value
     * @return self
     */
    public function setStatGoals(array $value = null)
    {
        $this->StatGoals = $value;

        return $this;
    }

    /**
     * Gets WithImage.
     *
     * @return string|null
     */
    public function getWithImage()
    {
        return $this->WithImage;
    }

    /**
     * Sets WithImage.
     *
     * @param string|null $value
     * @return self
     */
    public function setWithImage($value = null)
    {
        $this->WithImage = $value;

        return $this;
    }

    /**
     * Gets DeviceType.
     *
     * @return string|null
     */
    public function getDeviceType()
    {
        return $this->DeviceType;
    }

    /**
     * Sets DeviceType.
     *
     * @param string|null $value
     * @return self
     */
    public function setDeviceType($value = null)
    {
        $this->DeviceType = $value;

        return $this;
    }

    /**
     * Gets Age.
     *
     * @return string[]|null
     */
    public function getAge()
    {
        return $this->Age;
    }

    /**
     * Sets Age.
     *
     * @param string[]|null $value
     * @return self
     */
    public function setAge(array $value = null)
    {
        $this->Age = $value;

        return $this;
    }

    /**
     * Gets Gender.
     *
     * @return string[]|null
     */
    public function getGender()
    {
        return $this->Gender;
    }

    /**
     * Sets Gender.
     *
     * @param string[]|null $value
     * @return self
     */
    public function setGender(array $value = null)
    {
        $this->Gender = $value;

        return $this;
    }

    /**
     * Gets CarrierType.
     *
     * @return string[]|null
     */
    public function getCarrierType()
    {
        return $this->CarrierType;
    }

    /**
     * Sets CarrierType.
     *
     * @param string[]|null $value
     * @return self
     */
    public function setCarrierType(array $value = null)
    {
        $this->CarrierType = $value;

        return $this;
    }

    /**
     * Gets MobilePlatform.
     *
     * @return string[]|null
     */
    public function getMobilePlatform()
    {
        return $this->MobilePlatform;
    }

    /**
     * Sets MobilePlatform.
     *
     * @param string[]|null $value
     * @return self
     */
    public function setMobilePlatform(array $value = null)
    {
        $this->MobilePlatform = $value;

        return $this;
    }


}

