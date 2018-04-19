<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class UnarchiveAdsResponse
{

//    Can be omit.
//    protected $UnarchiveResults = null;

    /**
     * Creates a new instance of UnarchiveAdsResponse.
     *
     * @return self
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
        return isset($this->UnarchiveResults) ? $this->UnarchiveResults : null;
    }

    /**
     * Sets UnarchiveResults.
     *
     * @param ActionResult[]|null $value
     * @return self
     */
    public function setUnarchiveResults(array $value = null)
    {
        $this->UnarchiveResults = $value;

        return $this;
    }


}

