<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class WebpageCondition
{

    protected $Operand = null;

    protected $Operator = null;

    protected $Arguments = array(

    );

    /**
     * Creates a new instance of WebpageCondition.
     *
     * @return WebpageCondition
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets Operand.
     *
     * @return WebpageConditionOperandEnum
     */
    public function getOperand()
    {
        return $this->Operand;
    }

    /**
     * Sets Operand.
     *
     * @param WebpageConditionOperandEnum $value
     * @return $this
     */
    public function setOperand($value)
    {
        $this->Operand = $value;

        return $this;
    }

    /**
     * Gets Operator.
     *
     * @return StringConditionOperatorEnum
     */
    public function getOperator()
    {
        return $this->Operator;
    }

    /**
     * Sets Operator.
     *
     * @param StringConditionOperatorEnum $value
     * @return $this
     */
    public function setOperator($value)
    {
        $this->Operator = $value;

        return $this;
    }

    /**
     * Gets Arguments.
     *
     * @return string[]
     */
    public function getArguments()
    {
        return $this->Arguments;
    }

    /**
     * Sets Arguments.
     *
     * @param string[] $value
     * @return $this
     */
    public function setArguments(array $value)
    {
        $this->Arguments = $value;

        return $this;
    }


}

