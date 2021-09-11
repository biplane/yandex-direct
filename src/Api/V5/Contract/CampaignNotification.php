<?php

declare(strict_types=1);

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
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets SmsSettings.
     */
    public function getSmsSettings(): ?SmsSettings
    {
        return $this->SmsSettings ?? null;
    }

    /**
     * Sets SmsSettings.
     *
     * @return $this
     */
    public function setSmsSettings(?SmsSettings $value = null)
    {
        $this->SmsSettings = $value;

        return $this;
    }

    /**
     * Gets EmailSettings.
     */
    public function getEmailSettings(): ?EmailSettings
    {
        return $this->EmailSettings ?? null;
    }

    /**
     * Sets EmailSettings.
     *
     * @return $this
     */
    public function setEmailSettings(?EmailSettings $value = null)
    {
        $this->EmailSettings = $value;

        return $this;
    }
}
