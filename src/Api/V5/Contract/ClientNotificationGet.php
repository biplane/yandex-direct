<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class ClientNotificationGet extends ClientNotification
{
    protected $SmsPhoneNumber = null;

    public function getSmsPhoneNumber(): string
    {
        return $this->SmsPhoneNumber;
    }

    /**
     * @return $this
     */
    public function setSmsPhoneNumber(string $value)
    {
        $this->SmsPhoneNumber = $value;

        return $this;
    }
}
