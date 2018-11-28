<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class CampaignNotification
{

//    Can be omit.
//    protected $SmsSettings = null;

//    Can be omit.
//    protected $EmailSettings = null;

    /**
     * Creates a new instance of CampaignNotification.
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
        return isset($this->SmsSettings) ? $this->SmsSettings : null;
    }

    /**
     * Sets SmsSettings.
     *
     * @param SmsSettings|null $value
     * @return $this
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
        return isset($this->EmailSettings) ? $this->EmailSettings : null;
    }

    /**
     * Sets EmailSettings.
     *
     * @param EmailSettings|null $value
     * @return $this
     */
    public function setEmailSettings(EmailSettings $value = null)
    {
        $this->EmailSettings = $value;

        return $this;
    }


}

