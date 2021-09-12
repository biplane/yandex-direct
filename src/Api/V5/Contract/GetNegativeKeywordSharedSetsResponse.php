<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class GetNegativeKeywordSharedSetsResponse extends GetResponseGeneral
{
//    Can be omitted.
//    protected $NegativeKeywordSharedSets = null;

    /**
     * @return NegativeKeywordSharedSetGetItem[]|null
     */
    public function getNegativeKeywordSharedSets(): ?array
    {
        return $this->NegativeKeywordSharedSets ?? null;
    }

    /**
     * @param NegativeKeywordSharedSetGetItem[]|null $value
     *
     * @return $this
     */
    public function setNegativeKeywordSharedSets(?array $value = null)
    {
        $this->NegativeKeywordSharedSets = $value;

        return $this;
    }
}
