<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class ClientUpdateItem extends ClientBaseItem
{
//    Can be omit.
//    protected $Notification = null;

//    Can be omit.
//    protected $Settings = null;

    /**
     * Creates a new instance of ClientUpdateItem.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets Notification.
     */
    public function getNotification(): ?NotificationUpdate
    {
        return $this->Notification ?? null;
    }

    /**
     * Sets Notification.
     *
     * @return $this
     */
    public function setNotification(?NotificationUpdate $value = null)
    {
        $this->Notification = $value;

        return $this;
    }

    /**
     * Gets Settings.
     *
     * @return ClientSettingUpdateItem[]|null
     */
    public function getSettings(): ?array
    {
        return $this->Settings ?? null;
    }

    /**
     * Sets Settings.
     *
     * @param ClientSettingUpdateItem[]|null $value
     *
     * @return $this
     */
    public function setSettings(?array $value = null)
    {
        $this->Settings = $value;

        return $this;
    }
}
