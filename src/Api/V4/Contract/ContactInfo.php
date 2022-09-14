<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V4\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
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
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    public function getContactPerson(): ?string
    {
        return $this->ContactPerson;
    }

    /**
     * @return $this
     */
    public function setContactPerson(?string $value = null)
    {
        $this->ContactPerson = $value;

        return $this;
    }

    public function getCountry(): string
    {
        return $this->Country;
    }

    /**
     * @return $this
     */
    public function setCountry(string $value)
    {
        $this->Country = $value;

        return $this;
    }

    public function getCountryCode(): string
    {
        return $this->CountryCode;
    }

    /**
     * @return $this
     */
    public function setCountryCode(string $value)
    {
        $this->CountryCode = $value;

        return $this;
    }

    public function getCity(): string
    {
        return $this->City;
    }

    /**
     * @return $this
     */
    public function setCity(string $value)
    {
        $this->City = $value;

        return $this;
    }

    public function getStreet(): ?string
    {
        return $this->Street;
    }

    /**
     * @return $this
     */
    public function setStreet(?string $value = null)
    {
        $this->Street = $value;

        return $this;
    }

    public function getHouse(): ?string
    {
        return $this->House;
    }

    /**
     * @return $this
     */
    public function setHouse(?string $value = null)
    {
        $this->House = $value;

        return $this;
    }

    public function getBuild(): ?string
    {
        return $this->Build;
    }

    /**
     * @return $this
     */
    public function setBuild(?string $value = null)
    {
        $this->Build = $value;

        return $this;
    }

    public function getApart(): ?string
    {
        return $this->Apart;
    }

    /**
     * @return $this
     */
    public function setApart(?string $value = null)
    {
        $this->Apart = $value;

        return $this;
    }

    public function getCityCode(): string
    {
        return $this->CityCode;
    }

    /**
     * @return $this
     */
    public function setCityCode(string $value)
    {
        $this->CityCode = $value;

        return $this;
    }

    public function getPhone(): string
    {
        return $this->Phone;
    }

    /**
     * @return $this
     */
    public function setPhone(string $value)
    {
        $this->Phone = $value;

        return $this;
    }

    public function getPhoneExt(): ?string
    {
        return $this->PhoneExt;
    }

    /**
     * @return $this
     */
    public function setPhoneExt(?string $value = null)
    {
        $this->PhoneExt = $value;

        return $this;
    }

    public function getCompanyName(): string
    {
        return $this->CompanyName;
    }

    /**
     * @return $this
     */
    public function setCompanyName(string $value)
    {
        $this->CompanyName = $value;

        return $this;
    }

    public function getIMClient(): ?string
    {
        return $this->IMClient;
    }

    /**
     * @return $this
     */
    public function setIMClient(?string $value = null)
    {
        $this->IMClient = $value;

        return $this;
    }

    public function getIMLogin(): ?string
    {
        return $this->IMLogin;
    }

    /**
     * @return $this
     */
    public function setIMLogin(?string $value = null)
    {
        $this->IMLogin = $value;

        return $this;
    }

    public function getExtraMessage(): ?string
    {
        return $this->ExtraMessage;
    }

    /**
     * @return $this
     */
    public function setExtraMessage(?string $value = null)
    {
        $this->ExtraMessage = $value;

        return $this;
    }

    public function getContactEmail(): ?string
    {
        return $this->ContactEmail;
    }

    /**
     * @return $this
     */
    public function setContactEmail(?string $value = null)
    {
        $this->ContactEmail = $value;

        return $this;
    }

    public function getWorkTime(): string
    {
        return $this->WorkTime;
    }

    /**
     * @return $this
     */
    public function setWorkTime(string $value)
    {
        $this->WorkTime = $value;

        return $this;
    }

    public function getOGRN(): ?string
    {
        return $this->OGRN;
    }

    /**
     * @return $this
     */
    public function setOGRN(?string $value = null)
    {
        $this->OGRN = $value;

        return $this;
    }

    public function getPointOnMap(): ?MapPoint
    {
        return $this->PointOnMap;
    }

    /**
     * @return $this
     */
    public function setPointOnMap(?MapPoint $value = null)
    {
        $this->PointOnMap = $value;

        return $this;
    }
}
