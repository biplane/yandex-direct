<?php

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
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets Element.
     *
     * @return string
     * @see ClientRestrictionEnum
     */
    public function getElement()
    {
        return $this->Element;
    }

    /**
     * Sets Element.
     *
     * @param string $value
     * @return self
     * @see ClientRestrictionEnum
     */
    public function setElement($value)
    {
        $this->Element = $value;

        return $this;
    }

    /**
     * Gets Value.
     *
     * @return int
     */
    public function getValue()
    {
        return $this->Value;
    }

    /**
     * Sets Value.
     *
     * @param int $value
     * @return self
     */
    public function setValue($value)
    {
        $this->Value = $value;

        return $this;
    }


}

