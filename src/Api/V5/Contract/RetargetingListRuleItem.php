<?php

declare(strict_types=1);

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
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets Arguments.
     *
     * @return RetargetingListRuleArgumentItem[]
     */
    public function getArguments(): array
    {
        return $this->Arguments;
    }

    /**
     * Sets Arguments.
     *
     * @param RetargetingListRuleArgumentItem[] $value
     *
     * @return $this
     */
    public function setArguments(array $value)
    {
        $this->Arguments = $value;

        return $this;
    }

    /**
     * Gets Operator.
     *
     * @see RetargetingListRuleOperatorEnum
     */
    public function getOperator(): string
    {
        return $this->Operator;
    }

    /**
     * Sets Operator.
     *
     * @see RetargetingListRuleOperatorEnum
     *
     * @return $this
     */
    public function setOperator(string $value)
    {
        $this->Operator = $value;

        return $this;
    }
}
