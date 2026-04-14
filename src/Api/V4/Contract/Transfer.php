<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V4\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class Transfer
{
    /** @var int */
    protected $FromAccountID;

    /** @var int */
    protected $ToAccountID;

    /** @var float */
    protected $Amount;

    /** @var string|null */
    protected $Currency = null;

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
     * Get FromAccountID
     */
    public function getFromAccountID(): int
    {
        return $this->FromAccountID;
    }

    /**
     * Set FromAccountID
     *
     * @return $this
     */
    public function setFromAccountID(int $value)
    {
        $this->FromAccountID = $value;

        return $this;
    }

    /**
     * Get ToAccountID
     */
    public function getToAccountID(): int
    {
        return $this->ToAccountID;
    }

    /**
     * Set ToAccountID
     *
     * @return $this
     */
    public function setToAccountID(int $value)
    {
        $this->ToAccountID = $value;

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
