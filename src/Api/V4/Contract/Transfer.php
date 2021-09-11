<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V4\Contract;

/**
 * Auto-generated code.
 */
class Transfer
{
    protected $FromAccountID = null;

    protected $ToAccountID = null;

    protected $Amount = null;

    protected $Currency = null;

    /**
     * Creates a new instance of Transfer.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets FromAccountID.
     */
    public function getFromAccountID(): int
    {
        return $this->FromAccountID;
    }

    /**
     * Sets FromAccountID.
     *
     * @return $this
     */
    public function setFromAccountID(int $value)
    {
        $this->FromAccountID = $value;

        return $this;
    }

    /**
     * Gets ToAccountID.
     */
    public function getToAccountID(): int
    {
        return $this->ToAccountID;
    }

    /**
     * Sets ToAccountID.
     *
     * @return $this
     */
    public function setToAccountID(int $value)
    {
        $this->ToAccountID = $value;

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
