<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class RelevantKeywordsSetting
{

    protected $BudgetPercent = null;

    protected $Mode = null;

    protected $OptimizeGoalId = null;

    /**
     * Creates a new instance of RelevantKeywordsSetting.
     *
     * @return RelevantKeywordsSetting
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets BudgetPercent.
     *
     * @return int|null
     */
    public function getBudgetPercent()
    {
        return $this->BudgetPercent;
    }

    /**
     * Sets BudgetPercent.
     *
     * @param int|null $value
     * @return $this
     */
    public function setBudgetPercent($value = null)
    {
        $this->BudgetPercent = $value;

        return $this;
    }

    /**
     * Gets Mode.
     *
     * @return RelevantKeywordsModeEnum|null
     */
    public function getMode()
    {
        return $this->Mode;
    }

    /**
     * Sets Mode.
     *
     * @param RelevantKeywordsModeEnum|null $value
     * @return $this
     */
    public function setMode(RelevantKeywordsModeEnum $value = null)
    {
        $this->Mode = $value;

        return $this;
    }

    /**
     * Gets OptimizeGoalId.
     *
     * @return int|null
     */
    public function getOptimizeGoalId()
    {
        return $this->OptimizeGoalId;
    }

    /**
     * Sets OptimizeGoalId.
     *
     * @param int|null $value
     * @return $this
     */
    public function setOptimizeGoalId($value = null)
    {
        $this->OptimizeGoalId = $value;

        return $this;
    }


}

