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
     * Creates a new instance of HasSearchVolumeKeywordsResponse.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets HasSearchVolumeResults.
     *
     * @return HasSearchVolumeItem[]
     */
    public function getHasSearchVolumeResults(): array
    {
        return $this->HasSearchVolumeResults;
    }

    /**
     * Sets HasSearchVolumeResults.
     *
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
