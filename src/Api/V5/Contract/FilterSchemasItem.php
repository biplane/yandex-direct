<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class FilterSchemasItem
{
    protected $Name = null;

    protected $Fields = [];

    /**
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    public function getName(): string
    {
        return $this->Name;
    }

    /**
     * @return $this
     */
    public function setName(string $value)
    {
        $this->Name = $value;

        return $this;
    }

    /**
     * @return FilterFieldItem[]
     */
    public function getFields(): array
    {
        return $this->Fields;
    }

    /**
     * @param FilterFieldItem[] $value
     *
     * @return $this
     */
    public function setFields(array $value)
    {
        $this->Fields = $value;

        return $this;
    }
}
