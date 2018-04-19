<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class ImageAdAddBase
{

    protected $AdImageHash = null;

    /**
     * Creates a new instance of ImageAdAddBase.
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets AdImageHash.
     *
     * @return string
     */
    public function getAdImageHash()
    {
        return $this->AdImageHash;
    }

    /**
     * Sets AdImageHash.
     *
     * @param string $value
     * @return $this
     */
    public function setAdImageHash($value)
    {
        $this->AdImageHash = $value;

        return $this;
    }


}

