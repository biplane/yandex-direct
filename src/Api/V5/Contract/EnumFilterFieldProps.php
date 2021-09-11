<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class EnumFilterFieldProps
{
    protected $Values = [];

    /**
     * Creates a new instance of EnumFilterFieldProps.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets Values.
     *
     * @return string[]
     */
    public function getValues(): array
    {
        return $this->Values;
    }

    /**
     * Sets Values.
     *
     * @param string[] $value
     *
     * @return $this
     */
    public function setValues(array $value)
    {
        $this->Values = $value;

        return $this;
    }
}
