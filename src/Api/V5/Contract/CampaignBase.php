<?php

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
        return isset($this->ClientInfo) ? $this->ClientInfo : null;
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
        return isset($this->Notification) ? $this->Notification : null;
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
     * Gets TimeZone.
     *
     * @return string|null
     */
    public function getTimeZone()
    {
        return isset($this->TimeZone) ? $this->TimeZone : null;
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

