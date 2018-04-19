<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class GetKeywordsResponse extends GetResponseGeneral
{

//    Can be omit.
//    protected $Keywords = null;

    /**
     * Creates a new instance of GetKeywordsResponse.
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
     * @return KeywordGetItem[]|null
     */
    public function getKeywords()
    {
        return isset($this->Keywords) ? $this->Keywords : null;
    }

    /**
     * Sets Keywords.
     *
     * @param KeywordGetItem[]|null $value
     * @return self
     */
    public function setKeywords(array $value = null)
    {
        $this->Keywords = $value;

        return $this;
    }


}

