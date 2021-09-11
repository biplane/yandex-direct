<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class AdImageHashesCriteria
{
    protected $AdImageHashes = [];

    /**
     * Creates a new instance of AdImageHashesCriteria.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets AdImageHashes.
     *
     * @return string[]
     */
    public function getAdImageHashes(): array
    {
        return $this->AdImageHashes;
    }

    /**
     * Sets AdImageHashes.
     *
     * @param string[] $value
     *
     * @return $this
     */
    public function setAdImageHashes(array $value)
    {
        $this->AdImageHashes = $value;

        return $this;
    }
}
