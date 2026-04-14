<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class CampaignBase
{
//    Can be omitted.
//    protected $ClientInfo;

//    Can be omitted.
//    protected $Notification;

//    Can be omitted.
//    protected $TimeZone;

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
     * Get ClientInfo
     */
    public function getClientInfo(): ?string
    {
        return $this->ClientInfo ?? null;
    }

    /**
     * Set ClientInfo
     *
     * @return $this
     */
    public function setClientInfo(?string $value)
    {
        $this->ClientInfo = $value;

        return $this;
    }

    /**
     * Get Notification
     */
    public function getNotification(): ?CampaignNotification
    {
        return $this->Notification ?? null;
    }

    /**
     * Set Notification
     *
     * @return $this
     */
    public function setNotification(?CampaignNotification $value)
    {
        $this->Notification = $value;

        return $this;
    }

    /**
     * Get TimeZone
     */
    public function getTimeZone(): ?string
    {
        return $this->TimeZone ?? null;
    }

    /**
     * Set TimeZone
     *
     * @return $this
     */
    public function setTimeZone(?string $value)
    {
        $this->TimeZone = $value;

        return $this;
    }
}
