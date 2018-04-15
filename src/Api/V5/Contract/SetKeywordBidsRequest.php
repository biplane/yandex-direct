<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class SetKeywordBidsRequest
{

    protected $KeywordBids = [];

    /**
     * Creates a new instance of SetKeywordBidsRequest.
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets KeywordBids.
     *
     * @return KeywordBidSetItem[]
     */
    public function getKeywordBids()
    {
        return $this->KeywordBids;
    }

    /**
     * Sets KeywordBids.
     *
     * @param KeywordBidSetItem[] $value
     * @return self
     */
    public function setKeywordBids(array $value)
    {
        $this->KeywordBids = $value;

        return $this;
    }


}

