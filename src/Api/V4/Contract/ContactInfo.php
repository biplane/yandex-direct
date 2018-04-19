<?php

namespace Biplane\YandexDirect\Api\V4\Contract;

/**
 * Auto-generated code.
 */
class ContactInfo
{

    protected $ContactPerson = null;

    protected $Country = null;

    protected $CountryCode = null;

    protected $City = null;

    protected $Street = null;

    protected $House = null;

    protected $Build = null;

    protected $Apart = null;

    protected $CityCode = null;

    protected $Phone = null;

    protected $PhoneExt = null;

    protected $CompanyName = null;

    protected $IMClient = null;

    protected $IMLogin = null;

    protected $ExtraMessage = null;

    protected $ContactEmail = null;

    protected $WorkTime = null;

    protected $OGRN = null;

    protected $PointOnMap = null;

    /**
     * Creates a new instance of ContactInfo.
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets ContactPerson.
     *
     * @return string|null
     */
    public function getContactPerson()
    {
        return $this->ContactPerson;
    }

    /**
     * Sets ContactPerson.
     *
     * @param string|null $value
     * @return $this
     */
    public function setContactPerson($value = null)
    {
        $this->ContactPerson = $value;

        return $this;
    }

    /**
     * Gets Country.
     *
     * @return string
     */
    public function getCountry()
    {
        return $this->Country;
    }

    /**
     * Sets Country.
     *
     * @param string $value
     * @return $this
     */
    public function setCountry($value)
    {
        $this->Country = $value;

        return $this;
    }

    /**
     * Gets CountryCode.
     *
     * @return string
     */
    public function getCountryCode()
    {
        return $this->CountryCode;
    }

    /**
     * Sets CountryCode.
     *
     * @param string $value
     * @return $this
     */
    public function setCountryCode($value)
    {
        $this->CountryCode = $value;

        return $this;
    }

    /**
     * Gets City.
     *
     * @return string
     */
    public function getCity()
    {
        return $this->City;
    }

    /**
     * Sets City.
     *
     * @param string $value
     * @return $this
     */
    public function setCity($value)
    {
        $this->City = $value;

        return $this;
    }

    /**
     * Gets Street.
     *
     * @return string|null
     */
    public function getStreet()
    {
        return $this->Street;
    }

    /**
     * Sets Street.
     *
     * @param string|null $value
     * @return $this
     */
    public function setStreet($value = null)
    {
        $this->Street = $value;

        return $this;
    }

    /**
     * Gets House.
     *
     * @return string|null
     */
    public function getHouse()
    {
        return $this->House;
    }

    /**
     * Sets House.
     *
     * @param string|null $value
     * @return $this
     */
    public function setHouse($value = null)
    {
        $this->House = $value;

        return $this;
    }

    /**
     * Gets Build.
     *
     * @return string|null
     */
    public function getBuild()
    {
        return $this->Build;
    }

    /**
     * Sets Build.
     *
     * @param string|null $value
     * @return $this
     */
    public function setBuild($value = null)
    {
        $this->Build = $value;

        return $this;
    }

    /**
     * Gets Apart.
     *
     * @return string|null
     */
    public function getApart()
    {
        return $this->Apart;
    }

    /**
     * Sets Apart.
     *
     * @param string|null $value
     * @return $this
     */
    public function setApart($value = null)
    {
        $this->Apart = $value;

        return $this;
    }

    /**
     * Gets CityCode.
     *
     * @return string
     */
    public function getCityCode()
    {
        return $this->CityCode;
    }

    /**
     * Sets CityCode.
     *
     * @param string $value
     * @return $this
     */
    public function setCityCode($value)
    {
        $this->CityCode = $value;

        return $this;
    }

    /**
     * Gets Phone.
     *
     * @return string
     */
    public function getPhone()
    {
        return $this->Phone;
    }

    /**
     * Sets Phone.
     *
     * @param string $value
     * @return $this
     */
    public function setPhone($value)
    {
        $this->Phone = $value;

        return $this;
    }

    /**
     * Gets PhoneExt.
     *
     * @return string|null
     */
    public function getPhoneExt()
    {
        return $this->PhoneExt;
    }

    /**
     * Sets PhoneExt.
     *
     * @param string|null $value
     * @return $this
     */
    public function setPhoneExt($value = null)
    {
        $this->PhoneExt = $value;

        return $this;
    }

    /**
     * Gets CompanyName.
     *
     * @return string
     */
    public function getCompanyName()
    {
        return $this->CompanyName;
    }

    /**
     * Sets CompanyName.
     *
     * @param string $value
     * @return $this
     */
    public function setCompanyName($value)
    {
        $this->CompanyName = $value;

        return $this;
    }

    /**
     * Gets IMClient.
     *
     * @return string|null
     */
    public function getIMClient()
    {
        return $this->IMClient;
    }

    /**
     * Sets IMClient.
     *
     * @param string|null $value
     * @return $this
     */
    public function setIMClient($value = null)
    {
        $this->IMClient = $value;

        return $this;
    }

    /**
     * Gets IMLogin.
     *
     * @return string|null
     */
    public function getIMLogin()
    {
        return $this->IMLogin;
    }

    /**
     * Sets IMLogin.
     *
     * @param string|null $value
     * @return $this
     */
    public function setIMLogin($value = null)
    {
        $this->IMLogin = $value;

        return $this;
    }

    /**
     * Gets ExtraMessage.
     *
     * @return string|null
     */
    public function getExtraMessage()
    {
        return $this->ExtraMessage;
    }

    /**
     * Sets ExtraMessage.
     *
     * @param string|null $value
     * @return $this
     */
    public function setExtraMessage($value = null)
    {
        $this->ExtraMessage = $value;

        return $this;
    }

    /**
     * Gets ContactEmail.
     *
     * @return string|null
     */
    public function getContactEmail()
    {
        return $this->ContactEmail;
    }

    /**
     * Sets ContactEmail.
     *
     * @param string|null $value
     * @return $this
     */
    public function setContactEmail($value = null)
    {
        $this->ContactEmail = $value;

        return $this;
    }

    /**
     * Gets WorkTime.
     *
     * @return string
     */
    public function getWorkTime()
    {
        return $this->WorkTime;
    }

    /**
     * Sets WorkTime.
     *
     * @param string $value
     * @return $this
     */
    public function setWorkTime($value)
    {
        $this->WorkTime = $value;

        return $this;
    }

    /**
     * Gets OGRN.
     *
     * @return string|null
     */
    public function getOGRN()
    {
        return $this->OGRN;
    }

    /**
     * Sets OGRN.
     *
     * @param string|null $value
     * @return $this
     */
    public function setOGRN($value = null)
    {
        $this->OGRN = $value;

        return $this;
    }

    /**
     * Gets PointOnMap.
     *
     * @return MapPoint|null
     */
    public function getPointOnMap()
    {
        return $this->PointOnMap;
    }

    /**
     * Sets PointOnMap.
     *
     * @param MapPoint|null $value
     * @return $this
     */
    public function setPointOnMap(MapPoint $value = null)
    {
        $this->PointOnMap = $value;

        return $this;
    }


}

