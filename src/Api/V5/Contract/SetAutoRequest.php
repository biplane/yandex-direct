<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class SetAutoRequest
{

    protected $KeywordBids = [];

    /**
     * Creates a new instance of SetAutoRequest.
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
     * @return KeywordBidSetAutoItem[]
     */
    public function getKeywordBids()
    {
        return $this->KeywordBids;
    }

    /**
     * Sets KeywordBids.
     *
     * @param KeywordBidSetAutoItem[] $value
     * @return $this
     */
    public function setKeywordBids(array $value)
    {
        $this->KeywordBids = $value;

        return $this;
    }


}

