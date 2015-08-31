<?php

namespace Biplane\YandexDirect\Api\V4\Contract;

/**
 * @codeCoverageIgnore
 * @SuppressWarnings(PHPMD)
 */
class RetargetingResponse
{
    /**
     * @var RetargetingActionResult[]
     */
    protected $ActionsResult;
    /**
     * @var Retargeting[]
     */
    protected $Retargetings;

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
     * @return RetargetingActionResult[]
     */
    public function getActionsResult()
    {
        return $this->ActionsResult;
    }

    /**
     * Sets the ActionsResult.
     *
     * @param RetargetingActionResult[] $ActionsResult
     *
     * @return RetargetingResponse
     */
    public function setActionsResult(array $ActionsResult)
    {
        $this->ActionsResult = $ActionsResult;

        return $this;
    }

    /**
     * Gets the Retargetings.
     *
     * @return Retargeting[]
     */
    public function getRetargetings()
    {
        return $this->Retargetings;
    }

    /**
     * Sets the Retargetings.
     *
     * @param Retargeting[] $Retargetings
     *
     * @return RetargetingResponse
     */
    public function setRetargetings(array $Retargetings)
    {
        $this->Retargetings = $Retargetings;

        return $this;
    }
}