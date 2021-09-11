<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class GetKeywordBidsResponse extends GetResponseGeneral
{
//    Can be omit.
//    protected $KeywordBids = null;

    /**
     * Creates a new instance of GetKeywordBidsResponse.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets KeywordBids.
     *
     * @return KeywordBidGetItem[]|null
     */
    public function getKeywordBids(): ?array
    {
        return $this->KeywordBids ?? null;
    }

    /**
     * Sets KeywordBids.
     *
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
