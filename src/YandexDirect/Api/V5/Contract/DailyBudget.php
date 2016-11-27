<?php

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
     * @return int
     */
    public function getAmount()
    {
        return $this->Amount;
    }

    /**
     * Sets Amount.
     *
     * @param int $value
     * @return self
     */
    public function setAmount($value)
    {
        $this->Amount = $value;

        return $this;
    }

    /**
     * Gets Mode.
     *
     * @return string
     * @see DailyBudgetModeEnum
     */
    public function getMode()
    {
        return $this->Mode;
    }

    /**
     * Sets Mode.
     *
     * @param string $value
     * @return self
     * @see DailyBudgetModeEnum
     */
    public function setMode($value)
    {
        $this->Mode = $value;

        return $this;
    }


}

