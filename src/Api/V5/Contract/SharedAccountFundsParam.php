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
//    protected $Refund = null;

//    Can be omitted.
//    protected $Spend = null;

    /**
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    public function getRefund(): ?int
    {
        return $this->Refund ?? null;
    }

    /**
     * @return $this
     */
    public function setRefund(?int $value = null)
    {
        $this->Refund = $value;

        return $this;
    }

    public function getSpend(): ?int
    {
        return $this->Spend ?? null;
    }

    /**
     * @return $this
     */
    public function setSpend(?int $value = null)
    {
        $this->Spend = $value;

        return $this;
    }
}
