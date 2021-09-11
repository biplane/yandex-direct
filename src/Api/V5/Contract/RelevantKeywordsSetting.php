<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class RelevantKeywordsSetting
{
//    Can be omit.
//    protected $BudgetPercent = null;

//    Can be omit.
//    protected $Mode = null;

//    Can be omit.
//    protected $OptimizeGoalId = null;

    /**
     * Creates a new instance of RelevantKeywordsSetting.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets BudgetPercent.
     */
    public function getBudgetPercent(): ?int
    {
        return $this->BudgetPercent ?? null;
    }

    /**
     * Sets BudgetPercent.
     *
     * @return $this
     */
    public function setBudgetPercent(?int $value = null)
    {
        $this->BudgetPercent = $value;

        return $this;
    }

    /**
     * Gets Mode.
     *
     * @see RelevantKeywordsModeEnum
     */
    public function getMode(): ?string
    {
        return $this->Mode ?? null;
    }

    /**
     * Sets Mode.
     *
     * @see RelevantKeywordsModeEnum
     *
     * @return $this
     */
    public function setMode(?string $value = null)
    {
        $this->Mode = $value;

        return $this;
    }

    /**
     * Gets OptimizeGoalId.
     */
    public function getOptimizeGoalId(): ?int
    {
        return $this->OptimizeGoalId ?? null;
    }

    /**
     * Sets OptimizeGoalId.
     *
     * @return $this
     */
    public function setOptimizeGoalId(?int $value = null)
    {
        $this->OptimizeGoalId = $value;

        return $this;
    }
}
