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
//    protected $SmsSettings = null;

//    Can be omitted.
//    protected $EmailSettings = null;

    /**
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    public function getSmsSettings(): ?SmsSettings
    {
        return $this->SmsSettings ?? null;
    }

    /**
     * @return $this
     */
    public function setSmsSettings(?SmsSettings $value = null)
    {
        $this->SmsSettings = $value;

        return $this;
    }

    public function getEmailSettings(): ?EmailSettings
    {
        return $this->EmailSettings ?? null;
    }

    /**
     * @return $this
     */
    public function setEmailSettings(?EmailSettings $value = null)
    {
        $this->EmailSettings = $value;

        return $this;
    }
}
