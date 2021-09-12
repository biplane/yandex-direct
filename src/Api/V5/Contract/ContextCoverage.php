<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class ContextCoverage
{
//    Can be omitted.
//    protected $Items = null;

    /**
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    /**
     * @return ContextCoverageItem[]|null
     */
    public function getItems(): ?array
    {
        return $this->Items ?? null;
    }

    /**
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
