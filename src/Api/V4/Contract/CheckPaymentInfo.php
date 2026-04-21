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
    /** @var string */
    protected $CustomTransactionID;

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
     * Get CustomTransactionID
     */
    public function getCustomTransactionID(): string
    {
        return $this->CustomTransactionID;
    }

    /**
     * Set CustomTransactionID
     *
     * @return $this
     */
    public function setCustomTransactionID(string $value)
    {
        $this->CustomTransactionID = $value;

        return $this;
    }
}
