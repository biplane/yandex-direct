<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class CampaignBase
{

    protected $ClientInfo = null;

    protected $Notification = null;

    protected $TimeZone = null;

    /**
     * Creates a new instance of CampaignBase.
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets ClientInfo.
     *
     * @return string|null
     */
    public function getClientInfo()
    {
        return $this->ClientInfo;
    }

    /**
     * Sets ClientInfo.
     *
     * @param string|null $value
     * @return self
     */
    public function setClientInfo($value = null)
    {
        $this->ClientInfo = $value;

        return $this;
    }

    /**
     * Gets Notification.
     *
     * @return Notification|null
     */
    public function getNotification()
    {
        return $this->Notification;
    }

    /**
     * Sets Notification.
     *
     * @param Notification|null $value
     * @return self
     */
    public function setNotification(Notification $value = null)
    {
        $this->Notification = $value;

        return $this;
    }

    /**
     * Gets TimeZone.
     *
     * @return string|null
     */
    public function getTimeZone()
    {
        return $this->TimeZone;
    }

    /**
     * Sets TimeZone.
     *
     * @param string|null $value
     * @return self
     */
    public function setTimeZone($value = null)
    {
        $this->TimeZone = $value;

        return $this;
    }


}

