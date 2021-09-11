<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class SharedAccountFundsParam
{
//    Can be omit.
//    protected $Refund = null;

//    Can be omit.
//    protected $Spend = null;

    /**
     * Creates a new instance of SharedAccountFundsParam.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets Refund.
     */
    public function getRefund(): ?int
    {
        return $this->Refund ?? null;
    }

    /**
     * Sets Refund.
     *
     * @return $this
     */
    public function setRefund(?int $value = null)
    {
        $this->Refund = $value;

        return $this;
    }

    /**
     * Gets Spend.
     */
    public function getSpend(): ?int
    {
        return $this->Spend ?? null;
    }

    /**
     * Sets Spend.
     *
     * @return $this
     */
    public function setSpend(?int $value = null)
    {
        $this->Spend = $value;

        return $this;
    }
}
