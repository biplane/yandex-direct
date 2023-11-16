<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class StrategyAverageCrrAdd
{
    protected $Crr = null;

    protected $GoalId = null;

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

    public function getCrr(): int
    {
        return $this->Crr;
    }

    /**
     * @return $this
     */
    public function setCrr(int $value)
    {
        $this->Crr = $value;

        return $this;
    }

    public function getGoalId(): int
    {
        return $this->GoalId;
    }

    /**
     * @return $this
     */
    public function setGoalId(int $value)
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
