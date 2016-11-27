<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class UpdateKeywordsRequest
{

    protected $Keywords = [];

    /**
     * Creates a new instance of UpdateKeywordsRequest.
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets Keywords.
     *
     * @return KeywordUpdateItem[]
     */
    public function getKeywords()
    {
        return $this->Keywords;
    }

    /**
     * Sets Keywords.
     *
     * @param KeywordUpdateItem[] $value
     * @return self
     */
    public function setKeywords(array $value)
    {
        $this->Keywords = $value;

        return $this;
    }


}

