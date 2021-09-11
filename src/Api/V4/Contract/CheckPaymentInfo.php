<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V4\Contract;

/**
 * Auto-generated code.
 */
class CheckPaymentInfo
{
    protected $CustomTransactionID = null;

    /**
     * Creates a new instance of CheckPaymentInfo.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets CustomTransactionID.
     */
    public function getCustomTransactionID(): string
    {
        return $this->CustomTransactionID;
    }

    /**
     * Sets CustomTransactionID.
     *
     * @return $this
     */
    public function setCustomTransactionID(string $value)
    {
        $this->CustomTransactionID = $value;

        return $this;
    }
}
