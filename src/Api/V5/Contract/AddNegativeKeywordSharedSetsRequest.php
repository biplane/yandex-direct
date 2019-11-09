<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class AddNegativeKeywordSharedSetsRequest
{

    protected $NegativeKeywordSharedSets = [];

    /**
     * Creates a new instance of AddNegativeKeywordSharedSetsRequest.
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets NegativeKeywordSharedSets.
     *
     * @return NegativeKeywordSharedSetAddItem[]
     */
    public function getNegativeKeywordSharedSets()
    {
        return $this->NegativeKeywordSharedSets;
    }

    /**
     * Sets NegativeKeywordSharedSets.
     *
     * @param NegativeKeywordSharedSetAddItem[] $value
     * @return $this
     */
    public function setNegativeKeywordSharedSets(array $value)
    {
        $this->NegativeKeywordSharedSets = $value;

        return $this;
    }


}

