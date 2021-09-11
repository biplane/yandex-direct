<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class UpdateNegativeKeywordSharedSetsRequest
{
    protected $NegativeKeywordSharedSets = [];

    /**
     * Creates a new instance of UpdateNegativeKeywordSharedSetsRequest.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets NegativeKeywordSharedSets.
     *
     * @return NegativeKeywordSharedSetUpdateItem[]
     */
    public function getNegativeKeywordSharedSets(): array
    {
        return $this->NegativeKeywordSharedSets;
    }

    /**
     * Sets NegativeKeywordSharedSets.
     *
     * @param NegativeKeywordSharedSetUpdateItem[] $value
     *
     * @return $this
     */
    public function setNegativeKeywordSharedSets(array $value)
    {
        $this->NegativeKeywordSharedSets = $value;

        return $this;
    }
}
