<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class ClientGetItem extends ClientBaseItem
{

//    Can be omit.
//    protected $AccountQuality = null;

//    Can be omit.
//    protected $Archived = null;

//    Can be omit.
//    protected $ClientId = null;

//    Can be omit.
//    protected $CountryId = null;

//    Can be omit.
//    protected $CreatedAt = null;

//    Can be omit.
//    protected $Currency = null;

//    Can be omit.
//    protected $Grants = null;

//    Can be omit.
//    protected $Login = null;

//    Can be omit.
//    protected $Notification = null;

//    Can be omit.
//    protected $OverdraftSumAvailable = null;

//    Can be omit.
//    protected $Representatives = null;

//    Can be omit.
//    protected $Restrictions = null;

//    Can be omit.
//    protected $Settings = null;

//    Can be omit.
//    protected $Type = null;

//    Can be omit.
//    protected $VatRate = null;

    /**
     * Creates a new instance of ClientGetItem.
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets AccountQuality.
     *
     * @return float|null
     */
    public function getAccountQuality()
    {
        return isset($this->AccountQuality) ? $this->AccountQuality : null;
    }

    /**
     * Sets AccountQuality.
     *
     * @param float|null $value
     * @return $this
     */
    public function setAccountQuality($value = null)
    {
        $this->AccountQuality = $value;

        return $this;
    }

    /**
     * Gets Archived.
     *
     * @return string|null
     * @see YesNoEnum
     */
    public function getArchived()
    {
        return isset($this->Archived) ? $this->Archived : null;
    }

    /**
     * Sets Archived.
     *
     * @param string|null $value
     * @return $this
     * @see YesNoEnum
     */
    public function setArchived($value = null)
    {
        $this->Archived = $value;

        return $this;
    }

    /**
     * Gets ClientId.
     *
     * @return int|null
     */
    public function getClientId()
    {
        return isset($this->ClientId) ? $this->ClientId : null;
    }

    /**
     * Sets ClientId.
     *
     * @param int|null $value
     * @return $this
     */
    public function setClientId($value = null)
    {
        $this->ClientId = $value;

        return $this;
    }

    /**
     * Gets CountryId.
     *
     * @return int|null
     */
    public function getCountryId()
    {
        return isset($this->CountryId) ? $this->CountryId : null;
    }

    /**
     * Sets CountryId.
     *
     * @param int|null $value
     * @return $this
     */
    public function setCountryId($value = null)
    {
        $this->CountryId = $value;

        return $this;
    }

    /**
     * Gets CreatedAt.
     *
     * @return string|null
     */
    public function getCreatedAt()
    {
        return isset($this->CreatedAt) ? $this->CreatedAt : null;
    }

    /**
     * Sets CreatedAt.
     *
     * @param string|null $value
     * @return $this
     */
    public function setCreatedAt($value = null)
    {
        $this->CreatedAt = $value;

        return $this;
    }

    /**
     * Gets Currency.
     *
     * @return string|null
     * @see CurrencyEnum
     */
    public function getCurrency()
    {
        return isset($this->Currency) ? $this->Currency : null;
    }

    /**
     * Sets Currency.
     *
     * @param string|null $value
     * @return $this
     * @see CurrencyEnum
     */
    public function setCurrency($value = null)
    {
        $this->Currency = $value;

        return $this;
    }

    /**
     * Gets Grants.
     *
     * @return GrantGetItem[]|null
     */
    public function getGrants()
    {
        return isset($this->Grants) ? $this->Grants : null;
    }

    /**
     * Sets Grants.
     *
     * @param GrantGetItem[]|null $value
     * @return $this
     */
    public function setGrants(array $value = null)
    {
        $this->Grants = $value;

        return $this;
    }

    /**
     * Gets Login.
     *
     * @return string|null
     */
    public function getLogin()
    {
        return isset($this->Login) ? $this->Login : null;
    }

    /**
     * Sets Login.
     *
     * @param string|null $value
     * @return $this
     */
    public function setLogin($value = null)
    {
        $this->Login = $value;

        return $this;
    }

    /**
     * Gets Notification.
     *
     * @return ClientNotificationGet|null
     */
    public function getNotification()
    {
        return isset($this->Notification) ? $this->Notification : null;
    }

    /**
     * Sets Notification.
     *
     * @param ClientNotificationGet|null $value
     * @return $this
     */
    public function setNotification(ClientNotificationGet $value = null)
    {
        $this->Notification = $value;

        return $this;
    }

    /**
     * Gets OverdraftSumAvailable.
     *
     * @return int|null
     */
    public function getOverdraftSumAvailable()
    {
        return isset($this->OverdraftSumAvailable) ? $this->OverdraftSumAvailable : null;
    }

    /**
     * Sets OverdraftSumAvailable.
     *
     * @param int|null $value
     * @return $this
     */
    public function setOverdraftSumAvailable($value = null)
    {
        $this->OverdraftSumAvailable = $value;

        return $this;
    }

    /**
     * Gets Representatives.
     *
     * @return Representative[]|null
     */
    public function getRepresentatives()
    {
        return isset($this->Representatives) ? $this->Representatives : null;
    }

    /**
     * Sets Representatives.
     *
     * @param Representative[]|null $value
     * @return $this
     */
    public function setRepresentatives(array $value = null)
    {
        $this->Representatives = $value;

        return $this;
    }

    /**
     * Gets Restrictions.
     *
     * @return ClientRestrictionItem[]|null
     */
    public function getRestrictions()
    {
        return isset($this->Restrictions) ? $this->Restrictions : null;
    }

    /**
     * Sets Restrictions.
     *
     * @param ClientRestrictionItem[]|null $value
     * @return $this
     */
    public function setRestrictions(array $value = null)
    {
        $this->Restrictions = $value;

        return $this;
    }

    /**
     * Gets Settings.
     *
     * @return ClientSettingGetItem[]|null
     */
    public function getSettings()
    {
        return isset($this->Settings) ? $this->Settings : null;
    }

    /**
     * Sets Settings.
     *
     * @param ClientSettingGetItem[]|null $value
     * @return $this
     */
    public function setSettings(array $value = null)
    {
        $this->Settings = $value;

        return $this;
    }

    /**
     * Gets Type.
     *
     * @return string|null
     */
    public function getType()
    {
        return isset($this->Type) ? $this->Type : null;
    }

    /**
     * Sets Type.
     *
     * @param string|null $value
     * @return $this
     */
    public function setType($value = null)
    {
        $this->Type = $value;

        return $this;
    }

    /**
     * Gets VatRate.
     *
     * @return float|null
     */
    public function getVatRate()
    {
        return isset($this->VatRate) ? $this->VatRate : null;
    }

    /**
     * Sets VatRate.
     *
     * @param float|null $value
     * @return $this
     */
    public function setVatRate($value = null)
    {
        $this->VatRate = $value;

        return $this;
    }


}

