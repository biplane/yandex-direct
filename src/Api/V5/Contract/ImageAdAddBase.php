<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class ImageAdAddBase
{
    protected $AdImageHash = null;

    /**
     * Creates a new instance of ImageAdAddBase.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets AdImageHash.
     */
    public function getAdImageHash(): string
    {
        return $this->AdImageHash;
    }

    /**
     * Sets AdImageHash.
     *
     * @return $this
     */
    public function setAdImageHash(string $value)
    {
        $this->AdImageHash = $value;

        return $this;
    }
}
