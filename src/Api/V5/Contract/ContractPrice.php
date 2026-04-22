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
    /** @var float */
    protected $Amount;

    /** @var 'YES'|'NO' */
    protected $IncludingVat;

    /**
     * Create a new instance.
     *
     * @return static
     */
    public static function create(): static
    {
        return new static();
    }

    /**
     * Get Amount
     */
    public function getAmount(): float
    {
        return $this->Amount;
    }

    /**
     * Set Amount
     *
     * @return $this
     */
    public function setAmount(float $value)
    {
        $this->Amount = $value;

        return $this;
    }

    /**
     * Get IncludingVat
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\YesNoEnum
     *
     * @return 'YES'|'NO'
     */
    public function getIncludingVat(): string
    {
        return $this->IncludingVat;
    }

    /**
     * Set IncludingVat
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\YesNoEnum
     *
     * @param 'YES'|'NO' $value
     *
     * @return $this
     */
    public function setIncludingVat(string $value)
    {
        $this->IncludingVat = $value;

        return $this;
    }
}
