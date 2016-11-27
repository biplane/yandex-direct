<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class KeywordUpdateItem
{

    protected $Id = null;

    protected $Keyword = null;

    protected $UserParam1 = null;

    protected $UserParam2 = null;

    /**
     * Creates a new instance of KeywordUpdateItem.
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
     * @return self
     */
    public function setId($value)
    {
        $this->Id = $value;

        return $this;
    }

    /**
     * Gets Keyword.
     *
     * @return string|null
     */
    public function getKeyword()
    {
        return $this->Keyword;
    }

    /**
     * Sets Keyword.
     *
     * @param string|null $value
     * @return self
     */
    public function setKeyword($value = null)
    {
        $this->Keyword = $value;

        return $this;
    }

    /**
     * Gets UserParam1.
     *
     * @return string|null
     */
    public function getUserParam1()
    {
        return $this->UserParam1;
    }

    /**
     * Sets UserParam1.
     *
     * @param string|null $value
     * @return self
     */
    public function setUserParam1($value = null)
    {
        $this->UserParam1 = $value;

        return $this;
    }

    /**
     * Gets UserParam2.
     *
     * @return string|null
     */
    public function getUserParam2()
    {
        return $this->UserParam2;
    }

    /**
     * Sets UserParam2.
     *
     * @param string|null $value
     * @return self
     */
    public function setUserParam2($value = null)
    {
        $this->UserParam2 = $value;

        return $this;
    }


}

