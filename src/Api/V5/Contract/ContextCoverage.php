<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class ContextCoverage
{
//    Can be omit.
//    protected $Items = null;

    /**
     * Creates a new instance of ContextCoverage.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets Items.
     *
     * @return ContextCoverageItem[]|null
     */
    public function getItems(): ?array
    {
        return $this->Items ?? null;
    }

    /**
     * Sets Items.
     *
     * @param ContextCoverageItem[]|null $value
     *
     * @return $this
     */
    public function setItems(?array $value = null)
    {
        $this->Items = $value;

        return $this;
    }
}
