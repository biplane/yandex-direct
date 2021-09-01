<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class StrategyPayForInstallAdd
{

    protected $AverageCpi = null;

//    Can be omit.
//    protected $WeeklySpendLimit = null;

    /**
     * Creates a new instance of StrategyPayForInstallAdd.
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets AverageCpi.
     *
     * @return int
     */
    public function getAverageCpi()
    {
        return $this->AverageCpi;
    }

    /**
     * Sets AverageCpi.
     *
     * @param int $value
     * @return $this
     */
    public function setAverageCpi($value)
    {
        $this->AverageCpi = $value;

        return $this;
    }

    /**
     * Gets WeeklySpendLimit.
     *
     * @return int|null
     */
    public function getWeeklySpendLimit()
    {
        return isset($this->WeeklySpendLimit) ? $this->WeeklySpendLimit : null;
    }

    /**
     * Sets WeeklySpendLimit.
     *
     * @param int|null $value
     * @return $this
     */
    public function setWeeklySpendLimit($value = null)
    {
        $this->WeeklySpendLimit = $value;

        return $this;
    }


}

