<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class CampaignBase
{

    protected $ClientInfo = null;

    protected $Notification = null;

    protected $TimeTargeting = null;

    protected $TimeZone = null;

    /**
     * Creates a new instance of CampaignBase.
     *
     * @return CampaignBase
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
     * @return $this
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
     * @return $this
     */
    public function setNotification(Notification $value = null)
    {
        $this->Notification = $value;

        return $this;
    }

    /**
     * Gets TimeTargeting.
     *
     * @return TimeTargeting|null
     */
    public function getTimeTargeting()
    {
        return $this->TimeTargeting;
    }

    /**
     * Sets TimeTargeting.
     *
     * @param TimeTargeting|null $value
     * @return $this
     */
    public function setTimeTargeting(TimeTargeting $value = null)
    {
        $this->TimeTargeting = $value;

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
     * @return $this
     */
    public function setTimeZone($value = null)
    {
        $this->TimeZone = $value;

        return $this;
    }


}

