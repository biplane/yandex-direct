<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class HasSearchVolumeKeywordsResponse
{

    protected $HasSearchVolumeResults = [];

    /**
     * Creates a new instance of HasSearchVolumeKeywordsResponse.
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets HasSearchVolumeResults.
     *
     * @return HasSearchVolumeItem[]
     */
    public function getHasSearchVolumeResults()
    {
        return $this->HasSearchVolumeResults;
    }

    /**
     * Sets HasSearchVolumeResults.
     *
     * @param HasSearchVolumeItem[] $value
     * @return $this
     */
    public function setHasSearchVolumeResults(array $value)
    {
        $this->HasSearchVolumeResults = $value;

        return $this;
    }


}

