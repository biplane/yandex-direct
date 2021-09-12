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
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    /**
     * @return RetargetingListRuleArgumentItem[]
     */
    public function getArguments(): array
    {
        return $this->Arguments;
    }

    /**
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
     * @see RetargetingListRuleOperatorEnum
     */
    public function getOperator(): string
    {
        return $this->Operator;
    }

    /**
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
