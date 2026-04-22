<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class FilterFieldOperator
{
    /** @var int */
    protected $MaxItems;

    /** @var 'CONTAINS_ANY'|'EQUALS_ANY'|'EXISTS'|'GREATER_THAN'|'IN_RANGE'|'LESS_THAN'|'NOT_CONTAINS_ALL' */
    protected $Type;

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
     * Get MaxItems
     */
    public function getMaxItems(): int
    {
        return $this->MaxItems;
    }

    /**
     * Set MaxItems
     *
     * @return $this
     */
    public function setMaxItems(int $value)
    {
        $this->MaxItems = $value;

        return $this;
    }

    /**
     * Get Type
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\StringConditionOperatorEnum
     *
     * @return 'CONTAINS_ANY'|'EQUALS_ANY'|'EXISTS'|'GREATER_THAN'|'IN_RANGE'|'LESS_THAN'|'NOT_CONTAINS_ALL'
     */
    public function getType(): string
    {
        return $this->Type;
    }

    /**
     * Set Type
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\StringConditionOperatorEnum
     *
     * @param 'CONTAINS_ANY'|'EQUALS_ANY'|'EXISTS'|'GREATER_THAN'|'IN_RANGE'|'LESS_THAN'|'NOT_CONTAINS_ALL' $value
     *
     * @return $this
     */
    public function setType(string $value)
    {
        $this->Type = $value;

        return $this;
    }
}
