<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class ClientNotificationGet extends ClientNotification
{
    /** @var string */
    protected $SmsPhoneNumber;

    /**
     * Create a new instance.
     *
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    /**
     * Get SmsPhoneNumber
     */
    public function getSmsPhoneNumber(): string
    {
        return $this->SmsPhoneNumber;
    }

    /**
     * Set SmsPhoneNumber
     *
     * @return $this
     */
    public function setSmsPhoneNumber(string $value)
    {
        $this->SmsPhoneNumber = $value;

        return $this;
    }
}
