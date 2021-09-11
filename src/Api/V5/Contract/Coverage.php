<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class Coverage
{
//    Can be omit.
//    protected $CoverageItems = null;

    /**
     * Creates a new instance of Coverage.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets CoverageItems.
     *
     * @return NetworkCoverageItem[]|null
     */
    public function getCoverageItems(): ?array
    {
        return $this->CoverageItems ?? null;
    }

    /**
     * Sets CoverageItems.
     *
     * @param NetworkCoverageItem[]|null $value
     *
     * @return $this
     */
    public function setCoverageItems(?array $value = null)
    {
        $this->CoverageItems = $value;

        return $this;
    }
}
