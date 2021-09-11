<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class AvailableForTargetsInAdGroupTypesArray
{
    protected $Items = [];

    /**
     * Creates a new instance of AvailableForTargetsInAdGroupTypesArray.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets Items.
     *
     * @see AdGroupTypesEnum
     *
     * @return string[]
     */
    public function getItems(): array
    {
        return $this->Items;
    }

    /**
     * Sets Items.
     *
     * @see AdGroupTypesEnum
     *
     * @param string[] $value
     *
     * @return $this
     */
    public function setItems(array $value)
    {
        $this->Items = $value;

        return $this;
    }
}
