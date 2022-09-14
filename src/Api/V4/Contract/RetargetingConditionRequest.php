<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V4\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class RetargetingConditionRequest
{
    protected $Action = null;

    protected $SelectionCriteria = null;

    protected $RetargetingConditions = null;

    /**
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    public function getAction(): string
    {
        return $this->Action;
    }

    /**
     * @return $this
     */
    public function setAction(string $value)
    {
        $this->Action = $value;

        return $this;
    }

    public function getSelectionCriteria(): ?RetargetingConditionSelectionCriteria
    {
        return $this->SelectionCriteria;
    }

    /**
     * @return $this
     */
    public function setSelectionCriteria(?RetargetingConditionSelectionCriteria $value = null)
    {
        $this->SelectionCriteria = $value;

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
