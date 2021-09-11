<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class ClientNotificationGet extends ClientNotification
{
    protected $SmsPhoneNumber = null;

    /**
     * Creates a new instance of ClientNotificationGet.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets SmsPhoneNumber.
     */
    public function getSmsPhoneNumber(): string
    {
        return $this->SmsPhoneNumber;
    }

    /**
     * Sets SmsPhoneNumber.
     *
     * @return $this
     */
    public function setSmsPhoneNumber(string $value)
    {
        $this->SmsPhoneNumber = $value;

        return $this;
    }
}
