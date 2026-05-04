<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Campaigns;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class PriorityGoalsUpdateItem
{
    /** @var int */
    protected $GoalId;

    /** @var int */
    protected $Value;

//    Can be omitted.
//    protected $IsMetrikaSourceOfValue;

    /** @var 'ADD'|'REMOVE'|'SET' */
    protected $Operation;

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
     * Get GoalId
     */
    public function getGoalId(): int
    {
        return $this->GoalId;
    }

    /**
     * Set GoalId
     *
     * @return $this
     */
    public function setGoalId(int $value)
    {
        $this->GoalId = $value;

        return $this;
    }

    /**
     * Get Value
     */
    public function getValue(): int
    {
        return $this->Value;
    }

    /**
     * Set Value
     *
     * @return $this
     */
    public function setValue(int $value)
    {
        $this->Value = $value;

        return $this;
    }

    /**
     * Get IsMetrikaSourceOfValue
     *
     * @see \Biplane\YandexDirect\Api\V5\General\YesNoEnum
     *
     * @return 'YES'|'NO'|null
     */
    public function getIsMetrikaSourceOfValue(): ?string
    {
        return $this->IsMetrikaSourceOfValue ?? null;
    }

    /**
     * Set IsMetrikaSourceOfValue
     *
     * @see \Biplane\YandexDirect\Api\V5\General\YesNoEnum
     *
     * @param 'YES'|'NO'|null $value
     *
     * @return $this
     */
    public function setIsMetrikaSourceOfValue(?string $value)
    {
        $this->IsMetrikaSourceOfValue = $value;

        return $this;
    }

    /**
     * Get Operation
     *
     * @see \Biplane\YandexDirect\Api\V5\General\OperationEnum
     *
     * @return 'ADD'|'REMOVE'|'SET'
     */
    public function getOperation(): string
    {
        return $this->Operation;
    }

    /**
     * Set Operation
     *
     * @see \Biplane\YandexDirect\Api\V5\General\OperationEnum
     *
     * @param 'ADD'|'REMOVE'|'SET' $value
     *
     * @return $this
     */
    public function setOperation(string $value)
    {
        $this->Operation = $value;

        return $this;
    }
}
