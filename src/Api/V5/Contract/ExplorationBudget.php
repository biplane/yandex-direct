<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class ExplorationBudget
{
    protected $MinimumExplorationBudget = null;

    protected $IsMinimumExplorationBudgetCustom = null;

    /**
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    public function getMinimumExplorationBudget(): int
    {
        return $this->MinimumExplorationBudget;
    }

    /**
     * @return $this
     */
    public function setMinimumExplorationBudget(int $value)
    {
        $this->MinimumExplorationBudget = $value;

        return $this;
    }

    /**
     * @see YesNoEnum
     */
    public function getIsMinimumExplorationBudgetCustom(): string
    {
        return $this->IsMinimumExplorationBudgetCustom;
    }

    /**
     * @see YesNoEnum
     *
     * @return $this
     */
    public function setIsMinimumExplorationBudgetCustom(string $value)
    {
        $this->IsMinimumExplorationBudgetCustom = $value;

        return $this;
    }
}
