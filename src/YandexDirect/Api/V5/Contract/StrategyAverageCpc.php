<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class StrategyAverageCpc
{

    protected $AverageCpc = null;

    protected $WeeklySpendLimit = null;

    /**
     * Creates a new instance of StrategyAverageCpc.
     *
     * @return StrategyAverageCpc
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
        return $this->WeeklySpendLimit;
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

