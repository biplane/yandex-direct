<?php

declare(strict_types=1);

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
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets ContactPerson.
     */
    public function getContactPerson(): ?string
    {
        return $this->ContactPerson;
    }

    /**
     * Sets ContactPerson.
     *
     * @return $this
     */
    public function setContactPerson(?string $value = null)
    {
        $this->ContactPerson = $value;

        return $this;
    }

    /**
     * Gets Country.
     */
    public function getCountry(): string
    {
        return $this->Country;
    }

    /**
     * Sets Country.
     *
     * @return $this
     */
    public function setCountry(string $value)
    {
        $this->Country = $value;

        return $this;
    }

    /**
     * Gets CountryCode.
     */
    public function getCountryCode(): string
    {
        return $this->CountryCode;
    }

    /**
     * Sets CountryCode.
     *
     * @return $this
     */
    public function setCountryCode(string $value)
    {
        $this->CountryCode = $value;

        return $this;
    }

    /**
     * Gets City.
     */
    public function getCity(): string
    {
        return $this->City;
    }

    /**
     * Sets City.
     *
     * @return $this
     */
    public function setCity(string $value)
    {
        $this->City = $value;

        return $this;
    }

    /**
     * Gets Street.
     */
    public function getStreet(): ?string
    {
        return $this->Street;
    }

    /**
     * Sets Street.
     *
     * @return $this
     */
    public function setStreet(?string $value = null)
    {
        $this->Street = $value;

        return $this;
    }

    /**
     * Gets House.
     */
    public function getHouse(): ?string
    {
        return $this->House;
    }

    /**
     * Sets House.
     *
     * @return $this
     */
    public function setHouse(?string $value = null)
    {
        $this->House = $value;

        return $this;
    }

    /**
     * Gets Build.
     */
    public function getBuild(): ?string
    {
        return $this->Build;
    }

    /**
     * Sets Build.
     *
     * @return $this
     */
    public function setBuild(?string $value = null)
    {
        $this->Build = $value;

        return $this;
    }

    /**
     * Gets Apart.
     */
    public function getApart(): ?string
    {
        return $this->Apart;
    }

    /**
     * Sets Apart.
     *
     * @return $this
     */
    public function setApart(?string $value = null)
    {
        $this->Apart = $value;

        return $this;
    }

    /**
     * Gets CityCode.
     */
    public function getCityCode(): string
    {
        return $this->CityCode;
    }

    /**
     * Sets CityCode.
     *
     * @return $this
     */
    public function setCityCode(string $value)
    {
        $this->CityCode = $value;

        return $this;
    }

    /**
     * Gets Phone.
     */
    public function getPhone(): string
    {
        return $this->Phone;
    }

    /**
     * Sets Phone.
     *
     * @return $this
     */
    public function setPhone(string $value)
    {
        $this->Phone = $value;

        return $this;
    }

    /**
     * Gets PhoneExt.
     */
    public function getPhoneExt(): ?string
    {
        return $this->PhoneExt;
    }

    /**
     * Sets PhoneExt.
     *
     * @return $this
     */
    public function setPhoneExt(?string $value = null)
    {
        $this->PhoneExt = $value;

        return $this;
    }

    /**
     * Gets CompanyName.
     */
    public function getCompanyName(): string
    {
        return $this->CompanyName;
    }

    /**
     * Sets CompanyName.
     *
     * @return $this
     */
    public function setCompanyName(string $value)
    {
        $this->CompanyName = $value;

        return $this;
    }

    /**
     * Gets IMClient.
     */
    public function getIMClient(): ?string
    {
        return $this->IMClient;
    }

    /**
     * Sets IMClient.
     *
     * @return $this
     */
    public function setIMClient(?string $value = null)
    {
        $this->IMClient = $value;

        return $this;
    }

    /**
     * Gets IMLogin.
     */
    public function getIMLogin(): ?string
    {
        return $this->IMLogin;
    }

    /**
     * Sets IMLogin.
     *
     * @return $this
     */
    public function setIMLogin(?string $value = null)
    {
        $this->IMLogin = $value;

        return $this;
    }

    /**
     * Gets ExtraMessage.
     */
    public function getExtraMessage(): ?string
    {
        return $this->ExtraMessage;
    }

    /**
     * Sets ExtraMessage.
     *
     * @return $this
     */
    public function setExtraMessage(?string $value = null)
    {
        $this->ExtraMessage = $value;

        return $this;
    }

    /**
     * Gets ContactEmail.
     */
    public function getContactEmail(): ?string
    {
        return $this->ContactEmail;
    }

    /**
     * Sets ContactEmail.
     *
     * @return $this
     */
    public function setContactEmail(?string $value = null)
    {
        $this->ContactEmail = $value;

        return $this;
    }

    /**
     * Gets WorkTime.
     */
    public function getWorkTime(): string
    {
        return $this->WorkTime;
    }

    /**
     * Sets WorkTime.
     *
     * @return $this
     */
    public function setWorkTime(string $value)
    {
        $this->WorkTime = $value;

        return $this;
    }

    /**
     * Gets OGRN.
     */
    public function getOGRN(): ?string
    {
        return $this->OGRN;
    }

    /**
     * Sets OGRN.
     *
     * @return $this
     */
    public function setOGRN(?string $value = null)
    {
        $this->OGRN = $value;

        return $this;
    }

    /**
     * Gets PointOnMap.
     */
    public function getPointOnMap(): ?MapPoint
    {
        return $this->PointOnMap;
    }

    /**
     * Sets PointOnMap.
     *
     * @return $this
     */
    public function setPointOnMap(?MapPoint $value = null)
    {
        $this->PointOnMap = $value;

        return $this;
    }
}
