<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V4\Contract;

/**
 * Auto-generated code.
 */
class Payment
{
    protected $AccountID = null;

    protected $Amount = null;

    protected $Origin = null;

    protected $Contract = null;

    protected $Currency = null;

    /**
     * Creates a new instance of Payment.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets AccountID.
     */
    public function getAccountID(): int
    {
        return $this->AccountID;
    }

    /**
     * Sets AccountID.
     *
     * @return $this
     */
    public function setAccountID(int $value)
    {
        $this->AccountID = $value;

        return $this;
    }

    /**
     * Gets Amount.
     */
    public function getAmount(): float
    {
        return $this->Amount;
    }

    /**
     * Sets Amount.
     *
     * @return $this
     */
    public function setAmount(float $value)
    {
        $this->Amount = $value;

        return $this;
    }

    /**
     * Gets Origin.
     */
    public function getOrigin(): ?string
    {
        return $this->Origin;
    }

    /**
     * Sets Origin.
     *
     * @return $this
     */
    public function setOrigin(?string $value = null)
    {
        $this->Origin = $value;

        return $this;
    }

    /**
     * Gets Contract.
     */
    public function getContract(): ?string
    {
        return $this->Contract;
    }

    /**
     * Sets Contract.
     *
     * @return $this
     */
    public function setContract(?string $value = null)
    {
        $this->Contract = $value;

        return $this;
    }

    /**
     * Gets Currency.
     */
    public function getCurrency(): ?string
    {
        return $this->Currency;
    }

    /**
     * Sets Currency.
     *
     * @return $this
     */
    public function setCurrency(?string $value = null)
    {
        $this->Currency = $value;

        return $this;
    }
}
