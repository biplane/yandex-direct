<?php

namespace Biplane\YandexDirect\Api\V4\Contract;

/**
 * @codeCoverageIgnore
 * @SuppressWarnings(PHPMD)
 */
class RetargetingConditionRequest
{
    /**
     * @var string
     */
    protected $Action;
    /**
     * @var RetargetingConditionSelectionCriteria
     */
    protected $SelectionCriteria;
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
     * Gets the Action.
     *
     * @return string
     */
    public function getAction()
    {
        return $this->Action;
    }

    /**
     * Sets the Action.
     *
     * @param string $Action
     *
     * @return RetargetingConditionRequest
     */
    public function setAction($Action)
    {
        $this->Action = $Action;

        return $this;
    }

    /**
     * Gets the SelectionCriteria.
     *
     * @return RetargetingConditionSelectionCriteria
     */
    public function getSelectionCriteria()
    {
        return $this->SelectionCriteria;
    }

    /**
     * Sets the SelectionCriteria.
     *
     * @param RetargetingConditionSelectionCriteria $SelectionCriteria
     *
     * @return RetargetingConditionRequest
     */
    public function setSelectionCriteria(RetargetingConditionSelectionCriteria $SelectionCriteria)
    {
        $this->SelectionCriteria = $SelectionCriteria;

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
     * @return RetargetingConditionRequest
     */
    public function setRetargetingConditions(array $RetargetingConditions)
    {
        $this->RetargetingConditions = $RetargetingConditions;

        return $this;
    }
}