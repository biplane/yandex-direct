<?php

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
        return isset($this->Notification) ? $this->Notification : null;
    }

    /**
     * Sets Notification.
     *
     * @param NotificationUpdate|null $value
     * @return $this
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
        return isset($this->Settings) ? $this->Settings : null;
    }

    /**
     * Sets Settings.
     *
     * @param ClientSettingUpdateItem[]|null $value
     * @return $this
     */
    public function setSettings(array $value = null)
    {
        $this->Settings = $value;

        return $this;
    }


}

