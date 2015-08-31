<?php

namespace Biplane\YandexDirect\Api\V4\Contract;

/**
 * @codeCoverageIgnore
 * @SuppressWarnings(PHPMD)
 */
class RetargetingConditionResponse
{
    /**
     * @var RetargetingConditionActionResult[]
     */
    protected $ActionsResult;
    /**
     * @var RetargetingCondition[]
     */
    protected $RetargetingConditions;

    /**
     * Creates a new instance.
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets the ActionsResult.
     *
     * @return RetargetingConditionActionResult[]
     */
    public function getActionsResult()
    {
        return $this->ActionsResult;
    }

    /**
     * Sets the ActionsResult.
     *
     * @param RetargetingConditionActionResult[] $ActionsResult
     *
     * @return RetargetingConditionResponse
     */
    public function setActionsResult(array $ActionsResult)
    {
        $this->ActionsResult = $ActionsResult;

        return $this;
    }

    /**
     * Gets the RetargetingConditions.
     *
     * @return RetargetingCondition[]
     */
    public function getRetargetingConditions()
    {
        return $this->RetargetingConditions;
    }

    /**
     * Sets the RetargetingConditions.
     *
     * @param RetargetingCondition[] $RetargetingConditions
     *
     * @return RetargetingConditionResponse
     */
    public function setRetargetingConditions(array $RetargetingConditions)
    {
        $this->RetargetingConditions = $RetargetingConditions;

        return $this;
    }
}