<?php

declare(strict_types=1);

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
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets Login.
     */
    public function getLogin(): string
    {
        return $this->Login;
    }

    /**
     * Sets Login.
     *
     * @return $this
     */
    public function setLogin(string $value)
    {
        $this->Login = $value;

        return $this;
    }

    /**
     * Gets FirstName.
     */
    public function getFirstName(): string
    {
        return $this->FirstName;
    }

    /**
     * Sets FirstName.
     *
     * @return $this
     */
    public function setFirstName(string $value)
    {
        $this->FirstName = $value;

        return $this;
    }

    /**
     * Gets LastName.
     */
    public function getLastName(): string
    {
        return $this->LastName;
    }

    /**
     * Sets LastName.
     *
     * @return $this
     */
    public function setLastName(string $value)
    {
        $this->LastName = $value;

        return $this;
    }

    /**
     * Gets Currency.
     *
     * @see CurrencyEnum
     */
    public function getCurrency(): string
    {
        return $this->Currency;
    }

    /**
     * Sets Currency.
     *
     * @see CurrencyEnum
     *
     * @return $this
     */
    public function setCurrency(string $value)
    {
        $this->Currency = $value;

        return $this;
    }

    /**
     * Gets Notification.
     */
    public function getNotification(): ClientNotificationAdd
    {
        return $this->Notification;
    }

    /**
     * Sets Notification.
     *
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
    public function getSettings(): ?array
    {
        return $this->Settings ?? null;
    }

    /**
     * Sets Settings.
     *
     * @param ClientSettingAddItem[]|null $value
     *
     * @return $this
     */
    public function setSettings(?array $value = null)
    {
        $this->Settings = $value;

        return $this;
    }

    /**
     * Gets Grants.
     *
     * @return GrantItem[]|null
     */
    public function getGrants(): ?array
    {
        return $this->Grants ?? null;
    }

    /**
     * Sets Grants.
     *
     * @param GrantItem[]|null $value
     *
     * @return $this
     */
    public function setGrants(?array $value = null)
    {
        $this->Grants = $value;

        return $this;
    }
}
