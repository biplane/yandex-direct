<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class AddNegativeKeywordSharedSetsResponse
{

    protected $AddResults = [];

    /**
     * Creates a new instance of AddNegativeKeywordSharedSetsResponse.
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets AddResults.
     *
     * @return ActionResult[]
     */
    public function getAddResults()
    {
        return $this->AddResults;
    }

    /**
     * Sets AddResults.
     *
     * @param ActionResult[] $value
     * @return $this
     */
    public function setAddResults(array $value)
    {
        $this->AddResults = $value;

        return $this;
    }


}

