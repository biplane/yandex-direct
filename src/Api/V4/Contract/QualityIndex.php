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
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    public function getValue(): float
    {
        return $this->Value;
    }

    /**
     * @return $this
     */
    public function setValue(float $value)
    {
        $this->Value = $value;

        return $this;
    }

    /**
     * @return int[]
     */
    public function getReferences(): array
    {
        return $this->References;
    }

    /**
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
