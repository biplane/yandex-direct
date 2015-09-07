<?php

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
     *
     * @return RetargetingResponse
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets ActionsResult.
     *
     * @return RetargetingActionResult[]|null
     */
    public function getActionsResult()
    {
        return $this->ActionsResult;
    }

    /**
     * Sets ActionsResult.
     *
     * @param array|null $value
     * @return $this
     */
    public function setActionsResult(array $value = null)
    {
        $this->ActionsResult = $value;

        return $this;
    }

    /**
     * Gets Retargetings.
     *
     * @return Retargeting[]|null
     */
    public function getRetargetings()
    {
        return $this->Retargetings;
    }

    /**
     * Sets Retargetings.
     *
     * @param array|null $value
     * @return $this
     */
    public function setRetargetings(array $value = null)
    {
        $this->Retargetings = $value;

        return $this;
    }


}

