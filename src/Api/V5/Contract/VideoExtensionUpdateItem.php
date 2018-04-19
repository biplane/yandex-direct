<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class VideoExtensionUpdateItem
{

//    Can be omit.
//    protected $CreativeId = null;

    /**
     * Creates a new instance of VideoExtensionUpdateItem.
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets CreativeId.
     *
     * @return int|null
     */
    public function getCreativeId()
    {
        return isset($this->CreativeId) ? $this->CreativeId : null;
    }

    /**
     * Sets CreativeId.
     *
     * @param int|null $value
     * @return $this
     */
    public function setCreativeId($value = null)
    {
        $this->CreativeId = $value;

        return $this;
    }


}

