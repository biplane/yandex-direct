<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class KeywordProductivity
{
//    Can be omitted.
//    protected $Value;

//    Can be omitted.
//    protected $References;

    /**
     * Create a new instance.
     *
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    /**
     * Get Value
     */
    public function getValue(): ?float
    {
        return $this->Value ?? null;
    }

    /**
     * Set Value
     *
     * @return $this
     */
    public function setValue(?float $value)
    {
        $this->Value = $value;

        return $this;
    }

    /**
     * Get References
     *
     * @return list<int>
     */
    public function getReferences(): array
    {
        return $this->References ?? [];
    }

    /**
     * Set References
     *
     * @param list<int> $value
     *
     * @return $this
     */
    public function setReferences(array $value)
    {
        $this->References = $value;

        return $this;
    }
}
