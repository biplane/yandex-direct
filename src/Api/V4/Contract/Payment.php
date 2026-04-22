<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V4\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class Payment
{
    /** @var int */
    protected $AccountID;

    /** @var float */
    protected $Amount;

    /** @var string|null */
    protected $Origin = null;

    /** @var string|null */
    protected $Contract = null;

    /** @var string|null */
    protected $Currency = null;

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
     * Get AccountID
     */
    public function getAccountID(): int
    {
        return $this->AccountID;
    }

    /**
     * Set AccountID
     *
     * @return $this
     */
    public function setAccountID(int $value)
    {
        $this->AccountID = $value;

        return $this;
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
     * Get Origin
     */
    public function getOrigin(): ?string
    {
        return $this->Origin;
    }

    /**
     * Set Origin
     *
     * @return $this
     */
    public function setOrigin(?string $value)
    {
        $this->Origin = $value;

        return $this;
    }

    /**
     * Get Contract
     */
    public function getContract(): ?string
    {
        return $this->Contract;
    }

    /**
     * Set Contract
     *
     * @return $this
     */
    public function setContract(?string $value)
    {
        $this->Contract = $value;

        return $this;
    }

    /**
     * Get Currency
     */
    public function getCurrency(): ?string
    {
        return $this->Currency;
    }

    /**
     * Set Currency
     *
     * @return $this
     */
    public function setCurrency(?string $value)
    {
        $this->Currency = $value;

        return $this;
    }
}
