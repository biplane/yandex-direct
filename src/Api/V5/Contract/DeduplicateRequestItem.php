<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class DeduplicateRequestItem
{

//    Can be omit.
//    protected $Id = null;

    protected $Keyword = null;

//    Can be omit.
//    protected $Weight = null;

    /**
     * Creates a new instance of DeduplicateRequestItem.
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
     * @return int|null
     */
    public function getId()
    {
        return isset($this->Id) ? $this->Id : null;
    }

    /**
     * Sets Id.
     *
     * @param int|null $value
     * @return $this
     */
    public function setId($value = null)
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

    /**
     * Gets Weight.
     *
     * @return int|null
     */
    public function getWeight()
    {
        return isset($this->Weight) ? $this->Weight : null;
    }

    /**
     * Sets Weight.
     *
     * @param int|null $value
     * @return $this
     */
    public function setWeight($value = null)
    {
        $this->Weight = $value;

        return $this;
    }


}

