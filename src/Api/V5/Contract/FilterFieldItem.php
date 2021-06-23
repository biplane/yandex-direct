<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class FilterFieldItem
{

    protected $Name = null;

    protected $Type = null;

//    Can be omit.
//    protected $EnumProps = null;

//    Can be omit.
//    protected $NumberProps = null;

//    Can be omit.
//    protected $StringProps = null;

    protected $Operators = [];

    /**
     * Creates a new instance of FilterFieldItem.
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets Name.
     *
     * @return string
     */
    public function getName()
    {
        return $this->Name;
    }

    /**
     * Sets Name.
     *
     * @param string $value
     * @return $this
     */
    public function setName($value)
    {
        $this->Name = $value;

        return $this;
    }

    /**
     * Gets Type.
     *
     * @return string
     * @see FilterFieldType
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
     * @see FilterFieldType
     */
    public function setType($value)
    {
        $this->Type = $value;

        return $this;
    }

    /**
     * Gets EnumProps.
     *
     * @return EnumFilterFieldProps|null
     */
    public function getEnumProps()
    {
        return isset($this->EnumProps) ? $this->EnumProps : null;
    }

    /**
     * Sets EnumProps.
     *
     * @param EnumFilterFieldProps|null $value
     * @return $this
     */
    public function setEnumProps(EnumFilterFieldProps $value = null)
    {
        $this->EnumProps = $value;

        return $this;
    }

    /**
     * Gets NumberProps.
     *
     * @return NumberFilterFieldProps|null
     */
    public function getNumberProps()
    {
        return isset($this->NumberProps) ? $this->NumberProps : null;
    }

    /**
     * Sets NumberProps.
     *
     * @param NumberFilterFieldProps|null $value
     * @return $this
     */
    public function setNumberProps(NumberFilterFieldProps $value = null)
    {
        $this->NumberProps = $value;

        return $this;
    }

    /**
     * Gets StringProps.
     *
     * @return StringFilterFieldProps|null
     */
    public function getStringProps()
    {
        return isset($this->StringProps) ? $this->StringProps : null;
    }

    /**
     * Sets StringProps.
     *
     * @param StringFilterFieldProps|null $value
     * @return $this
     */
    public function setStringProps(StringFilterFieldProps $value = null)
    {
        $this->StringProps = $value;

        return $this;
    }

    /**
     * Gets Operators.
     *
     * @return FilterFieldOperator[]
     */
    public function getOperators()
    {
        return $this->Operators;
    }

    /**
     * Sets Operators.
     *
     * @param FilterFieldOperator[] $value
     * @return $this
     */
    public function setOperators(array $value)
    {
        $this->Operators = $value;

        return $this;
    }


}

