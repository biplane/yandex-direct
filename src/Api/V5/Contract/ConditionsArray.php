<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class ConditionsArray
{
    protected $Items = [];

    /**
     * Creates a new instance of ConditionsArray.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets Items.
     *
     * @return ConditionsItem[]
     */
    public function getItems(): array
    {
        return $this->Items;
    }

    /**
     * Sets Items.
     *
     * @param ConditionsItem[] $value
     *
     * @return $this
     */
    public function setItems(array $value)
    {
        $this->Items = $value;

        return $this;
    }
}
