<?php

declare(strict_types=1);

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
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets Action.
     */
    public function getAction(): string
    {
        return $this->Action;
    }

    /**
     * Sets Action.
     *
     * @return $this
     */
    public function setAction(string $value)
    {
        $this->Action = $value;

        return $this;
    }

    /**
     * Gets SelectionCriteria.
     */
    public function getSelectionCriteria(): ?RetargetingConditionSelectionCriteria
    {
        return $this->SelectionCriteria;
    }

    /**
     * Sets SelectionCriteria.
     *
     * @return $this
     */
    public function setSelectionCriteria(?RetargetingConditionSelectionCriteria $value = null)
    {
        $this->SelectionCriteria = $value;

        return $this;
    }

    /**
     * Gets RetargetingConditions.
     *
     * @return RetargetingCondition[]|null
     */
    public function getRetargetingConditions(): ?array
    {
        return $this->RetargetingConditions;
    }

    /**
     * Sets RetargetingConditions.
     *
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
