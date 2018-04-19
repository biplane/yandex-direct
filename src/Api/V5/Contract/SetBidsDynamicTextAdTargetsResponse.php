<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class SetBidsDynamicTextAdTargetsResponse
{

//    Can be omit.
//    protected $SetBidsResults = null;

    /**
     * Creates a new instance of SetBidsDynamicTextAdTargetsResponse.
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets SetBidsResults.
     *
     * @return SetBidsActionResult[]|null
     */
    public function getSetBidsResults()
    {
        return isset($this->SetBidsResults) ? $this->SetBidsResults : null;
    }

    /**
     * Sets SetBidsResults.
     *
     * @param SetBidsActionResult[]|null $value
     * @return $this
     */
    public function setSetBidsResults(array $value = null)
    {
        $this->SetBidsResults = $value;

        return $this;
    }


}

