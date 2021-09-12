<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class ClientUpdateItem extends ClientBaseItem
{
//    Can be omitted.
//    protected $Notification = null;

//    Can be omitted.
//    protected $Settings = null;

    public function getNotification(): ?NotificationUpdate
    {
        return $this->Notification ?? null;
    }

    /**
     * @return $this
     */
    public function setNotification(?NotificationUpdate $value = null)
    {
        $this->Notification = $value;

        return $this;
    }

    /**
     * @return ClientSettingUpdateItem[]|null
     */
    public function getSettings(): ?array
    {
        return $this->Settings ?? null;
    }

    /**
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
