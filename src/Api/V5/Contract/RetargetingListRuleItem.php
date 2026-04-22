<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class RetargetingListRuleItem
{
    /** @var non-empty-list<RetargetingListRuleArgumentItem> */
    protected $Arguments;

    /** @var 'ALL'|'ANY'|'NONE' */
    protected $Operator;

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
     * Get Arguments
     *
     * @return non-empty-list<RetargetingListRuleArgumentItem>
     */
    public function getArguments(): array
    {
        return $this->Arguments;
    }

    /**
     * Set Arguments
     *
     * @param non-empty-list<RetargetingListRuleArgumentItem> $value
     *
     * @return $this
     */
    public function setArguments(array $value)
    {
        $this->Arguments = $value;

        return $this;
    }

    /**
     * Get Operator
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\RetargetingListRuleOperatorEnum
     *
     * @return 'ALL'|'ANY'|'NONE'
     */
    public function getOperator(): string
    {
        return $this->Operator;
    }

    /**
     * Set Operator
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\RetargetingListRuleOperatorEnum
     *
     * @param 'ALL'|'ANY'|'NONE' $value
     *
     * @return $this
     */
    public function setOperator(string $value)
    {
        $this->Operator = $value;

        return $this;
    }
}
