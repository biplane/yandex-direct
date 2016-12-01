<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class StrategyMaximumConversionRate extends StrategyWeeklyBudgetBase
{

    protected $GoalId = null;

    /**
     * Creates a new instance of StrategyMaximumConversionRate.
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
     * @return int|null
     */
    public function getGoalId()
    {
        return $this->GoalId;
    }

    /**
     * Sets GoalId.
     *
     * @param int|null $value
     * @return self
     */
    public function setGoalId($value = null)
    {
        $this->GoalId = $value;

        return $this;
    }


}

