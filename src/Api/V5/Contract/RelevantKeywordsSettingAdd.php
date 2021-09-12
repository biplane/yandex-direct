<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class RelevantKeywordsSettingAdd
{
    protected $BudgetPercent = null;

//    Can be omitted.
//    protected $Mode = null;

//    Can be omitted.
//    protected $OptimizeGoalId = null;

    /**
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    public function getBudgetPercent(): int
    {
        return $this->BudgetPercent;
    }

    /**
     * @return $this
     */
    public function setBudgetPercent(int $value)
    {
        $this->BudgetPercent = $value;

        return $this;
    }

    /**
     * @see RelevantKeywordsModeEnum
     */
    public function getMode(): ?string
    {
        return $this->Mode ?? null;
    }

    /**
     * @see RelevantKeywordsModeEnum
     *
     * @return $this
     */
    public function setMode(?string $value = null)
    {
        $this->Mode = $value;

        return $this;
    }

    public function getOptimizeGoalId(): ?int
    {
        return $this->OptimizeGoalId ?? null;
    }

    /**
     * @return $this
     */
    public function setOptimizeGoalId(?int $value = null)
    {
        $this->OptimizeGoalId = $value;

        return $this;
    }
}
