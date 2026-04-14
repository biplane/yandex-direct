<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class ClientUpdateItem extends ClientBaseItem
{
//    Can be omitted.
//    protected $Notification;

//    Can be omitted.
//    protected $Settings;

//    Can be omitted.
//    protected $TinInfo;

//    Can be omitted.
//    protected $ErirAttributes;

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
     * Get Notification
     */
    public function getNotification(): ?ClientNotificationUpdate
    {
        return $this->Notification ?? null;
    }

    /**
     * Set Notification
     *
     * @return $this
     */
    public function setNotification(?ClientNotificationUpdate $value)
    {
        $this->Notification = $value;

        return $this;
    }

    /**
     * Get Settings
     *
     * @return list<ClientSettingUpdateItem>
     */
    public function getSettings(): array
    {
        return $this->Settings ?? [];
    }

    /**
     * Set Settings
     *
     * @param list<ClientSettingUpdateItem> $value
     *
     * @return $this
     */
    public function setSettings(array $value)
    {
        $this->Settings = $value;

        return $this;
    }

    /**
     * Get TinInfo
     */
    public function getTinInfo(): ?TinInfoUpdate
    {
        return $this->TinInfo ?? null;
    }

    /**
     * Set TinInfo
     *
     * @return $this
     */
    public function setTinInfo(?TinInfoUpdate $value)
    {
        $this->TinInfo = $value;

        return $this;
    }

    /**
     * Get ErirAttributes
     */
    public function getErirAttributes(): ?ErirAttributesUpdate
    {
        return $this->ErirAttributes ?? null;
    }

    /**
     * Set ErirAttributes
     *
     * @return $this
     */
    public function setErirAttributes(?ErirAttributesUpdate $value)
    {
        $this->ErirAttributes = $value;

        return $this;
    }
}
