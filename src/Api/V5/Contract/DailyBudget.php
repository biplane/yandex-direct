<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class DailyBudget
{
    protected $Amount = null;

    protected $Mode = null;

    /**
     * Creates a new instance of DailyBudget.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets Amount.
     */
    public function getAmount(): int
    {
        return $this->Amount;
    }

    /**
     * Sets Amount.
     *
     * @return $this
     */
    public function setAmount(int $value)
    {
        $this->Amount = $value;

        return $this;
    }

    /**
     * Gets Mode.
     *
     * @see DailyBudgetModeEnum
     */
    public function getMode(): string
    {
        return $this->Mode;
    }

    /**
     * Sets Mode.
     *
     * @see DailyBudgetModeEnum
     *
     * @return $this
     */
    public function setMode(string $value)
    {
        $this->Mode = $value;

        return $this;
    }
}
