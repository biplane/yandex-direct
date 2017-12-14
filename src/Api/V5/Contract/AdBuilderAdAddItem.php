<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class AdBuilderAdAddItem
{

    protected $CreativeId = null;

    /**
     * Creates a new instance of AdBuilderAdAddItem.
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
     * @return int
     */
    public function getCreativeId()
    {
        return $this->CreativeId;
    }

    /**
     * Sets CreativeId.
     *
     * @param int $value
     * @return self
     */
    public function setCreativeId($value)
    {
        $this->CreativeId = $value;

        return $this;
    }


}

