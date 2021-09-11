<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class CampaignBase
{
//    Can be omit.
//    protected $ClientInfo = null;

//    Can be omit.
//    protected $Notification = null;

//    Can be omit.
//    protected $TimeZone = null;

    /**
     * Creates a new instance of CampaignBase.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets ClientInfo.
     */
    public function getClientInfo(): ?string
    {
        return $this->ClientInfo ?? null;
    }

    /**
     * Sets ClientInfo.
     *
     * @return $this
     */
    public function setClientInfo(?string $value = null)
    {
        $this->ClientInfo = $value;

        return $this;
    }

    /**
     * Gets Notification.
     */
    public function getNotification(): ?CampaignNotification
    {
        return $this->Notification ?? null;
    }

    /**
     * Sets Notification.
     *
     * @return $this
     */
    public function setNotification(?CampaignNotification $value = null)
    {
        $this->Notification = $value;

        return $this;
    }

    /**
     * Gets TimeZone.
     */
    public function getTimeZone(): ?string
    {
        return $this->TimeZone ?? null;
    }

    /**
     * Sets TimeZone.
     *
     * @return $this
     */
    public function setTimeZone(?string $value = null)
    {
        $this->TimeZone = $value;

        return $this;
    }
}
