<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class ClientUpdateItem extends ClientBaseItem
{

    protected $Notification = null;

    protected $Settings = null;

    /**
     * Creates a new instance of ClientUpdateItem.
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets Notification.
     *
     * @return NotificationUpdate|null
     */
    public function getNotification()
    {
        return $this->Notification;
    }

    /**
     * Sets Notification.
     *
     * @param NotificationUpdate|null $value
     * @return self
     */
    public function setNotification(NotificationUpdate $value = null)
    {
        $this->Notification = $value;

        return $this;
    }

    /**
     * Gets Settings.
     *
     * @return ClientSettingUpdateItem[]|null
     */
    public function getSettings()
    {
        return $this->Settings;
    }

    /**
     * Sets Settings.
     *
     * @param ClientSettingUpdateItem[]|null $value
     * @return self
     */
    public function setSettings(array $value = null)
    {
        $this->Settings = $value;

        return $this;
    }


}

