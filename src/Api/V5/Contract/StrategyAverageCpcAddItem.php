<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class StrategyAverageCpcAddItem
{
    protected $AverageCpc = null;

//    Can be omitted.
//    protected $WeeklySpendLimit = null;

//    Can be omitted.
//    protected $CustomPeriodBudget = null;

    /**
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    public function getAverageCpc(): int
    {
        return $this->AverageCpc;
    }

    /**
     * @return $this
     */
    public function setAverageCpc(int $value)
    {
        $this->AverageCpc = $value;

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

    public function getCustomPeriodBudget(): ?CustomPeriodBudget
    {
        return $this->CustomPeriodBudget ?? null;
    }

    /**
     * @return $this
     */
    public function setCustomPeriodBudget(?CustomPeriodBudget $value = null)
    {
        $this->CustomPeriodBudget = $value;

        return $this;
    }
}
