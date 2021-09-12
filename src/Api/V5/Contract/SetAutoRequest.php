<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class SetAutoRequest
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
     * @return KeywordBidSetAutoItem[]
     */
    public function getKeywordBids(): array
    {
        return $this->KeywordBids;
    }

    /**
     * @param KeywordBidSetAutoItem[] $value
     *
     * @return $this
     */
    public function setKeywordBids(array $value)
    {
        $this->KeywordBids = $value;

        return $this;
    }
}
