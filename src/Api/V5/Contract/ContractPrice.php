<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class ContractPrice
{
    protected $Amount = null;

    protected $IncludingVat = null;

    /**
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    public function getAmount(): float
    {
        return $this->Amount;
    }

    /**
     * @return $this
     */
    public function setAmount(float $value)
    {
        $this->Amount = $value;

        return $this;
    }

    /**
     * @see YesNoEnum
     */
    public function getIncludingVat(): string
    {
        return $this->IncludingVat;
    }

    /**
     * @see YesNoEnum
     *
     * @return $this
     */
    public function setIncludingVat(string $value)
    {
        $this->IncludingVat = $value;

        return $this;
    }
}
