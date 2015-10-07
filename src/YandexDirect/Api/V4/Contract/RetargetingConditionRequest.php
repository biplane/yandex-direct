<?php

namespace Biplane\YandexDirect\Api\V4\Contract;

/**
 * Auto-generated code.
 */
class RetargetingConditionRequest
{

    protected $Action = null;

    protected $SelectionCriteria = null;

    protected $RetargetingConditions = null;

    /**
     * Creates a new instance of RetargetingConditionRequest.
     *
     * @return RetargetingConditionRequest
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets Action.
     *
     * @return string
     */
    public function getAction()
    {
        return $this->Action;
    }

    /**
     * Sets Action.
     *
     * @param string $value
     * @return $this
     */
    public function setAction($value)
    {
        $this->Action = $value;

        return $this;
    }

    /**
     * Gets SelectionCriteria.
     *
     * @return RetargetingConditionSelectionCriteria|null
     */
    public function getSelectionCriteria()
    {
        return $this->SelectionCriteria;
    }

    /**
     * Sets SelectionCriteria.
     *
     * @param RetargetingConditionSelectionCriteria|null $value
     * @return $this
     */
    public function setSelectionCriteria(RetargetingConditionSelectionCriteria $value = null)
    {
        $this->SelectionCriteria = $value;

        return $this;
    }

    /**
     * Gets RetargetingConditions.
     *
     * @return RetargetingCondition[]|null
     */
    public function getRetargetingConditions()
    {
        return $this->RetargetingConditions;
    }

    /**
     * Sets RetargetingConditions.
     *
     * @param RetargetingCondition[]|null $value
     * @return $this
     */
    public function setRetargetingConditions(array $value = null)
    {
        $this->RetargetingConditions = $value;

        return $this;
    }


}

