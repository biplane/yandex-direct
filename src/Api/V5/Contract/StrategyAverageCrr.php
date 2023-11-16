<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class StrategyAverageCrr
{
//    Can be omitted.
//    protected $Crr = null;

//    Can be omitted.
//    protected $GoalId = null;

//    Can be omitted.
//    protected $WeeklySpendLimit = null;

//    Can be omitted.
//    protected $ExplorationBudget = null;

    /**
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    public function getCrr(): ?int
    {
        return $this->Crr ?? null;
    }

    /**
     * @return $this
     */
    public function setCrr(?int $value = null)
    {
        $this->Crr = $value;

        return $this;
    }

    public function getGoalId(): ?int
    {
        return $this->GoalId ?? null;
    }

    /**
     * @return $this
     */
    public function setGoalId(?int $value = null)
    {
        $this->GoalId = $value;

        return $this;
    }

    public function getWeeklySpendLimit(): ?int
    {
        return $this->WeeklySpendLimit ?? null;
    }

    /**
     * @return $this
     */
    public function setWeeklySpendLimit(?int $value = null)
    {
        $this->WeeklySpendLimit = $value;

        return $this;
    }

    public function getExplorationBudget(): ?ExplorationBudget
    {
        return $this->ExplorationBudget ?? null;
    }

    /**
     * @return $this
     */
    public function setExplorationBudget(?ExplorationBudget $value = null)
    {
        $this->ExplorationBudget = $value;

        return $this;
    }
}
