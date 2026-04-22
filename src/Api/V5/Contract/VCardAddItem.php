<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class VCardAddItem
{
    /** @var int */
    protected $CampaignId;

    /** @var string */
    protected $Country;

    /** @var string */
    protected $City;

    /** @var string */
    protected $CompanyName;

    /** @var string */
    protected $WorkTime;

    /** @var Phone */
    protected $Phone;

//    Can be omitted.
//    protected $Street;

//    Can be omitted.
//    protected $House;

//    Can be omitted.
//    protected $Building;

//    Can be omitted.
//    protected $Apartment;

//    Can be omitted.
//    protected $InstantMessenger;

//    Can be omitted.
//    protected $ExtraMessage;

//    Can be omitted.
//    protected $ContactEmail;

//    Can be omitted.
//    protected $Ogrn;

//    Can be omitted.
//    protected $MetroStationId;

//    Can be omitted.
//    protected $PointOnMap;

//    Can be omitted.
//    protected $ContactPerson;

    /**
     * Create a new instance.
     *
     * @return static
     */
    public static function create(): static
    {
        return new static();
    }

    /**
     * Get CampaignId
     */
    public function getCampaignId(): int
    {
        return $this->CampaignId;
    }

    /**
     * Set CampaignId
     *
     * @return $this
     */
    public function setCampaignId(int $value)
    {
        $this->CampaignId = $value;

        return $this;
    }

    /**
     * Get Country
     */
    public function getCountry(): string
    {
        return $this->Country;
    }

    /**
     * Set Country
     *
     * @return $this
     */
    public function setCountry(string $value)
    {
        $this->Country = $value;

        return $this;
    }

    /**
     * Get City
     */
    public function getCity(): string
    {
        return $this->City;
    }

    /**
     * Set City
     *
     * @return $this
     */
    public function setCity(string $value)
    {
        $this->City = $value;

        return $this;
    }

    /**
     * Get CompanyName
     */
    public function getCompanyName(): string
    {
        return $this->CompanyName;
    }

    /**
     * Set CompanyName
     *
     * @return $this
     */
    public function setCompanyName(string $value)
    {
        $this->CompanyName = $value;

        return $this;
    }

    /**
     * Get WorkTime
     */
    public function getWorkTime(): string
    {
        return $this->WorkTime;
    }

    /**
     * Set WorkTime
     *
     * @return $this
     */
    public function setWorkTime(string $value)
    {
        $this->WorkTime = $value;

        return $this;
    }

    /**
     * Get Phone
     */
    public function getPhone(): Phone
    {
        return $this->Phone;
    }

    /**
     * Set Phone
     *
     * @return $this
     */
    public function setPhone(Phone $value)
    {
        $this->Phone = $value;

        return $this;
    }

    /**
     * Get Street
     */
    public function getStreet(): ?string
    {
        return $this->Street ?? null;
    }

    /**
     * Set Street
     *
     * @return $this
     */
    public function setStreet(?string $value)
    {
        $this->Street = $value;

        return $this;
    }

    /**
     * Get House
     */
    public function getHouse(): ?string
    {
        return $this->House ?? null;
    }

    /**
     * Set House
     *
     * @return $this
     */
    public function setHouse(?string $value)
    {
        $this->House = $value;

        return $this;
    }

    /**
     * Get Building
     */
    public function getBuilding(): ?string
    {
        return $this->Building ?? null;
    }

    /**
     * Set Building
     *
     * @return $this
     */
    public function setBuilding(?string $value)
    {
        $this->Building = $value;

        return $this;
    }

    /**
     * Get Apartment
     */
    public function getApartment(): ?string
    {
        return $this->Apartment ?? null;
    }

    /**
     * Set Apartment
     *
     * @return $this
     */
    public function setApartment(?string $value)
    {
        $this->Apartment = $value;

        return $this;
    }

    /**
     * Get InstantMessenger
     */
    public function getInstantMessenger(): ?InstantMessenger
    {
        return $this->InstantMessenger ?? null;
    }

    /**
     * Set InstantMessenger
     *
     * @return $this
     */
    public function setInstantMessenger(?InstantMessenger $value)
    {
        $this->InstantMessenger = $value;

        return $this;
    }

    /**
     * Get ExtraMessage
     */
    public function getExtraMessage(): ?string
    {
        return $this->ExtraMessage ?? null;
    }

    /**
     * Set ExtraMessage
     *
     * @return $this
     */
    public function setExtraMessage(?string $value)
    {
        $this->ExtraMessage = $value;

        return $this;
    }

    /**
     * Get ContactEmail
     */
    public function getContactEmail(): ?string
    {
        return $this->ContactEmail ?? null;
    }

    /**
     * Set ContactEmail
     *
     * @return $this
     */
    public function setContactEmail(?string $value)
    {
        $this->ContactEmail = $value;

        return $this;
    }

    /**
     * Get Ogrn
     */
    public function getOgrn(): ?string
    {
        return $this->Ogrn ?? null;
    }

    /**
     * Set Ogrn
     *
     * @return $this
     */
    public function setOgrn(?string $value)
    {
        $this->Ogrn = $value;

        return $this;
    }

    /**
     * Get MetroStationId
     */
    public function getMetroStationId(): ?int
    {
        return $this->MetroStationId ?? null;
    }

    /**
     * Set MetroStationId
     *
     * @return $this
     */
    public function setMetroStationId(?int $value)
    {
        $this->MetroStationId = $value;

        return $this;
    }

    /**
     * Get PointOnMap
     */
    public function getPointOnMap(): ?MapPoint
    {
        return $this->PointOnMap ?? null;
    }

    /**
     * Set PointOnMap
     *
     * @return $this
     */
    public function setPointOnMap(?MapPoint $value)
    {
        $this->PointOnMap = $value;

        return $this;
    }

    /**
     * Get ContactPerson
     */
    public function getContactPerson(): ?string
    {
        return $this->ContactPerson ?? null;
    }

    /**
     * Set ContactPerson
     *
     * @return $this
     */
    public function setContactPerson(?string $value)
    {
        $this->ContactPerson = $value;

        return $this;
    }
}
