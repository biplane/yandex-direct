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

//    Can be omitted.
//    protected $Settings = null;

//    Can be omitted.
//    protected $Grants = null;

    /**
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    public function getLogin(): string
    {
        return $this->Login;
    }

    /**
     * @return $this
     */
    public function setLogin(string $value)
    {
        $this->Login = $value;

        return $this;
    }

    public function getFirstName(): string
    {
        return $this->FirstName;
    }

    /**
     * @return $this
     */
    public function setFirstName(string $value)
    {
        $this->FirstName = $value;

        return $this;
    }

    public function getLastName(): string
    {
        return $this->LastName;
    }

    /**
     * @return $this
     */
    public function setLastName(string $value)
    {
        $this->LastName = $value;

        return $this;
    }

    /**
     * @see CurrencyEnum
     */
    public function getCurrency(): string
    {
        return $this->Currency;
    }

    /**
     * @see CurrencyEnum
     *
     * @return $this
     */
    public function setCurrency(string $value)
    {
        $this->Currency = $value;

        return $this;
    }

    public function getNotification(): ClientNotificationAdd
    {
        return $this->Notification;
    }

    /**
     * @return $this
     */
    public function setNotification(ClientNotificationAdd $value)
    {
        $this->Notification = $value;

        return $this;
    }

    /**
     * @return ClientSettingAddItem[]|null
     */
    public function getSettings(): ?array
    {
        return $this->Settings ?? null;
    }

    /**
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
     * @return GrantItem[]|null
     */
    public function getGrants(): ?array
    {
        return $this->Grants ?? null;
    }

    /**
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
