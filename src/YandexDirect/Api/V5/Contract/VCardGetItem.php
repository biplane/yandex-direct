<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class VCardGetItem
{

    protected $Id = null;

    protected $CampaignId = null;

    protected $Country = null;

    protected $City = null;

    protected $WorkTime = null;

    protected $Phone = null;

    protected $Street = null;

    protected $House = null;

    protected $Building = null;

    protected $Apartment = null;

    protected $InstantMessenger = null;

    protected $CompanyName = null;

    protected $ExtraMessage = null;

    protected $ContactEmail = null;

    protected $Ogrn = null;

    protected $MetroStationId = null;

    protected $PointOnMap = null;

    protected $ContactPerson = null;

    /**
     * Creates a new instance of VCardGetItem.
     *
     * @return VCardGetItem
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets Id.
     *
     * @return int|null
     */
    public function getId()
    {
        return $this->Id;
    }

    /**
     * Sets Id.
     *
     * @param int|null $value
     * @return $this
     */
    public function setId($value = null)
    {
        $this->Id = $value;

        return $this;
    }

    /**
     * Gets CampaignId.
     *
     * @return int|null
     */
    public function getCampaignId()
    {
        return $this->CampaignId;
    }

    /**
     * Sets CampaignId.
     *
     * @param int|null $value
     * @return $this
     */
    public function setCampaignId($value = null)
    {
        $this->CampaignId = $value;

        return $this;
    }

    /**
     * Gets Country.
     *
     * @return string|null
     */
    public function getCountry()
    {
        return $this->Country;
    }

    /**
     * Sets Country.
     *
     * @param string|null $value
     * @return $this
     */
    public function setCountry($value = null)
    {
        $this->Country = $value;

        return $this;
    }

    /**
     * Gets City.
     *
     * @return string|null
     */
    public function getCity()
    {
        return $this->City;
    }

    /**
     * Sets City.
     *
     * @param string|null $value
     * @return $this
     */
    public function setCity($value = null)
    {
        $this->City = $value;

        return $this;
    }

    /**
     * Gets WorkTime.
     *
     * @return string|null
     */
    public function getWorkTime()
    {
        return $this->WorkTime;
    }

    /**
     * Sets WorkTime.
     *
     * @param string|null $value
     * @return $this
     */
    public function setWorkTime($value = null)
    {
        $this->WorkTime = $value;

        return $this;
    }

    /**
     * Gets Phone.
     *
     * @return Phone|null
     */
    public function getPhone()
    {
        return $this->Phone;
    }

    /**
     * Sets Phone.
     *
     * @param Phone|null $value
     * @return $this
     */
    public function setPhone(Phone $value = null)
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
     * @return $this
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
     * @return $this
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
     * @return $this
     */
    public function setInstantMessenger(InstantMessenger $value = null)
    {
        $this->InstantMessenger = $value;

        return $this;
    }

    /**
     * Gets CompanyName.
     *
     * @return string|null
     */
    public function getCompanyName()
    {
        return $this->CompanyName;
    }

    /**
     * Sets CompanyName.
     *
     * @param string|null $value
     * @return $this
     */
    public function setCompanyName($value = null)
    {
        $this->CompanyName = $value;

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
     * @return $this
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
     * @return $this
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
     * @return $this
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
     * @return $this
     */
    public function setContactPerson($value = null)
    {
        $this->ContactPerson = $value;

        return $this;
    }


}

