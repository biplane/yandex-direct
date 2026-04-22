<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class DailyBudget
{
    /** @var int */
    protected $Amount;

    /** @var 'STANDARD'|'DISTRIBUTED' */
    protected $Mode;

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
    public function getAmount(): int
    {
        return $this->Amount;
    }

    /**
     * Set Amount
     *
     * @return $this
     */
    public function setAmount(int $value)
    {
        $this->Amount = $value;

        return $this;
    }

    /**
     * Get Mode
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\DailyBudgetModeEnum
     *
     * @return 'STANDARD'|'DISTRIBUTED'
     */
    public function getMode(): string
    {
        return $this->Mode;
    }

    /**
     * Set Mode
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\DailyBudgetModeEnum
     *
     * @param 'STANDARD'|'DISTRIBUTED' $value
     *
     * @return $this
     */
    public function setMode(string $value)
    {
        $this->Mode = $value;

        return $this;
    }
}
