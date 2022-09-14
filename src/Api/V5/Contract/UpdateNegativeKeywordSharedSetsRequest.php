<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class UpdateNegativeKeywordSharedSetsRequest
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
     * @return NegativeKeywordSharedSetUpdateItem[]
     */
    public function getNegativeKeywordSharedSets(): array
    {
        return $this->NegativeKeywordSharedSets;
    }

    /**
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
