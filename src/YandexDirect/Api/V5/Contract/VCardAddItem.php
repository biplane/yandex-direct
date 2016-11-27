<?php

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

    protected $Street = null;

    protected $House = null;

    protected $Building = null;

    protected $Apartment = null;

    protected $InstantMessenger = null;

    protected $ExtraMessage = null;

    protected $ContactEmail = null;

    protected $Ogrn = null;

    protected $MetroStationId = null;

    protected $PointOnMap = null;

    protected $ContactPerson = null;

    /**
     * Creates a new instance of VCardAddItem.
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets CampaignId.
     *
     * @return int
     */
    public function getCampaignId()
    {
        return $this->CampaignId;
    }

    /**
     * Sets CampaignId.
     *
     * @param int $value
     * @return self
     */
    public function setCampaignId($value)
    {
        $this->CampaignId = $value;

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
     * @return self
     */
    public function setCountry($value)
    {
        $this->Country = $value;

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
     * @return self
     */
    public function setCity($value)
    {
        $this->City = $value;

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
     * @return self
     */
    public function setCompanyName($value)
    {
        $this->CompanyName = $value;

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
     * @return self
     */
    public function setWorkTime($value)
    {
        $this->WorkTime = $value;

        return $this;
    }

    /**
     * Gets Phone.
     *
     * @return Phone
     */
    public function getPhone()
    {
        return $this->Phone;
    }

    /**
     * Sets Phone.
     *
     * @param Phone $value
     * @return self
     */
    public function setPhone(Phone $value)
    {
        $this->Phone = $value;

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
     * @return self
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
     * @return self
     */
    public function setHouse($value = null)
    {
        $this->House = $value;

        return $this;
    }

    /**
     * Gets Building.
     *
     * @return string|null
     */
    public function getBuilding()
    {
        return $this->Building;
    }

    /**
     * Sets Building.
     *
     * @param string|null $value
     * @return self
     */
    public function setBuilding($value = null)
    {
        $this->Building = $value;

        return $this;
    }

    /**
     * Gets Apartment.
     *
     * @return string|null
     */
    public function getApartment()
    {
        return $this->Apartment;
    }

    /**
     * Sets Apartment.
     *
     * @param string|null $value
     * @return self
     */
    public function setApartment($value = null)
    {
        $this->Apartment = $value;

        return $this;
    }

    /**
     * Gets InstantMessenger.
     *
     * @return InstantMessenger|null
     */
    public function getInstantMessenger()
    {
        return $this->InstantMessenger;
    }

    /**
     * Sets InstantMessenger.
     *
     * @param InstantMessenger|null $value
     * @return self
     */
    public function setInstantMessenger(InstantMessenger $value = null)
    {
        $this->InstantMessenger = $value;

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
     * @return self
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
     * @return self
     */
    public function setContactEmail($value = null)
    {
        $this->ContactEmail = $value;

        return $this;
    }

    /**
     * Gets Ogrn.
     *
     * @return string|null
     */
    public function getOgrn()
    {
        return $this->Ogrn;
    }

    /**
     * Sets Ogrn.
     *
     * @param string|null $value
     * @return self
     */
    public function setOgrn($value = null)
    {
        $this->Ogrn = $value;

        return $this;
    }

    /**
     * Gets MetroStationId.
     *
     * @return int|null
     */
    public function getMetroStationId()
    {
        return $this->MetroStationId;
    }

    /**
     * Sets MetroStationId.
     *
     * @param int|null $value
     * @return self
     */
    public function setMetroStationId($value = null)
    {
        $this->MetroStationId = $value;

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
     * @return self
     */
    public function setPointOnMap(MapPoint $value = null)
    {
        $this->PointOnMap = $value;

        return $this;
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
     * @return self
     */
    public function setContactPerson($value = null)
    {
        $this->ContactPerson = $value;

        return $this;
    }


}

