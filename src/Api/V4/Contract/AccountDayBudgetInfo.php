<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V4\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class AccountDayBudgetInfo
{
    /** @var float */
    protected $Amount;

    /** @var string */
    protected $SpendMode;

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
     * Get SpendMode
     */
    public function getSpendMode(): string
    {
        return $this->SpendMode;
    }

    /**
     * Set SpendMode
     *
     * @return $this
     */
    public function setSpendMode(string $value)
    {
        $this->SpendMode = $value;

        return $this;
    }
}
