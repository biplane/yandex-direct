<?php

namespace Biplane\YandexDirectBundle\Contract;

/**
 * @codeCoverageIgnore
 * @SuppressWarnings(PHPMD)
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
     * Creates a new instance.
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets the ContactPerson.
     *
     * @return string
     */
    public function getContactPerson()
    {
        return $this->ContactPerson;
    }

    /**
     * Sets the ContactPerson.
     *
     * @param string $ContactPerson
     *
     * @return ContactInfo
     */
    public function setContactPerson($ContactPerson)
    {
        $this->ContactPerson = $ContactPerson;

        return $this;
    }

    /**
     * Gets the Country.
     *
     * @return string
     */
    public function getCountry()
    {
        return $this->Country;
    }

    /**
     * Sets the Country.
     *
     * @param string $Country
     *
     * @return ContactInfo
     */
    public function setCountry($Country)
    {
        $this->Country = $Country;

        return $this;
    }

    /**
     * Gets the CountryCode.
     *
     * @return string
     */
    public function getCountryCode()
    {
        return $this->CountryCode;
    }

    /**
     * Sets the CountryCode.
     *
     * @param string $CountryCode
     *
     * @return ContactInfo
     */
    public function setCountryCode($CountryCode)
    {
        $this->CountryCode = $CountryCode;

        return $this;
    }

    /**
     * Gets the City.
     *
     * @return string
     */
    public function getCity()
    {
        return $this->City;
    }

    /**
     * Sets the City.
     *
     * @param string $City
     *
     * @return ContactInfo
     */
    public function setCity($City)
    {
        $this->City = $City;

        return $this;
    }

    /**
     * Gets the Street.
     *
     * @return string
     */
    public function getStreet()
    {
        return $this->Street;
    }

    /**
     * Sets the Street.
     *
     * @param string $Street
     *
     * @return ContactInfo
     */
    public function setStreet($Street)
    {
        $this->Street = $Street;

        return $this;
    }

    /**
     * Gets the House.
     *
     * @return string
     */
    public function getHouse()
    {
        return $this->House;
    }

    /**
     * Sets the House.
     *
     * @param string $House
     *
     * @return ContactInfo
     */
    public function setHouse($House)
    {
        $this->House = $House;

        return $this;
    }

    /**
     * Gets the Build.
     *
     * @return string
     */
    public function getBuild()
    {
        return $this->Build;
    }

    /**
     * Sets the Build.
     *
     * @param string $Build
     *
     * @return ContactInfo
     */
    public function setBuild($Build)
    {
        $this->Build = $Build;

        return $this;
    }

    /**
     * Gets the Apart.
     *
     * @return string
     */
    public function getApart()
    {
        return $this->Apart;
    }

    /**
     * Sets the Apart.
     *
     * @param string $Apart
     *
     * @return ContactInfo
     */
    public function setApart($Apart)
    {
        $this->Apart = $Apart;

        return $this;
    }

    /**
     * Gets the CityCode.
     *
     * @return string
     */
    public function getCityCode()
    {
        return $this->CityCode;
    }

    /**
     * Sets the CityCode.
     *
     * @param string $CityCode
     *
     * @return ContactInfo
     */
    public function setCityCode($CityCode)
    {
        $this->CityCode = $CityCode;

        return $this;
    }

    /**
     * Gets the Phone.
     *
     * @return string
     */
    public function getPhone()
    {
        return $this->Phone;
    }

    /**
     * Sets the Phone.
     *
     * @param string $Phone
     *
     * @return ContactInfo
     */
    public function setPhone($Phone)
    {
        $this->Phone = $Phone;

        return $this;
    }

    /**
     * Gets the PhoneExt.
     *
     * @return string
     */
    public function getPhoneExt()
    {
        return $this->PhoneExt;
    }

    /**
     * Sets the PhoneExt.
     *
     * @param string $PhoneExt
     *
     * @return ContactInfo
     */
    public function setPhoneExt($PhoneExt)
    {
        $this->PhoneExt = $PhoneExt;

        return $this;
    }

    /**
     * Gets the CompanyName.
     *
     * @return string
     */
    public function getCompanyName()
    {
        return $this->CompanyName;
    }

    /**
     * Sets the CompanyName.
     *
     * @param string $CompanyName
     *
     * @return ContactInfo
     */
    public function setCompanyName($CompanyName)
    {
        $this->CompanyName = $CompanyName;

        return $this;
    }

    /**
     * Gets the IMClient.
     *
     * @return string
     */
    public function getIMClient()
    {
        return $this->IMClient;
    }

    /**
     * Sets the IMClient.
     *
     * @param string $IMClient
     *
     * @return ContactInfo
     */
    public function setIMClient($IMClient)
    {
        $this->IMClient = $IMClient;

        return $this;
    }

    /**
     * Gets the IMLogin.
     *
     * @return string
     */
    public function getIMLogin()
    {
        return $this->IMLogin;
    }

    /**
     * Sets the IMLogin.
     *
     * @param string $IMLogin
     *
     * @return ContactInfo
     */
    public function setIMLogin($IMLogin)
    {
        $this->IMLogin = $IMLogin;

        return $this;
    }

    /**
     * Gets the ExtraMessage.
     *
     * @return string
     */
    public function getExtraMessage()
    {
        return $this->ExtraMessage;
    }

    /**
     * Sets the ExtraMessage.
     *
     * @param string $ExtraMessage
     *
     * @return ContactInfo
     */
    public function setExtraMessage($ExtraMessage)
    {
        $this->ExtraMessage = $ExtraMessage;

        return $this;
    }

    /**
     * Gets the ContactEmail.
     *
     * @return string
     */
    public function getContactEmail()
    {
        return $this->ContactEmail;
    }

    /**
     * Sets the ContactEmail.
     *
     * @param string $ContactEmail
     *
     * @return ContactInfo
     */
    public function setContactEmail($ContactEmail)
    {
        $this->ContactEmail = $ContactEmail;

        return $this;
    }

    /**
     * Gets the WorkTime.
     *
     * @return string
     */
    public function getWorkTime()
    {
        return $this->WorkTime;
    }

    /**
     * Sets the WorkTime.
     *
     * @param string $WorkTime
     *
     * @return ContactInfo
     */
    public function setWorkTime($WorkTime)
    {
        $this->WorkTime = $WorkTime;

        return $this;
    }

    /**
     * Gets the OGRN.
     *
     * @return string
     */
    public function getOGRN()
    {
        return $this->OGRN;
    }

    /**
     * Sets the OGRN.
     *
     * @param string $OGRN
     *
     * @return ContactInfo
     */
    public function setOGRN($OGRN)
    {
        $this->OGRN = $OGRN;

        return $this;
    }

    /**
     * Gets the PointOnMap.
     *
     * @return MapPoint
     */
    public function getPointOnMap()
    {
        return $this->PointOnMap;
    }

    /**
     * Sets the PointOnMap.
     *
     * @param MapPoint $PointOnMap
     *
     * @return ContactInfo
     */
    public function setPointOnMap(MapPoint $PointOnMap)
    {
        $this->PointOnMap = $PointOnMap;

        return $this;
    }
}