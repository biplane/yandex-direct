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
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    /**
     * @return RetargetingActionResult[]|null
     */
    public function getActionsResult(): ?array
    {
        return $this->ActionsResult;
    }

    /**
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
     * @return Retargeting[]|null
     */
    public function getRetargetings(): ?array
    {
        return $this->Retargetings;
    }

    /**
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
