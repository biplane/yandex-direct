<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class WebpageCondition
{
    protected $Operand = null;

    protected $Operator = null;

    protected $Arguments = [];

    /**
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    /**
     * @see WebpageConditionOperandEnum
     */
    public function getOperand(): string
    {
        return $this->Operand;
    }

    /**
     * @see WebpageConditionOperandEnum
     *
     * @return $this
     */
    public function setOperand(string $value)
    {
        $this->Operand = $value;

        return $this;
    }

    /**
     * @see StringConditionOperatorEnum
     */
    public function getOperator(): string
    {
        return $this->Operator;
    }

    /**
     * @see StringConditionOperatorEnum
     *
     * @return $this
     */
    public function setOperator(string $value)
    {
        $this->Operator = $value;

        return $this;
    }

    /**
     * @return string[]
     */
    public function getArguments(): array
    {
        return $this->Arguments;
    }

    /**
     * @param string[] $value
     *
     * @return $this
     */
    public function setArguments(array $value)
    {
        $this->Arguments = $value;

        return $this;
    }
}
