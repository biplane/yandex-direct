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
    protected $MaxLength = null;

    protected $MinLength = null;

    /**
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    public function getMaxLength(): int
    {
        return $this->MaxLength;
    }

    /**
     * @return $this
     */
    public function setMaxLength(int $value)
    {
        $this->MaxLength = $value;

        return $this;
    }

    public function getMinLength(): int
    {
        return $this->MinLength;
    }

    /**
     * @return $this
     */
    public function setMinLength(int $value)
    {
        $this->MinLength = $value;

        return $this;
    }
}
