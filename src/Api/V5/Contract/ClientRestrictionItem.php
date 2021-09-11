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
     * Creates a new instance of ClientRestrictionItem.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets Element.
     *
     * @see ClientRestrictionEnum
     */
    public function getElement(): string
    {
        return $this->Element;
    }

    /**
     * Sets Element.
     *
     * @see ClientRestrictionEnum
     *
     * @return $this
     */
    public function setElement(string $value)
    {
        $this->Element = $value;

        return $this;
    }

    /**
     * Gets Value.
     */
    public function getValue(): int
    {
        return $this->Value;
    }

    /**
     * Sets Value.
     *
     * @return $this
     */
    public function setValue(int $value)
    {
        $this->Value = $value;

        return $this;
    }
}
