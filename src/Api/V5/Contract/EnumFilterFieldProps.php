<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class EnumFilterFieldProps
{
    protected $Values = [];

    /**
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    /**
     * @return string[]
     */
    public function getValues(): array
    {
        return $this->Values;
    }

    /**
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
