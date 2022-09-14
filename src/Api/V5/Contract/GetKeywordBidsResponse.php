<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class GetKeywordBidsResponse extends GetResponseGeneral
{
//    Can be omitted.
//    protected $KeywordBids = null;

    /**
     * @return KeywordBidGetItem[]|null
     */
    public function getKeywordBids(): ?array
    {
        return $this->KeywordBids ?? null;
    }

    /**
     * @param KeywordBidGetItem[]|null $value
     *
     * @return $this
     */
    public function setKeywordBids(?array $value = null)
    {
        $this->KeywordBids = $value;

        return $this;
    }
}
