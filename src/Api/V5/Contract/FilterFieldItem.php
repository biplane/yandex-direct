<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class FilterFieldItem
{
    protected $Name = null;

    protected $Type = null;

//    Can be omitted.
//    protected $EnumProps = null;

//    Can be omitted.
//    protected $NumberProps = null;

//    Can be omitted.
//    protected $StringProps = null;

    protected $Operators = [];

    /**
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    public function getName(): string
    {
        return $this->Name;
    }

    /**
     * @return $this
     */
    public function setName(string $value)
    {
        $this->Name = $value;

        return $this;
    }

    /**
     * @see FilterFieldType
     */
    public function getType(): string
    {
        return $this->Type;
    }

    /**
     * @see FilterFieldType
     *
     * @return $this
     */
    public function setType(string $value)
    {
        $this->Type = $value;

        return $this;
    }

    public function getEnumProps(): ?EnumFilterFieldProps
    {
        return $this->EnumProps ?? null;
    }

    /**
     * @return $this
     */
    public function setEnumProps(?EnumFilterFieldProps $value = null)
    {
        $this->EnumProps = $value;

        return $this;
    }

    public function getNumberProps(): ?NumberFilterFieldProps
    {
        return $this->NumberProps ?? null;
    }

    /**
     * @return $this
     */
    public function setNumberProps(?NumberFilterFieldProps $value = null)
    {
        $this->NumberProps = $value;

        return $this;
    }

    public function getStringProps(): ?StringFilterFieldProps
    {
        return $this->StringProps ?? null;
    }

    /**
     * @return $this
     */
    public function setStringProps(?StringFilterFieldProps $value = null)
    {
        $this->StringProps = $value;

        return $this;
    }

    /**
     * @return FilterFieldOperator[]
     */
    public function getOperators(): array
    {
        return $this->Operators;
    }

    /**
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
