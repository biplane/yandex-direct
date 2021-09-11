<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class VCardAddItem
{
    protected $CampaignId = null;

    protected $Country = null;

    protected $City = null;

    protected $CompanyName = null;

    protected $WorkTime = null;

    protected $Phone = null;

//    Can be omit.
//    protected $Street = null;

//    Can be omit.
//    protected $House = null;

//    Can be omit.
//    protected $Building = null;

//    Can be omit.
//    protected $Apartment = null;

//    Can be omit.
//    protected $InstantMessenger = null;

//    Can be omit.
//    protected $ExtraMessage = null;

//    Can be omit.
//    protected $ContactEmail = null;

//    Can be omit.
//    protected $Ogrn = null;

//    Can be omit.
//    protected $MetroStationId = null;

//    Can be omit.
//    protected $PointOnMap = null;

//    Can be omit.
//    protected $ContactPerson = null;

    /**
     * Creates a new instance of VCardAddItem.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets CampaignId.
     */
    public function getCampaignId(): int
    {
        return $this->CampaignId;
    }

    /**
     * Sets CampaignId.
     *
     * @return $this
     */
    public function setCampaignId(int $value)
    {
        $this->CampaignId = $value;

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
     * Gets Phone.
     */
    public function getPhone(): Phone
    {
        return $this->Phone;
    }

    /**
     * Sets Phone.
     *
     * @return $this
     */
    public function setPhone(Phone $value)
    {
        $this->Phone = $value;

        return $this;
    }

    /**
     * Gets Street.
     */
    public function getStreet(): ?string
    {
        return $this->Street ?? null;
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
        return $this->House ?? null;
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
     * Gets Building.
     */
    public function getBuilding(): ?string
    {
        return $this->Building ?? null;
    }

    /**
     * Sets Building.
     *
     * @return $this
     */
    public function setBuilding(?string $value = null)
    {
        $this->Building = $value;

        return $this;
    }

    /**
     * Gets Apartment.
     */
    public function getApartment(): ?string
    {
        return $this->Apartment ?? null;
    }

    /**
     * Sets Apartment.
     *
     * @return $this
     */
    public function setApartment(?string $value = null)
    {
        $this->Apartment = $value;

        return $this;
    }

    /**
     * Gets InstantMessenger.
     */
    public function getInstantMessenger(): ?InstantMessenger
    {
        return $this->InstantMessenger ?? null;
    }

    /**
     * Sets InstantMessenger.
     *
     * @return $this
     */
    public function setInstantMessenger(?InstantMessenger $value = null)
    {
        $this->InstantMessenger = $value;

        return $this;
    }

    /**
     * Gets ExtraMessage.
     */
    public function getExtraMessage(): ?string
    {
        return $this->ExtraMessage ?? null;
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
        return $this->ContactEmail ?? null;
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
     * Gets Ogrn.
     */
    public function getOgrn(): ?string
    {
        return $this->Ogrn ?? null;
    }

    /**
     * Sets Ogrn.
     *
     * @return $this
     */
    public function setOgrn(?string $value = null)
    {
        $this->Ogrn = $value;

        return $this;
    }

    /**
     * Gets MetroStationId.
     */
    public function getMetroStationId(): ?int
    {
        return $this->MetroStationId ?? null;
    }

    /**
     * Sets MetroStationId.
     *
     * @return $this
     */
    public function setMetroStationId(?int $value = null)
    {
        $this->MetroStationId = $value;

        return $this;
    }

    /**
     * Gets PointOnMap.
     */
    public function getPointOnMap(): ?MapPoint
    {
        return $this->PointOnMap ?? null;
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

    /**
     * Gets ContactPerson.
     */
    public function getContactPerson(): ?string
    {
        return $this->ContactPerson ?? null;
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
}
