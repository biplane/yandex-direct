<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class CampaignNotification
{
//    Can be omitted.
//    protected $SmsSettings;

//    Can be omitted.
//    protected $EmailSettings;

    /**
     * Create a new instance.
     *
     * @return static
     */
    public static function create(): static
    {
        return new static();
    }

    /**
     * Get SmsSettings
     */
    public function getSmsSettings(): ?SmsSettings
    {
        return $this->SmsSettings ?? null;
    }

    /**
     * Set SmsSettings
     *
     * @return $this
     */
    public function setSmsSettings(?SmsSettings $value)
    {
        $this->SmsSettings = $value;

        return $this;
    }

    /**
     * Get EmailSettings
     */
    public function getEmailSettings(): ?EmailSettings
    {
        return $this->EmailSettings ?? null;
    }

    /**
     * Set EmailSettings
     *
     * @return $this
     */
    public function setEmailSettings(?EmailSettings $value)
    {
        $this->EmailSettings = $value;

        return $this;
    }
}
