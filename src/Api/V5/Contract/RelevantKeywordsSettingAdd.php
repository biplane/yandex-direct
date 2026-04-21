<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class RelevantKeywordsSettingAdd
{
    /** @var int */
    protected $BudgetPercent;

//    Can be omitted.
//    protected $Mode;

//    Can be omitted.
//    protected $OptimizeGoalId;

    /**
     * Create a new instance.
     *
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    /**
     * Get BudgetPercent
     */
    public function getBudgetPercent(): int
    {
        return $this->BudgetPercent;
    }

    /**
     * Set BudgetPercent
     *
     * @return $this
     */
    public function setBudgetPercent(int $value)
    {
        $this->BudgetPercent = $value;

        return $this;
    }

    /**
     * Get Mode
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\RelevantKeywordsModeEnum
     *
     * @return 'MINIMUM'|'OPTIMAL'|'MAXIMUM'|null
     */
    public function getMode(): ?string
    {
        return $this->Mode ?? null;
    }

    /**
     * Set Mode
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\RelevantKeywordsModeEnum
     *
     * @param 'MINIMUM'|'OPTIMAL'|'MAXIMUM'|null $value
     *
     * @return $this
     */
    public function setMode(?string $value)
    {
        $this->Mode = $value;

        return $this;
    }

    /**
     * Get OptimizeGoalId
     */
    public function getOptimizeGoalId(): ?int
    {
        return $this->OptimizeGoalId ?? null;
    }

    /**
     * Set OptimizeGoalId
     *
     * @return $this
     */
    public function setOptimizeGoalId(?int $value)
    {
        $this->OptimizeGoalId = $value;

        return $this;
    }
}
