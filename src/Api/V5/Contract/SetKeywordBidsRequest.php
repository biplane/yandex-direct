<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class SetKeywordBidsRequest
{
    protected $KeywordBids = [];

    /**
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    /**
     * @return KeywordBidSetItem[]
     */
    public function getKeywordBids(): array
    {
        return $this->KeywordBids;
    }

    /**
     * @param KeywordBidSetItem[] $value
     *
     * @return $this
     */
    public function setKeywordBids(array $value)
    {
        $this->KeywordBids = $value;

        return $this;
    }
}
