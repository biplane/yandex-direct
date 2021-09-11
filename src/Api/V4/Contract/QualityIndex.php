<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V4\Contract;

/**
 * Auto-generated code.
 */
class QualityIndex
{
    protected $Value = null;

    protected $References = [];

    /**
     * Creates a new instance of QualityIndex.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets Value.
     */
    public function getValue(): float
    {
        return $this->Value;
    }

    /**
     * Sets Value.
     *
     * @return $this
     */
    public function setValue(float $value)
    {
        $this->Value = $value;

        return $this;
    }

    /**
     * Gets References.
     *
     * @return int[]
     */
    public function getReferences(): array
    {
        return $this->References;
    }

    /**
     * Sets References.
     *
     * @param int[] $value
     *
     * @return $this
     */
    public function setReferences(array $value)
    {
        $this->References = $value;

        return $this;
    }
}
