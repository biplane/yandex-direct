<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class UnarchiveAdResponse
{

    protected $UnarchiveResults = null;

    /**
     * Creates a new instance of UnarchiveAdResponse.
     *
     * @return UnarchiveAdResponse
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets UnarchiveResults.
     *
     * @return ActionResult[]|null
     */
    public function getUnarchiveResults()
    {
        return $this->UnarchiveResults;
    }

    /**
     * Sets UnarchiveResults.
     *
     * @param ActionResult[]|null $value
     * @return $this
     */
    public function setUnarchiveResults(array $value = null)
    {
        $this->UnarchiveResults = $value;

        return $this;
    }


}

