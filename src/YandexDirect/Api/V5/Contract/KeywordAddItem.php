<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class KeywordAddItem
{

    protected $Keyword = null;

    protected $AdGroupId = null;

    protected $UserParam1 = null;

    protected $UserParam2 = null;

    /**
     * Creates a new instance of KeywordAddItem.
     *
     * @return KeywordAddItem
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

    /**
     * Gets AdGroupId.
     *
     * @return int
     */
    public function getAdGroupId()
    {
        return $this->AdGroupId;
    }

    /**
     * Sets AdGroupId.
     *
     * @param int $value
     * @return $this
     */
    public function setAdGroupId($value)
    {
        $this->AdGroupId = $value;

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
     * @return $this
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
     * @return $this
     */
    public function setUserParam2($value = null)
    {
        $this->UserParam2 = $value;

        return $this;
    }


}

