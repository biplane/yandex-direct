<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class StrategyMaximumConversionRateAdd extends StrategyWeeklyBudgetAddBase
{

    protected $GoalId = null;

    /**
     * Creates a new instance of StrategyMaximumConversionRateAdd.
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets GoalId.
     *
     * @return int
     */
    public function getGoalId()
    {
        return $this->GoalId;
    }

    /**
     * Sets GoalId.
     *
     * @param int $value
     * @return self
     */
    public function setGoalId($value)
    {
        $this->GoalId = $value;

        return $this;
    }


}

