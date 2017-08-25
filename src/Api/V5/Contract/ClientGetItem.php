<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class ClientGetItem extends ClientBaseItem
{

    protected $AccountQuality = null;

    protected $Archived = null;

    protected $ClientId = null;

    protected $CountryId = null;

    protected $CreatedAt = null;

    protected $Currency = null;

    protected $Grants = null;

    protected $Login = null;

    protected $Notification = null;

    protected $OverdraftSumAvailable = null;

    protected $Representatives = null;

    protected $Restrictions = null;

    protected $Settings = null;

    protected $Type = null;

    protected $VatRate = null;

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
        return $this->AccountQuality;
    }

    /**
     * Sets AccountQuality.
     *
     * @param float|null $value
     * @return self
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
        return $this->Archived;
    }

    /**
     * Sets Archived.
     *
     * @param string|null $value
     * @return self
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
        return $this->ClientId;
    }

    /**
     * Sets ClientId.
     *
     * @param int|null $value
     * @return self
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
        return $this->CountryId;
    }

    /**
     * Sets CountryId.
     *
     * @param int|null $value
     * @return self
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
        return $this->CreatedAt;
    }

    /**
     * Sets CreatedAt.
     *
     * @param string|null $value
     * @return self
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
        return $this->Currency;
    }

    /**
     * Sets Currency.
     *
     * @param string|null $value
     * @return self
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
        return $this->Grants;
    }

    /**
     * Sets Grants.
     *
     * @param GrantGetItem[]|null $value
     * @return self
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
        return $this->Login;
    }

    /**
     * Sets Login.
     *
     * @param string|null $value
     * @return self
     */
    public function setLogin($value = null)
    {
        $this->Login = $value;

        return $this;
    }

    /**
     * Gets Notification.
     *
     * @return NotificationGet|null
     */
    public function getNotification()
    {
        return $this->Notification;
    }

    /**
     * Sets Notification.
     *
     * @param NotificationGet|null $value
     * @return self
     */
    public function setNotification(NotificationGet $value = null)
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
        return $this->OverdraftSumAvailable;
    }

    /**
     * Sets OverdraftSumAvailable.
     *
     * @param int|null $value
     * @return self
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
        return $this->Representatives;
    }

    /**
     * Sets Representatives.
     *
     * @param Representative[]|null $value
     * @return self
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
        return $this->Restrictions;
    }

    /**
     * Sets Restrictions.
     *
     * @param ClientRestrictionItem[]|null $value
     * @return self
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
        return $this->Settings;
    }

    /**
     * Sets Settings.
     *
     * @param ClientSettingGetItem[]|null $value
     * @return self
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
        return $this->Type;
    }

    /**
     * Sets Type.
     *
     * @param string|null $value
     * @return self
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
        return $this->VatRate;
    }

    /**
     * Sets VatRate.
     *
     * @param float|null $value
     * @return self
     */
    public function setVatRate($value = null)
    {
        $this->VatRate = $value;

        return $this;
    }


}

