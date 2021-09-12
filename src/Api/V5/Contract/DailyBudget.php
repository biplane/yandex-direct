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
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    public function getAmount(): int
    {
        return $this->Amount;
    }

    /**
     * @return $this
     */
    public function setAmount(int $value)
    {
        $this->Amount = $value;

        return $this;
    }

    /**
     * @see DailyBudgetModeEnum
     */
    public function getMode(): string
    {
        return $this->Mode;
    }

    /**
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
