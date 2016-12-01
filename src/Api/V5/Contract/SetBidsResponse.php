<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class SetBidsResponse
{

    protected $SetResults = null;

    /**
     * Creates a new instance of SetBidsResponse.
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets SetResults.
     *
     * @return BidActionResult[]|null
     */
    public function getSetResults()
    {
        return $this->SetResults;
    }

    /**
     * Sets SetResults.
     *
     * @param BidActionResult[]|null $value
     * @return self
     */
    public function setSetResults(array $value = null)
    {
        $this->SetResults = $value;

        return $this;
    }


}

