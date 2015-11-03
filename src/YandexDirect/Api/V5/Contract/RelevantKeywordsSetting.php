<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class RelevantKeywordsSetting
{

    protected $BudgetPercent = null;

    protected $Mode = null;

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
     * @return RelevantKeywordsModeEnum
     */
    public function getMode()
    {
        return $this->Mode;
    }

    /**
     * Sets Mode.
     *
     * @param RelevantKeywordsModeEnum $value
     * @return $this
     */
    public function setMode(RelevantKeywordsModeEnum $value)
    {
        $this->Mode = $value;

        return $this;
    }


}

