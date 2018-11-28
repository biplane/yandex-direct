<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class AddAgencyClientsRequest
{

    protected $Login = null;

    protected $FirstName = null;

    protected $LastName = null;

    protected $Currency = null;

    protected $Notification = null;

//    Can be omit.
//    protected $Settings = null;

//    Can be omit.
//    protected $Grants = null;

    /**
     * Creates a new instance of AddAgencyClientsRequest.
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets Login.
     *
     * @return string
     */
    public function getLogin()
    {
        return $this->Login;
    }

    /**
     * Sets Login.
     *
     * @param string $value
     * @return $this
     */
    public function setLogin($value)
    {
        $this->Login = $value;

        return $this;
    }

    /**
     * Gets FirstName.
     *
     * @return string
     */
    public function getFirstName()
    {
        return $this->FirstName;
    }

    /**
     * Sets FirstName.
     *
     * @param string $value
     * @return $this
     */
    public function setFirstName($value)
    {
        $this->FirstName = $value;

        return $this;
    }

    /**
     * Gets LastName.
     *
     * @return string
     */
    public function getLastName()
    {
        return $this->LastName;
    }

    /**
     * Sets LastName.
     *
     * @param string $value
     * @return $this
     */
    public function setLastName($value)
    {
        $this->LastName = $value;

        return $this;
    }

    /**
     * Gets Currency.
     *
     * @return string
     * @see CurrencyEnum
     */
    public function getCurrency()
    {
        return $this->Currency;
    }

    /**
     * Sets Currency.
     *
     * @param string $value
     * @return $this
     * @see CurrencyEnum
     */
    public function setCurrency($value)
    {
        $this->Currency = $value;

        return $this;
    }

    /**
     * Gets Notification.
     *
     * @return ClientNotificationAdd
     */
    public function getNotification()
    {
        return $this->Notification;
    }

    /**
     * Sets Notification.
     *
     * @param ClientNotificationAdd $value
     * @return $this
     */
    public function setNotification(ClientNotificationAdd $value)
    {
        $this->Notification = $value;

        return $this;
    }

    /**
     * Gets Settings.
     *
     * @return ClientSettingAddItem[]|null
     */
    public function getSettings()
    {
        return isset($this->Settings) ? $this->Settings : null;
    }

    /**
     * Sets Settings.
     *
     * @param ClientSettingAddItem[]|null $value
     * @return $this
     */
    public function setSettings(array $value = null)
    {
        $this->Settings = $value;

        return $this;
    }

    /**
     * Gets Grants.
     *
     * @return GrantItem[]|null
     */
    public function getGrants()
    {
        return isset($this->Grants) ? $this->Grants : null;
    }

    /**
     * Sets Grants.
     *
     * @param GrantItem[]|null $value
     * @return $this
     */
    public function setGrants(array $value = null)
    {
        $this->Grants = $value;

        return $this;
    }


}

