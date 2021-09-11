<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V4\Contract;

/**
 * Auto-generated code.
 */
class RetargetingResponse
{
    protected $ActionsResult = null;

    protected $Retargetings = null;

    /**
     * Creates a new instance of RetargetingResponse.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets ActionsResult.
     *
     * @return RetargetingActionResult[]|null
     */
    public function getActionsResult(): ?array
    {
        return $this->ActionsResult;
    }

    /**
     * Sets ActionsResult.
     *
     * @param RetargetingActionResult[]|null $value
     *
     * @return $this
     */
    public function setActionsResult(?array $value = null)
    {
        $this->ActionsResult = $value;

        return $this;
    }

    /**
     * Gets Retargetings.
     *
     * @return Retargeting[]|null
     */
    public function getRetargetings(): ?array
    {
        return $this->Retargetings;
    }

    /**
     * Sets Retargetings.
     *
     * @param Retargeting[]|null $value
     *
     * @return $this
     */
    public function setRetargetings(?array $value = null)
    {
        $this->Retargetings = $value;

        return $this;
    }
}
