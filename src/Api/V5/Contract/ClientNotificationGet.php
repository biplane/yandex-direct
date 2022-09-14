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
