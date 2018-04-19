<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class RelevantKeywordsSettingAdd
{

    protected $BudgetPercent = null;

//    Can be omit.
//    protected $Mode = null;

//    Can be omit.
//    protected $OptimizeGoalId = null;

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
     * @return $this
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
        return isset($this->Mode) ? $this->Mode : null;
    }

    /**
     * Sets Mode.
     *
     * @param string|null $value
     * @return $this
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
        return isset($this->OptimizeGoalId) ? $this->OptimizeGoalId : null;
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

