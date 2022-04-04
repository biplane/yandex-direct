<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class PlacementType
{

    protected $Type = null;

    protected $Value = null;

    /**
     * Creates a new instance of PlacementType.
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets Type.
     *
     * @return string
     * @see PlacementTypesEnum
     */
    public function getType()
    {
        return $this->Type;
    }

    /**
     * Sets Type.
     *
     * @param string $value
     * @return $this
     * @see PlacementTypesEnum
     */
    public function setType($value)
    {
        $this->Type = $value;

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
     * @return $this
     * @see YesNoEnum
     */
    public function setValue($value)
    {
        $this->Value = $value;

        return $this;
    }


}

