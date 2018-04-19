<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class VCardGetItem
{

//    Can be omit.
//    protected $Id = null;

//    Can be omit.
//    protected $CampaignId = null;

//    Can be omit.
//    protected $Country = null;

//    Can be omit.
//    protected $City = null;

//    Can be omit.
//    protected $WorkTime = null;

//    Can be omit.
//    protected $Phone = null;

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
//    protected $CompanyName = null;

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
     * Creates a new instance of VCardGetItem.
     *
     * @return self
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
        return isset($this->Id) ? $this->Id : null;
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
        return isset($this->CampaignId) ? $this->CampaignId : null;
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
        return isset($this->Country) ? $this->Country : null;
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
        return isset($this->City) ? $this->City : null;
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
        return isset($this->WorkTime) ? $this->WorkTime : null;
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
        return isset($this->Phone) ? $this->Phone : null;
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
        return isset($this->Street) ? $this->Street : null;
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
        return isset($this->House) ? $this->House : null;
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
        return isset($this->Building) ? $this->Building : null;
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
        return isset($this->Apartment) ? $this->Apartment : null;
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
        return isset($this->InstantMessenger) ? $this->InstantMessenger : null;
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
        return isset($this->CompanyName) ? $this->CompanyName : null;
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
        return isset($this->ExtraMessage) ? $this->ExtraMessage : null;
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
        return isset($this->ContactEmail) ? $this->ContactEmail : null;
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
        return isset($this->Ogrn) ? $this->Ogrn : null;
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
        return isset($this->MetroStationId) ? $this->MetroStationId : null;
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
        return isset($this->PointOnMap) ? $this->PointOnMap : null;
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
        return isset($this->ContactPerson) ? $this->ContactPerson : null;
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

