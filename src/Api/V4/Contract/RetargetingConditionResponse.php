<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V4\Contract;

/**
 * Auto-generated code.
 */
class RetargetingConditionResponse
{
    protected $ActionsResult = null;

    protected $RetargetingConditions = null;

    /**
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    /**
     * @return RetargetingConditionActionResult[]|null
     */
    public function getActionsResult(): ?array
    {
        return $this->ActionsResult;
    }

    /**
     * @param RetargetingConditionActionResult[]|null $value
     *
     * @return $this
     */
    public function setActionsResult(?array $value = null)
    {
        $this->ActionsResult = $value;

        return $this;
    }

    /**
     * @return RetargetingCondition[]|null
     */
    public function getRetargetingConditions(): ?array
    {
        return $this->RetargetingConditions;
    }

    /**
     * @param RetargetingCondition[]|null $value
     *
     * @return $this
     */
    public function setRetargetingConditions(?array $value = null)
    {
        $this->RetargetingConditions = $value;

        return $this;
    }
}
