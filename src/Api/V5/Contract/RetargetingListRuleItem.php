<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class RetargetingListRuleItem
{

    protected $Arguments = [];

    protected $Operator = null;

    /**
     * Creates a new instance of RetargetingListRuleItem.
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets Arguments.
     *
     * @return RetargetingListRuleArgumentItem[]
     */
    public function getArguments()
    {
        return $this->Arguments;
    }

    /**
     * Sets Arguments.
     *
     * @param RetargetingListRuleArgumentItem[] $value
     * @return self
     */
    public function setArguments(array $value)
    {
        $this->Arguments = $value;

        return $this;
    }

    /**
     * Gets Operator.
     *
     * @return string
     * @see RetargetingListRuleOperatorEnum
     */
    public function getOperator()
    {
        return $this->Operator;
    }

    /**
     * Sets Operator.
     *
     * @param string $value
     * @return self
     * @see RetargetingListRuleOperatorEnum
     */
    public function setOperator($value)
    {
        $this->Operator = $value;

        return $this;
    }


}

