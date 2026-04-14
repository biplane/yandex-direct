<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class StringFilterFieldProps
{
    /** @var int */
    protected $MaxLength;

    /** @var int */
    protected $MinLength;

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
     * Get MaxLength
     */
    public function getMaxLength(): int
    {
        return $this->MaxLength;
    }

    /**
     * Set MaxLength
     *
     * @return $this
     */
    public function setMaxLength(int $value)
    {
        $this->MaxLength = $value;

        return $this;
    }

    /**
     * Get MinLength
     */
    public function getMinLength(): int
    {
        return $this->MinLength;
    }

    /**
     * Set MinLength
     *
     * @return $this
     */
    public function setMinLength(int $value)
    {
        $this->MinLength = $value;

        return $this;
    }
}
