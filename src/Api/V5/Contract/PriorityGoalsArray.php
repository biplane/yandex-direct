<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class PriorityGoalsArray
{
    protected $Items = [];

    /**
     * Creates a new instance of PriorityGoalsArray.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets Items.
     *
     * @return PriorityGoalsItem[]
     */
    public function getItems(): array
    {
        return $this->Items;
    }

    /**
     * Sets Items.
     *
     * @param PriorityGoalsItem[] $value
     *
     * @return $this
     */
    public function setItems(array $value)
    {
        $this->Items = $value;

        return $this;
    }
}
