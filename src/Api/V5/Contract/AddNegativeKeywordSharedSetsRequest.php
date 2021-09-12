<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class AddNegativeKeywordSharedSetsRequest
{
    protected $NegativeKeywordSharedSets = [];

    /**
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    /**
     * @return NegativeKeywordSharedSetAddItem[]
     */
    public function getNegativeKeywordSharedSets(): array
    {
        return $this->NegativeKeywordSharedSets;
    }

    /**
     * @param NegativeKeywordSharedSetAddItem[] $value
     *
     * @return $this
     */
    public function setNegativeKeywordSharedSets(array $value)
    {
        $this->NegativeKeywordSharedSets = $value;

        return $this;
    }
}
