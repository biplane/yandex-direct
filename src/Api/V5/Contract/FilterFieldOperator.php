<?php

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
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets MaxItems.
     *
     * @return int
     */
    public function getMaxItems()
    {
        return $this->MaxItems;
    }

    /**
     * Sets MaxItems.
     *
     * @param int $value
     * @return $this
     */
    public function setMaxItems($value)
    {
        $this->MaxItems = $value;

        return $this;
    }

    /**
     * Gets Type.
     *
     * @return string
     * @see StringConditionOperatorEnum
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
     * @see StringConditionOperatorEnum
     */
    public function setType($value)
    {
        $this->Type = $value;

        return $this;
    }


}

