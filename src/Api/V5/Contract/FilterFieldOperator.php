<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class FilterFieldOperator
{
    protected $MaxItems = null;

    protected $Type = null;

    /**
     * Creates a new instance of FilterFieldOperator.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets MaxItems.
     */
    public function getMaxItems(): int
    {
        return $this->MaxItems;
    }

    /**
     * Sets MaxItems.
     *
     * @return $this
     */
    public function setMaxItems(int $value)
    {
        $this->MaxItems = $value;

        return $this;
    }

    /**
     * Gets Type.
     *
     * @see StringConditionOperatorEnum
     */
    public function getType(): string
    {
        return $this->Type;
    }

    /**
     * Sets Type.
     *
     * @see StringConditionOperatorEnum
     *
     * @return $this
     */
    public function setType(string $value)
    {
        $this->Type = $value;

        return $this;
    }
}
