<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V4\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class CheckPaymentInfo
{
    protected $CustomTransactionID = null;

    /**
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    public function getCustomTransactionID(): string
    {
        return $this->CustomTransactionID;
    }

    /**
     * @return $this
     */
    public function setCustomTransactionID(string $value)
    {
        $this->CustomTransactionID = $value;

        return $this;
    }
}
