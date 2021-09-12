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
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    public function getMaxItems(): int
    {
        return $this->MaxItems;
    }

    /**
     * @return $this
     */
    public function setMaxItems(int $value)
    {
        $this->MaxItems = $value;

        return $this;
    }

    /**
     * @see StringConditionOperatorEnum
     */
    public function getType(): string
    {
        return $this->Type;
    }

    /**
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
