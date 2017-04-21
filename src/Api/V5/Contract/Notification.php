<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class Notification extends NotificationGeneralClients
{

    protected $SmsPhoneNumber = null;

    /**
     * Creates a new instance of Notification.
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets SmsPhoneNumber.
     *
     * @return string
     */
    public function getSmsPhoneNumber()
    {
        return $this->SmsPhoneNumber;
    }

    /**
     * Sets SmsPhoneNumber.
     *
     * @param string $value
     * @return self
     */
    public function setSmsPhoneNumber($value)
    {
        $this->SmsPhoneNumber = $value;

        return $this;
    }


}

