<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class StrategyAverageCpcGetItem extends StrategyAverageCpcBase
{
//    Can be omitted.
//    protected $BudgetType = null;

    /**
     * @see BudgetTypeEnum
     */
    public function getBudgetType(): ?string
    {
        return $this->BudgetType ?? null;
    }

    /**
     * @see BudgetTypeEnum
     *
     * @return $this
     */
    public function setBudgetType(?string $value = null)
    {
        $this->BudgetType = $value;

        return $this;
    }
}
