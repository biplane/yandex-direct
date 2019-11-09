<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class UpdateNegativeKeywordSharedSetsResponse
{

    protected $UpdateResults = [];

    /**
     * Creates a new instance of UpdateNegativeKeywordSharedSetsResponse.
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets UpdateResults.
     *
     * @return ActionResult[]
     */
    public function getUpdateResults()
    {
        return $this->UpdateResults;
    }

    /**
     * Sets UpdateResults.
     *
     * @param ActionResult[] $value
     * @return $this
     */
    public function setUpdateResults(array $value)
    {
        $this->UpdateResults = $value;

        return $this;
    }


}

