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
    /** @var string */
    protected $Name;

    /** @var 'Enum'|'Number'|'String' */
    protected $Type;

//    Can be omitted.
//    protected $EnumProps;

//    Can be omitted.
//    protected $NumberProps;

//    Can be omitted.
//    protected $StringProps;

    /** @var non-empty-list<FilterFieldOperator> */
    protected $Operators;

    /**
     * Create a new instance.
     *
     * @return static
     */
    public static function create(): static
    {
        return new static();
    }

    /**
     * Get Name
     */
    public function getName(): string
    {
        return $this->Name;
    }

    /**
     * Set Name
     *
     * @return $this
     */
    public function setName(string $value)
    {
        $this->Name = $value;

        return $this;
    }

    /**
     * Get Type
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\FilterFieldType
     *
     * @return 'Enum'|'Number'|'String'
     */
    public function getType(): string
    {
        return $this->Type;
    }

    /**
     * Set Type
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\FilterFieldType
     *
     * @param 'Enum'|'Number'|'String' $value
     *
     * @return $this
     */
    public function setType(string $value)
    {
        $this->Type = $value;

        return $this;
    }

    /**
     * Get EnumProps
     */
    public function getEnumProps(): ?EnumFilterFieldProps
    {
        return $this->EnumProps ?? null;
    }

    /**
     * Set EnumProps
     *
     * @return $this
     */
    public function setEnumProps(?EnumFilterFieldProps $value)
    {
        $this->EnumProps = $value;

        return $this;
    }

    /**
     * Get NumberProps
     */
    public function getNumberProps(): ?NumberFilterFieldProps
    {
        return $this->NumberProps ?? null;
    }

    /**
     * Set NumberProps
     *
     * @return $this
     */
    public function setNumberProps(?NumberFilterFieldProps $value)
    {
        $this->NumberProps = $value;

        return $this;
    }

    /**
     * Get StringProps
     */
    public function getStringProps(): ?StringFilterFieldProps
    {
        return $this->StringProps ?? null;
    }

    /**
     * Set StringProps
     *
     * @return $this
     */
    public function setStringProps(?StringFilterFieldProps $value)
    {
        $this->StringProps = $value;

        return $this;
    }

    /**
     * Get Operators
     *
     * @return non-empty-list<FilterFieldOperator>
     */
    public function getOperators(): array
    {
        return $this->Operators;
    }

    /**
     * Set Operators
     *
     * @param non-empty-list<FilterFieldOperator> $value
     *
     * @return $this
     */
    public function setOperators(array $value)
    {
        $this->Operators = $value;

        return $this;
    }
}
