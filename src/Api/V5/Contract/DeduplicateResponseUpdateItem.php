<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class DeduplicateResponseUpdateItem
{

    protected $Id = null;

    protected $Keyword = null;

    /**
     * Creates a new instance of DeduplicateResponseUpdateItem.
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets Id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->Id;
    }

    /**
     * Sets Id.
     *
     * @param int $value
     * @return $this
     */
    public function setId($value)
    {
        $this->Id = $value;

        return $this;
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

