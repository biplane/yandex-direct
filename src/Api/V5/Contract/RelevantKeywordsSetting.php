<?php

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
     * @return int|null
     */
    public function getBudgetPercent()
    {
        return isset($this->BudgetPercent) ? $this->BudgetPercent : null;
    }

    /**
     * Sets BudgetPercent.
     *
     * @param int|null $value
     * @return self
     */
    public function setBudgetPercent($value = null)
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
        return isset($this->OptimizeGoalId) ? $this->OptimizeGoalId : null;
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

