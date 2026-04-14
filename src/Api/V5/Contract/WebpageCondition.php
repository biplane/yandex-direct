<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class WebpageCondition
{
    /** @var 'DOMAIN'|'OFFERS_LIST_URL'|'PAGE_CONTENT'|'PAGE_TITLE'|'URL' */
    protected $Operand;

    /** @var 'EQUALS_ANY'|'NOT_EQUALS_ALL'|'CONTAINS_ANY'|'NOT_CONTAINS_ALL' */
    protected $Operator;

    /** @var non-empty-list<string> */
    protected $Arguments;

    /**
     * Create a new instance.
     *
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    /**
     * Get Operand
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\WebpageConditionOperandEnum
     *
     * @return 'DOMAIN'|'OFFERS_LIST_URL'|'PAGE_CONTENT'|'PAGE_TITLE'|'URL'
     */
    public function getOperand(): string
    {
        return $this->Operand;
    }

    /**
     * Set Operand
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\WebpageConditionOperandEnum
     *
     * @param 'DOMAIN'|'OFFERS_LIST_URL'|'PAGE_CONTENT'|'PAGE_TITLE'|'URL' $value
     *
     * @return $this
     */
    public function setOperand(string $value)
    {
        $this->Operand = $value;

        return $this;
    }

    /**
     * Get Operator
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\StringConditionOperatorEnum
     *
     * @return 'EQUALS_ANY'|'NOT_EQUALS_ALL'|'CONTAINS_ANY'|'NOT_CONTAINS_ALL'
     */
    public function getOperator(): string
    {
        return $this->Operator;
    }

    /**
     * Set Operator
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\StringConditionOperatorEnum
     *
     * @param 'EQUALS_ANY'|'NOT_EQUALS_ALL'|'CONTAINS_ANY'|'NOT_CONTAINS_ALL' $value
     *
     * @return $this
     */
    public function setOperator(string $value)
    {
        $this->Operator = $value;

        return $this;
    }

    /**
     * Get Arguments
     *
     * @return non-empty-list<string>
     */
    public function getArguments(): array
    {
        return $this->Arguments;
    }

    /**
     * Set Arguments
     *
     * @param non-empty-list<string> $value
     *
     * @return $this
     */
    public function setArguments(array $value)
    {
        $this->Arguments = $value;

        return $this;
    }
}
