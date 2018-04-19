<?php

namespace Biplane\YandexDirect\Api\V4\Contract;

/**
 * Auto-generated code.
 */
class TagInfo
{

    protected $TagID = null;

    protected $Tag = null;

    /**
     * Creates a new instance of TagInfo.
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets TagID.
     *
     * @return int
     */
    public function getTagID()
    {
        return $this->TagID;
    }

    /**
     * Sets TagID.
     *
     * @param int $value
     * @return $this
     */
    public function setTagID($value)
    {
        $this->TagID = $value;

        return $this;
    }

    /**
     * Gets Tag.
     *
     * @return string
     */
    public function getTag()
    {
        return $this->Tag;
    }

    /**
     * Sets Tag.
     *
     * @param string $value
     * @return $this
     */
    public function setTag($value)
    {
        $this->Tag = $value;

        return $this;
    }


}

