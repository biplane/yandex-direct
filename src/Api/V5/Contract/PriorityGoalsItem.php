<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class PriorityGoalsItem
{
    /** @var int */
    protected $GoalId;

    /** @var int */
    protected $Value;

//    Can be omitted.
//    protected $IsMetrikaSourceOfValue;

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
     * @see \Biplane\YandexDirect\Api\V5\Contract\YesNoEnum
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
     * @see \Biplane\YandexDirect\Api\V5\Contract\YesNoEnum
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
}
