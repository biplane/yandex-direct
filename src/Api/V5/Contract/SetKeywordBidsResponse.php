<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class SetKeywordBidsResponse
{

    protected $SetResults = null;

    /**
     * Creates a new instance of SetKeywordBidsResponse.
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
     * @return KeywordBidActionResult[]|null
     */
    public function getSetResults()
    {
        return $this->SetResults;
    }

    /**
     * Sets SetResults.
     *
     * @param KeywordBidActionResult[]|null $value
     * @return self
     */
    public function setSetResults(array $value = null)
    {
        $this->SetResults = $value;

        return $this;
    }


}

