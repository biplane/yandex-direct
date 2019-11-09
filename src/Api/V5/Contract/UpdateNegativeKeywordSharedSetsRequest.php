<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class UpdateNegativeKeywordSharedSetsRequest
{

    protected $NegativeKeywordSharedSets = [];

    /**
     * Creates a new instance of UpdateNegativeKeywordSharedSetsRequest.
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
     * @return NegativeKeywordSharedSetUpdateItem[]
     */
    public function getNegativeKeywordSharedSets()
    {
        return $this->NegativeKeywordSharedSets;
    }

    /**
     * Sets NegativeKeywordSharedSets.
     *
     * @param NegativeKeywordSharedSetUpdateItem[] $value
     * @return $this
     */
    public function setNegativeKeywordSharedSets(array $value)
    {
        $this->NegativeKeywordSharedSets = $value;

        return $this;
    }


}

