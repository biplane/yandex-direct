<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class ConstantsItem
{
    protected $Name = null;

    protected $Value = null;

    /**
     * Creates a new instance of ConstantsItem.
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
     * Gets Value.
     */
    public function getValue(): string
    {
        return $this->Value;
    }

    /**
     * Sets Value.
     *
     * @return $this
     */
    public function setValue(string $value)
    {
        $this->Value = $value;

        return $this;
    }
}
