<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class Coverage
{
//    Can be omitted.
//    protected $CoverageItems = null;

    /**
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    /**
     * @return NetworkCoverageItem[]|null
     */
    public function getCoverageItems(): ?array
    {
        return $this->CoverageItems ?? null;
    }

    /**
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
