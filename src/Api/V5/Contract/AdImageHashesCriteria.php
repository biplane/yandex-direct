<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class AdImageHashesCriteria
{

    protected $AdImageHashes = [];

    /**
     * Creates a new instance of AdImageHashesCriteria.
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets AdImageHashes.
     *
     * @return string[]
     */
    public function getAdImageHashes()
    {
        return $this->AdImageHashes;
    }

    /**
     * Sets AdImageHashes.
     *
     * @param string[] $value
     * @return self
     */
    public function setAdImageHashes(array $value)
    {
        $this->AdImageHashes = $value;

        return $this;
    }


}

