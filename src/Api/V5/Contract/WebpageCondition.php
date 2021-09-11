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
     * Creates a new instance of WebpageCondition.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets Operand.
     *
     * @see WebpageConditionOperandEnum
     */
    public function getOperand(): string
    {
        return $this->Operand;
    }

    /**
     * Sets Operand.
     *
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
     * Gets Operator.
     *
     * @see StringConditionOperatorEnum
     */
    public function getOperator(): string
    {
        return $this->Operator;
    }

    /**
     * Sets Operator.
     *
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
     * Gets Arguments.
     *
     * @return string[]
     */
    public function getArguments(): array
    {
        return $this->Arguments;
    }

    /**
     * Sets Arguments.
     *
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
