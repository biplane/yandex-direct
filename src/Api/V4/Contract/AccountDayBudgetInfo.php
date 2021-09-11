<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V4\Contract;

/**
 * Auto-generated code.
 */
class AccountDayBudgetInfo
{
    protected $Amount = null;

    protected $SpendMode = null;

    /**
     * Creates a new instance of AccountDayBudgetInfo.
     */
    public static function create(): self
    {
        return new self();
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
     * Gets SpendMode.
     */
    public function getSpendMode(): string
    {
        return $this->SpendMode;
    }

    /**
     * Sets SpendMode.
     *
     * @return $this
     */
    public function setSpendMode(string $value)
    {
        $this->SpendMode = $value;

        return $this;
    }
}
