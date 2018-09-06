<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class DeduplicateResponseAddItem
{

    protected $Keyword = null;

    /**
     * Creates a new instance of DeduplicateResponseAddItem.
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets Keyword.
     *
     * @return string
     */
    public function getKeyword()
    {
        return $this->Keyword;
    }

    /**
     * Sets Keyword.
     *
     * @param string $value
     * @return $this
     */
    public function setKeyword($value)
    {
        $this->Keyword = $value;

        return $this;
    }


}

