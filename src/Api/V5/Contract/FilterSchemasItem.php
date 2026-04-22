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
    /** @var string */
    protected $Name;

    /** @var non-empty-list<FilterFieldItem> */
    protected $Fields;

    /**
     * Create a new instance.
     *
     * @return static
     */
    public static function create(): static
    {
        return new static();
    }

    /**
     * Get Name
     */
    public function getName(): string
    {
        return $this->Name;
    }

    /**
     * Set Name
     *
     * @return $this
     */
    public function setName(string $value)
    {
        $this->Name = $value;

        return $this;
    }

    /**
     * Get Fields
     *
     * @return non-empty-list<FilterFieldItem>
     */
    public function getFields(): array
    {
        return $this->Fields;
    }

    /**
     * Set Fields
     *
     * @param non-empty-list<FilterFieldItem> $value
     *
     * @return $this
     */
    public function setFields(array $value)
    {
        $this->Fields = $value;

        return $this;
    }
}
