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
    /** @var non-empty-list<string> */
    protected $Values;

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
     * Get Values
     *
     * @return non-empty-list<string>
     */
    public function getValues(): array
    {
        return $this->Values;
    }

    /**
     * Set Values
     *
     * @param non-empty-list<string> $value
     *
     * @return $this
     */
    public function setValues(array $value)
    {
        $this->Values = $value;

        return $this;
    }
}
