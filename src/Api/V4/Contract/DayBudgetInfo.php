<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V4\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class DayBudgetInfo
{
    protected $Amount = null;

    protected $SpendMode = null;

    /**
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    public function getAmount(): float
    {
        return $this->Amount;
    }

    /**
     * @return $this
     */
    public function setAmount(float $value)
    {
        $this->Amount = $value;

        return $this;
    }

    public function getSpendMode(): ?string
    {
        return $this->SpendMode;
    }

    /**
     * @return $this
     */
    public function setSpendMode(?string $value = null)
    {
        $this->SpendMode = $value;

        return $this;
    }
}
