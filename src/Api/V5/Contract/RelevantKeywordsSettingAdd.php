<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class RelevantKeywordsSettingAdd
{

    protected $BudgetPercent = null;

    protected $Mode = null;

    protected $OptimizeGoalId = null;

    /**
     * Creates a new instance of RelevantKeywordsSettingAdd.
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets BudgetPercent.
     *
     * @return int
     */
    public function getBudgetPercent()
    {
        return $this->BudgetPercent;
    }

    /**
     * Sets BudgetPercent.
     *
     * @param int $value
     * @return self
     */
    public function setBudgetPercent($value)
    {
        $this->BudgetPercent = $value;

        return $this;
    }

    /**
     * Gets Mode.
     *
     * @return string|null
     * @see RelevantKeywordsModeEnum
     */
    public function getMode()
    {
        return $this->Mode;
    }

    /**
     * Sets Mode.
     *
     * @param string|null $value
     * @return self
     * @see RelevantKeywordsModeEnum
     */
    public function setMode($value = null)
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
     * @return self
     */
    public function setOptimizeGoalId($value = null)
    {
        $this->OptimizeGoalId = $value;

        return $this;
    }


}

