<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class Notification
{

    protected $SmsSettings = null;

    protected $EmailSettings = null;

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
     * Gets SmsSettings.
     *
     * @return SmsSettings|null
     */
    public function getSmsSettings()
    {
        return $this->SmsSettings;
    }

    /**
     * Sets SmsSettings.
     *
     * @param SmsSettings|null $value
     * @return self
     */
    public function setSmsSettings(SmsSettings $value = null)
    {
        $this->SmsSettings = $value;

        return $this;
    }

    /**
     * Gets EmailSettings.
     *
     * @return EmailSettings|null
     */
    public function getEmailSettings()
    {
        return $this->EmailSettings;
    }

    /**
     * Sets EmailSettings.
     *
     * @param EmailSettings|null $value
     * @return self
     */
    public function setEmailSettings(EmailSettings $value = null)
    {
        $this->EmailSettings = $value;

        return $this;
    }


}

