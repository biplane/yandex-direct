<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class DeduplicateRequest
{

//    Can be omit.
//    protected $Operation = null;

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
     * Gets Operation.
     *
     * @return string[]|null
     * @see DeduplicateOperationEnum
     */
    public function getOperation()
    {
        return isset($this->Operation) ? $this->Operation : null;
    }

    /**
     * Sets Operation.
     *
     * @param string[]|null $value
     * @return $this
     * @see DeduplicateOperationEnum
     */
    public function setOperation(array $value = null)
    {
        $this->Operation = $value;

        return $this;
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

