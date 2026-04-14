<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class AddAgencyClientsRequest
{
    /** @var string */
    protected $Login;

    /** @var string */
    protected $FirstName;

    /** @var string */
    protected $LastName;

    /** @var 'YND_FIXED'|'RUB'|'CHF'|'EUR'|'KZT'|'TRY'|'UAH'|'USD'|'BYN'|'GBP' */
    protected $Currency;

    /** @var ClientNotificationAdd */
    protected $Notification;

//    Can be omitted.
//    protected $Settings;

//    Can be omitted.
//    protected $Grants;

//    Can be omitted.
//    protected $TinInfo;

    /**
     * Create a new instance.
     *
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    /**
     * Get Login
     */
    public function getLogin(): string
    {
        return $this->Login;
    }

    /**
     * Set Login
     *
     * @return $this
     */
    public function setLogin(string $value)
    {
        $this->Login = $value;

        return $this;
    }

    /**
     * Get FirstName
     */
    public function getFirstName(): string
    {
        return $this->FirstName;
    }

    /**
     * Set FirstName
     *
     * @return $this
     */
    public function setFirstName(string $value)
    {
        $this->FirstName = $value;

        return $this;
    }

    /**
     * Get LastName
     */
    public function getLastName(): string
    {
        return $this->LastName;
    }

    /**
     * Set LastName
     *
     * @return $this
     */
    public function setLastName(string $value)
    {
        $this->LastName = $value;

        return $this;
    }

    /**
     * Get Currency
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\CurrencyEnum
     *
     * @return 'YND_FIXED'|'RUB'|'CHF'|'EUR'|'KZT'|'TRY'|'UAH'|'USD'|'BYN'|'GBP'
     */
    public function getCurrency(): string
    {
        return $this->Currency;
    }

    /**
     * Set Currency
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\CurrencyEnum
     *
     * @param 'YND_FIXED'|'RUB'|'CHF'|'EUR'|'KZT'|'TRY'|'UAH'|'USD'|'BYN'|'GBP' $value
     *
     * @return $this
     */
    public function setCurrency(string $value)
    {
        $this->Currency = $value;

        return $this;
    }

    /**
     * Get Notification
     */
    public function getNotification(): ClientNotificationAdd
    {
        return $this->Notification;
    }

    /**
     * Set Notification
     *
     * @return $this
     */
    public function setNotification(ClientNotificationAdd $value)
    {
        $this->Notification = $value;

        return $this;
    }

    /**
     * Get Settings
     *
     * @return list<ClientSettingAddItem>
     */
    public function getSettings(): array
    {
        return $this->Settings ?? [];
    }

    /**
     * Set Settings
     *
     * @param list<ClientSettingAddItem> $value
     *
     * @return $this
     */
    public function setSettings(array $value)
    {
        $this->Settings = $value;

        return $this;
    }

    /**
     * Get Grants
     *
     * @return list<GrantItem>
     */
    public function getGrants(): array
    {
        return $this->Grants ?? [];
    }

    /**
     * Set Grants
     *
     * @param list<GrantItem> $value
     *
     * @return $this
     */
    public function setGrants(array $value)
    {
        $this->Grants = $value;

        return $this;
    }

    /**
     * Get TinInfo
     */
    public function getTinInfo(): ?TinInfoAdd
    {
        return $this->TinInfo ?? null;
    }

    /**
     * Set TinInfo
     *
     * @return $this
     */
    public function setTinInfo(?TinInfoAdd $value)
    {
        $this->TinInfo = $value;

        return $this;
    }
}
