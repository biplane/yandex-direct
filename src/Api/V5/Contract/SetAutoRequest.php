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
     * Creates a new instance of SetAutoRequest.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets KeywordBids.
     *
     * @return KeywordBidSetAutoItem[]
     */
    public function getKeywordBids(): array
    {
        return $this->KeywordBids;
    }

    /**
     * Sets KeywordBids.
     *
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
