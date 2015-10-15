<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class GetKeywordsResponse extends GetResponseGeneral
{

    protected $Keywords = null;

    /**
     * Creates a new instance of GetKeywordsResponse.
     *
     * @return GetKeywordsResponse
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets Keywords.
     *
     * @return KeywordGetItem[]|null
     */
    public function getKeywords()
    {
        return $this->Keywords;
    }

    /**
     * Sets Keywords.
     *
     * @param KeywordGetItem[]|null $value
     * @return $this
     */
    public function setKeywords(array $value = null)
    {
        $this->Keywords = $value;

        return $this;
    }


}

