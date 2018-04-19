<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class SetAutoBidsResponse
{

//    Can be omit.
//    protected $SetAutoResults = null;

    /**
     * Creates a new instance of SetAutoBidsResponse.
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets SetAutoResults.
     *
     * @return BidActionResult[]|null
     */
    public function getSetAutoResults()
    {
        return isset($this->SetAutoResults) ? $this->SetAutoResults : null;
    }

    /**
     * Sets SetAutoResults.
     *
     * @param BidActionResult[]|null $value
     * @return $this
     */
    public function setSetAutoResults(array $value = null)
    {
        $this->SetAutoResults = $value;

        return $this;
    }


}

