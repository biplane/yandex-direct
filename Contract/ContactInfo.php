<?php

namespace Biplane\YandexDirectBundle\Contract;

/**
 * @codeCoverageIgnore
 */
class ContactInfo
{
    /**
     * @var string
     */
    protected $ContactPerson;
    /**
     * @var string
     */
    protected $Country;
    /**
     * @var string
     */
    protected $CountryCode;
    /**
     * @var string
     */
    protected $City;
    /**
     * @var string
     */
    protected $Street;
    /**
     * @var string
     */
    protected $House;
    /**
     * @var string
     */
    protected $Build;
    /**
     * @var string
     */
    protected $Apart;
    /**
     * @var string
     */
    protected $CityCode;
    /**
     * @var string
     */
    protected $Phone;
    /**
     * @var string
     */
    protected $PhoneExt;
    /**
     * @var string
     */
    protected $CompanyName;
    /**
     * @var string
     */
    protected $IMClient;
    /**
     * @var string
     */
    protected $IMLogin;
    /**
     * @var string
     */
    protected $ExtraMessage;
    /**
     * @var string
     */
    protected $ContactEmail;
    /**
     * @var string
     */
    protected $WorkTime;
    /**
     * @var string
     */
    protected $OGRN;
    /**
     * @var MapPoint
     */
    protected $PointOnMap;

    /**
     * @return string
     */
    public function getContactPerson()
    {
        return $this->ContactPerson;
    }

    /**
     * @param string $ContactPerson
     * @return ContactInfo
     */
    public function setContactPerson($ContactPerson)
    {
        $this->ContactPerson = $ContactPerson;

        return $this;
    }

    /**
     * @return string
     */
    public function getCountry()
    {
        return $this->Country;
    }

    /**
     * @param string $Country
     * @return ContactInfo
     */
    public function setCountry($Country)
    {
        $this->Country = $Country;

        return $this;
    }

    /**
     * @return string
     */
    public function getCountryCode()
    {
        return $this->CountryCode;
    }

    /**
     * @param string $CountryCode
     * @return ContactInfo
     */
    public function setCountryCode($CountryCode)
    {
        $this->CountryCode = $CountryCode;

        return $this;
    }

    /**
     * @return string
     */
    public function getCity()
    {
        return $this->City;
    }

    /**
     * @param string $City
     * @return ContactInfo
     */
    public function setCity($City)
    {
        $this->City = $City;

        return $this;
    }

    /**
     * @return string
     */
    public function getStreet()
    {
        return $this->Street;
    }

    /**
     * @param string $Street
     * @return ContactInfo
     */
    public function setStreet($Street)
    {
        $this->Street = $Street;

        return $this;
    }

    /**
     * @return string
     */
    public function getHouse()
    {
        return $this->House;
    }

    /**
     * @param string $House
     * @return ContactInfo
     */
    public function setHouse($House)
    {
        $this->House = $House;

        return $this;
    }

    /**
     * @return string
     */
    public function getBuild()
    {
        return $this->Build;
    }

    /**
     * @param string $Build
     * @return ContactInfo
     */
    public function setBuild($Build)
    {
        $this->Build = $Build;

        return $this;
    }

    /**
     * @return string
     */
    public function getApart()
    {
        return $this->Apart;
    }

    /**
     * @param string $Apart
     * @return ContactInfo
     */
    public function setApart($Apart)
    {
        $this->Apart = $Apart;

        return $this;
    }

    /**
     * @return string
     */
    public function getCityCode()
    {
        return $this->CityCode;
    }

    /**
     * @param string $CityCode
     * @return ContactInfo
     */
    public function setCityCode($CityCode)
    {
        $this->CityCode = $CityCode;

        return $this;
    }

    /**
     * @return string
     */
    public function getPhone()
    {
        return $this->Phone;
    }

    /**
     * @param string $Phone
     * @return ContactInfo
     */
    public function setPhone($Phone)
    {
        $this->Phone = $Phone;

        return $this;
    }

    /**
     * @return string
     */
    public function getPhoneExt()
    {
        return $this->PhoneExt;
    }

    /**
     * @param string $PhoneExt
     * @return ContactInfo
     */
    public function setPhoneExt($PhoneExt)
    {
        $this->PhoneExt = $PhoneExt;

        return $this;
    }

    /**
     * @return string
     */
    public function getCompanyName()
    {
        return $this->CompanyName;
    }

    /**
     * @param string $CompanyName
     * @return ContactInfo
     */
    public function setCompanyName($CompanyName)
    {
        $this->CompanyName = $CompanyName;

        return $this;
    }

    /**
     * @return string
     */
    public function getIMClient()
    {
        return $this->IMClient;
    }

    /**
     * @param string $IMClient
     * @return ContactInfo
     */
    public function setIMClient($IMClient)
    {
        $this->IMClient = $IMClient;

        return $this;
    }

    /**
     * @return string
     */
    public function getIMLogin()
    {
        return $this->IMLogin;
    }

    /**
     * @param string $IMLogin
     * @return ContactInfo
     */
    public function setIMLogin($IMLogin)
    {
        $this->IMLogin = $IMLogin;

        return $this;
    }

    /**
     * @return string
     */
    public function getExtraMessage()
    {
        return $this->ExtraMessage;
    }

    /**
     * @param string $ExtraMessage
     * @return ContactInfo
     */
    public function setExtraMessage($ExtraMessage)
    {
        $this->ExtraMessage = $ExtraMessage;

        return $this;
    }

    /**
     * @return string
     */
    public function getContactEmail()
    {
        return $this->ContactEmail;
    }

    /**
     * @param string $ContactEmail
     * @return ContactInfo
     */
    public function setContactEmail($ContactEmail)
    {
        $this->ContactEmail = $ContactEmail;

        return $this;
    }

    /**
     * @return string
     */
    public function getWorkTime()
    {
        return $this->WorkTime;
    }

    /**
     * @param string $WorkTime
     * @return ContactInfo
     */
    public function setWorkTime($WorkTime)
    {
        $this->WorkTime = $WorkTime;

        return $this;
    }

    /**
     * @return string
     */
    public function getOGRN()
    {
        return $this->OGRN;
    }

    /**
     * @param string $OGRN
     * @return ContactInfo
     */
    public function setOGRN($OGRN)
    {
        $this->OGRN = $OGRN;

        return $this;
    }

    /**
     * @return MapPoint
     */
    public function getPointOnMap()
    {
        return $this->PointOnMap;
    }

    /**
     * @param MapPoint $PointOnMap
     * @return ContactInfo
     */
    public function setPointOnMap(MapPoint $PointOnMap)
    {
        $this->PointOnMap = $PointOnMap;

        return $this;
    }
}