<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class StrategyMaximumClicksAdd extends StrategyWeeklyBudgetAddBase
{
//    Can be omitted.
//    protected $CustomPeriodBudget = null;

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
