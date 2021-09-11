<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class SetKeywordBidsRequest
{
    protected $KeywordBids = [];

    /**
     * Creates a new instance of SetKeywordBidsRequest.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets KeywordBids.
     *
     * @return KeywordBidSetItem[]
     */
    public function getKeywordBids(): array
    {
        return $this->KeywordBids;
    }

    /**
     * Sets KeywordBids.
     *
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
