<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class StrategyAverageCpcAdd
{

    protected $AverageCpc = null;

//    Can be omit.
//    protected $WeeklySpendLimit = null;

    /**
     * Creates a new instance of StrategyAverageCpcAdd.
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets AverageCpc.
     *
     * @return int
     */
    public function getAverageCpc()
    {
        return $this->AverageCpc;
    }

    /**
     * Sets AverageCpc.
     *
     * @param int $value
     * @return $this
     */
    public function setAverageCpc($value)
    {
        $this->AverageCpc = $value;

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

