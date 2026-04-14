<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class SharedAccountFundsParam
{
//    Can be omitted.
//    protected $Refund;

//    Can be omitted.
//    protected $Spend;

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
     * Get Refund
     */
    public function getRefund(): ?int
    {
        return $this->Refund ?? null;
    }

    /**
     * Set Refund
     *
     * @return $this
     */
    public function setRefund(?int $value)
    {
        $this->Refund = $value;

        return $this;
    }

    /**
     * Get Spend
     */
    public function getSpend(): ?int
    {
        return $this->Spend ?? null;
    }

    /**
     * Set Spend
     *
     * @return $this
     */
    public function setSpend(?int $value)
    {
        $this->Spend = $value;

        return $this;
    }
}
