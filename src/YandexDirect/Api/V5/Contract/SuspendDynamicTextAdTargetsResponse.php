<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class SuspendDynamicTextAdTargetsResponse
{

    protected $SuspendResults = [];

    /**
     * Creates a new instance of SuspendDynamicTextAdTargetsResponse.
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets SuspendResults.
     *
     * @return ActionResult[]
     */
    public function getSuspendResults()
    {
        return $this->SuspendResults;
    }

    /**
     * Sets SuspendResults.
     *
     * @param ActionResult[] $value
     * @return self
     */
    public function setSuspendResults(array $value)
    {
        $this->SuspendResults = $value;

        return $this;
    }


}

