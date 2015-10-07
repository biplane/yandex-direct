<?php

namespace Biplane\YandexDirect\Api\V4\Contract;

/**
 * Auto-generated code.
 */
class RetargetingConditionResponse
{

    protected $ActionsResult = null;

    protected $RetargetingConditions = null;

    /**
     * Creates a new instance of RetargetingConditionResponse.
     *
     * @return RetargetingConditionResponse
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets ActionsResult.
     *
     * @return RetargetingConditionActionResult[]|null
     */
    public function getActionsResult()
    {
        return $this->ActionsResult;
    }

    /**
     * Sets ActionsResult.
     *
     * @param RetargetingConditionActionResult[]|null $value
     * @return $this
     */
    public function setActionsResult(array $value = null)
    {
        $this->ActionsResult = $value;

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

