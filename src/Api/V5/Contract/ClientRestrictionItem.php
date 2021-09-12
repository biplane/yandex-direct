<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class ClientRestrictionItem
{
    protected $Element = null;

    protected $Value = null;

    /**
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    /**
     * @see ClientRestrictionEnum
     */
    public function getElement(): string
    {
        return $this->Element;
    }

    /**
     * @see ClientRestrictionEnum
     *
     * @return $this
     */
    public function setElement(string $value)
    {
        $this->Element = $value;

        return $this;
    }

    public function getValue(): int
    {
        return $this->Value;
    }

    /**
     * @return $this
     */
    public function setValue(int $value)
    {
        $this->Value = $value;

        return $this;
    }
}
