<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class FilterSchemasItem
{
    protected $Name = null;

    protected $Fields = [];

    /**
     * Creates a new instance of FilterSchemasItem.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets Name.
     */
    public function getName(): string
    {
        return $this->Name;
    }

    /**
     * Sets Name.
     *
     * @return $this
     */
    public function setName(string $value)
    {
        $this->Name = $value;

        return $this;
    }

    /**
     * Gets Fields.
     *
     * @return FilterFieldItem[]
     */
    public function getFields(): array
    {
        return $this->Fields;
    }

    /**
     * Sets Fields.
     *
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
