<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class CampaignBase
{
//    Can be omitted.
//    protected $ClientInfo = null;

//    Can be omitted.
//    protected $Notification = null;

//    Can be omitted.
//    protected $TimeZone = null;

    /**
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    public function getClientInfo(): ?string
    {
        return $this->ClientInfo ?? null;
    }

    /**
     * @return $this
     */
    public function setClientInfo(?string $value = null)
    {
        $this->ClientInfo = $value;

        return $this;
    }

    public function getNotification(): ?CampaignNotification
    {
        return $this->Notification ?? null;
    }

    /**
     * @return $this
     */
    public function setNotification(?CampaignNotification $value = null)
    {
        $this->Notification = $value;

        return $this;
    }

    public function getTimeZone(): ?string
    {
        return $this->TimeZone ?? null;
    }

    /**
     * @return $this
     */
    public function setTimeZone(?string $value = null)
    {
        $this->TimeZone = $value;

        return $this;
    }
}
