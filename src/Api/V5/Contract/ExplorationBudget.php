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
    /** @var int */
    protected $MinimumExplorationBudget;

    /** @var 'YES'|'NO' */
    protected $IsMinimumExplorationBudgetCustom;

    /**
     * Create a new instance.
     *
     * @return static
     */
    public static function create(): static
    {
        return new static();
    }

    /**
     * Get MinimumExplorationBudget
     */
    public function getMinimumExplorationBudget(): int
    {
        return $this->MinimumExplorationBudget;
    }

    /**
     * Set MinimumExplorationBudget
     *
     * @return $this
     */
    public function setMinimumExplorationBudget(int $value)
    {
        $this->MinimumExplorationBudget = $value;

        return $this;
    }

    /**
     * Get IsMinimumExplorationBudgetCustom
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\YesNoEnum
     *
     * @return 'YES'|'NO'
     */
    public function getIsMinimumExplorationBudgetCustom(): string
    {
        return $this->IsMinimumExplorationBudgetCustom;
    }

    /**
     * Set IsMinimumExplorationBudgetCustom
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\YesNoEnum
     *
     * @param 'YES'|'NO' $value
     *
     * @return $this
     */
    public function setIsMinimumExplorationBudgetCustom(string $value)
    {
        $this->IsMinimumExplorationBudgetCustom = $value;

        return $this;
    }
}
