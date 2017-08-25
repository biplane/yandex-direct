<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class VideoExtensionAddItem
{

    protected $CreativeId = null;

    /**
     * Creates a new instance of VideoExtensionAddItem.
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
        return $this->CreativeId;
    }

    /**
     * Sets CreativeId.
     *
     * @param int|null $value
     * @return self
     */
    public function setCreativeId($value = null)
    {
        $this->CreativeId = $value;

        return $this;
    }


}

