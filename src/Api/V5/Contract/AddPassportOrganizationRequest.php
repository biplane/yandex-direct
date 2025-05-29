<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class AddPassportOrganizationRequest
{
    protected $Name = null;

    protected $Currency = null;

    protected $Notification = null;

//    Can be omitted.
//    protected $Settings = null;

//    Can be omitted.
//    protected $Grants = null;

//    Can be omitted.
//    protected $TinInfo = null;

    /**
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    public function getName(): string
    {
        return $this->Name;
    }

    /**
     * @return $this
     */
    public function setName(string $value)
    {
        $this->Name = $value;

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

    public function getTinInfo(): ?TinInfoAdd
    {
        return $this->TinInfo ?? null;
    }

    /**
     * @return $this
     */
    public function setTinInfo(?TinInfoAdd $value = null)
    {
        $this->TinInfo = $value;

        return $this;
    }
}
