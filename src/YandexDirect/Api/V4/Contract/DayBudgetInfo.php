<?php

namespace Biplane\YandexDirect\Api\V4\Contract;

/**
 * @codeCoverageIgnore
 * @SuppressWarnings(PHPMD)
 */
class DayBudgetInfo
{
    /**
     * @var float
     */
    protected $Amount;
    /**
     * @var string
     */
    protected $SpendMode;

    /**
     * Creates a new instance.
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets the Amount.
     *
     * @return float
     */
    public function getAmount()
    {
        return $this->Amount;
    }

    /**
     * Sets the Amount.
     *
     * @param float $Amount
     *
     * @return DayBudgetInfo
     */
    public function setAmount($Amount)
    {
        $this->Amount = $Amount;

        return $this;
    }

    /**
     * Gets the SpendMode.
     *
     * @return string
     */
    public function getSpendMode()
    {
        return $this->SpendMode;
    }

    /**
     * Sets the SpendMode.
     *
     * @param string $SpendMode
     *
     * @return DayBudgetInfo
     */
    public function setSpendMode($SpendMode)
    {
        $this->SpendMode = $SpendMode;

        return $this;
    }
}