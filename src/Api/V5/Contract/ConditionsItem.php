<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class ConditionsItem
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

    public function getOperand(): string
    {
        return $this->Operand;
    }

    /**
     * @return $this
     */
    public function setOperand(string $value)
    {
        $this->Operand = $value;

        return $this;
    }

    /**
     * @see SmartAdTargetStringConditionOperatorEnum
     */
    public function getOperator(): string
    {
        return $this->Operator;
    }

    /**
     * @see SmartAdTargetStringConditionOperatorEnum
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
