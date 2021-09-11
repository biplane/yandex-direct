<?php

declare(strict_types=1);

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
     * Gets Type.
     *
     * @see FilterFieldType
     */
    public function getType(): string
    {
        return $this->Type;
    }

    /**
     * Sets Type.
     *
     * @see FilterFieldType
     *
     * @return $this
     */
    public function setType(string $value)
    {
        $this->Type = $value;

        return $this;
    }

    /**
     * Gets EnumProps.
     */
    public function getEnumProps(): ?EnumFilterFieldProps
    {
        return $this->EnumProps ?? null;
    }

    /**
     * Sets EnumProps.
     *
     * @return $this
     */
    public function setEnumProps(?EnumFilterFieldProps $value = null)
    {
        $this->EnumProps = $value;

        return $this;
    }

    /**
     * Gets NumberProps.
     */
    public function getNumberProps(): ?NumberFilterFieldProps
    {
        return $this->NumberProps ?? null;
    }

    /**
     * Sets NumberProps.
     *
     * @return $this
     */
    public function setNumberProps(?NumberFilterFieldProps $value = null)
    {
        $this->NumberProps = $value;

        return $this;
    }

    /**
     * Gets StringProps.
     */
    public function getStringProps(): ?StringFilterFieldProps
    {
        return $this->StringProps ?? null;
    }

    /**
     * Sets StringProps.
     *
     * @return $this
     */
    public function setStringProps(?StringFilterFieldProps $value = null)
    {
        $this->StringProps = $value;

        return $this;
    }

    /**
     * Gets Operators.
     *
     * @return FilterFieldOperator[]
     */
    public function getOperators(): array
    {
        return $this->Operators;
    }

    /**
     * Sets Operators.
     *
     * @param FilterFieldOperator[] $value
     *
     * @return $this
     */
    public function setOperators(array $value)
    {
        $this->Operators = $value;

        return $this;
    }
}
