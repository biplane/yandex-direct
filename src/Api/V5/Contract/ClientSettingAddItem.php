<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class ClientSettingAddItem
{
    protected $Option = null;

    protected $Value = null;

    /**
     * Creates a new instance of ClientSettingAddItem.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets Option.
     *
     * @see ClientSettingAddEnum
     */
    public function getOption(): string
    {
        return $this->Option;
    }

    /**
     * Sets Option.
     *
     * @see ClientSettingAddEnum
     *
     * @return $this
     */
    public function setOption(string $value)
    {
        $this->Option = $value;

        return $this;
    }

    /**
     * Gets Value.
     *
     * @see YesNoEnum
     */
    public function getValue(): string
    {
        return $this->Value;
    }

    /**
     * Sets Value.
     *
     * @see YesNoEnum
     *
     * @return $this
     */
    public function setValue(string $value)
    {
        $this->Value = $value;

        return $this;
    }
}
