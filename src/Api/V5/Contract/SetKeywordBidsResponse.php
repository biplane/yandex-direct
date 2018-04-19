<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class SetKeywordBidsResponse
{

//    Can be omit.
//    protected $SetResults = null;

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
        return isset($this->SetResults) ? $this->SetResults : null;
    }

    /**
     * Sets SetResults.
     *
     * @param KeywordBidActionResult[]|null $value
     * @return $this
     */
    public function setSetResults(array $value = null)
    {
        $this->SetResults = $value;

        return $this;
    }


}

