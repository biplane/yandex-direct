<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class StringFilterFieldProps
{
    protected $MaxLength = null;

    protected $MinLength = null;

    /**
     * Creates a new instance of StringFilterFieldProps.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets MaxLength.
     */
    public function getMaxLength(): int
    {
        return $this->MaxLength;
    }

    /**
     * Sets MaxLength.
     *
     * @return $this
     */
    public function setMaxLength(int $value)
    {
        $this->MaxLength = $value;

        return $this;
    }

    /**
     * Gets MinLength.
     */
    public function getMinLength(): int
    {
        return $this->MinLength;
    }

    /**
     * Sets MinLength.
     *
     * @return $this
     */
    public function setMinLength(int $value)
    {
        $this->MinLength = $value;

        return $this;
    }
}
