<?php

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
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets Option.
     *
     * @return string
     * @see ClientSettingAddEnum
     */
    public function getOption()
    {
        return $this->Option;
    }

    /**
     * Sets Option.
     *
     * @param string $value
     * @return self
     * @see ClientSettingAddEnum
     */
    public function setOption($value)
    {
        $this->Option = $value;

        return $this;
    }

    /**
     * Gets Value.
     *
     * @return string
     * @see YesNoEnum
     */
    public function getValue()
    {
        return $this->Value;
    }

    /**
     * Sets Value.
     *
     * @param string $value
     * @return self
     * @see YesNoEnum
     */
    public function setValue($value)
    {
        $this->Value = $value;

        return $this;
    }


}

