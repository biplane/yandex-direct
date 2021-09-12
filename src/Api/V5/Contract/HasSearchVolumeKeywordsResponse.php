<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class HasSearchVolumeKeywordsResponse
{
    protected $HasSearchVolumeResults = [];

    /**
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    /**
     * @return HasSearchVolumeItem[]
     */
    public function getHasSearchVolumeResults(): array
    {
        return $this->HasSearchVolumeResults;
    }

    /**
     * @param HasSearchVolumeItem[] $value
     *
     * @return $this
     */
    public function setHasSearchVolumeResults(array $value)
    {
        $this->HasSearchVolumeResults = $value;

        return $this;
    }
}
