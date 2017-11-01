<?php

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
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets Amount.
     *
     * @return float
     */
    public function getAmount()
    {
        return $this->Amount;
    }

    /**
     * Sets Amount.
     *
     * @param float $value
     * @return self
     */
    public function setAmount($value)
    {
        $this->Amount = $value;

        return $this;
    }

    /**
     * Gets SpendMode.
     *
     * @return string
     */
    public function getSpendMode()
    {
        return $this->SpendMode;
    }

    /**
     * Sets SpendMode.
     *
     * @param string $value
     * @return self
     */
    public function setSpendMode($value)
    {
        $this->SpendMode = $value;

        return $this;
    }


}

