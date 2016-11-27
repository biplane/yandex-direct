<?php

namespace Biplane\YandexDirect\Api\V4\Contract;

/**
 * Auto-generated code.
 */
class KeywordsSuggestionInfo
{

    protected $Keywords = [];

    /**
     * Creates a new instance of KeywordsSuggestionInfo.
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
     * @return string[]
     */
    public function getKeywords()
    {
        return $this->Keywords;
    }

    /**
     * Sets Keywords.
     *
     * @param string[] $value
     * @return self
     */
    public function setKeywords(array $value)
    {
        $this->Keywords = $value;

        return $this;
    }


}

