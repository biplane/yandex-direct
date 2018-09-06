<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class DeduplicateRequest
{

    protected $Keywords = [];

    /**
     * Creates a new instance of DeduplicateRequest.
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
     * @return DeduplicateRequestItem[]
     */
    public function getKeywords()
    {
        return $this->Keywords;
    }

    /**
     * Sets Keywords.
     *
     * @param DeduplicateRequestItem[] $value
     * @return $this
     */
    public function setKeywords(array $value)
    {
        $this->Keywords = $value;

        return $this;
    }


}

