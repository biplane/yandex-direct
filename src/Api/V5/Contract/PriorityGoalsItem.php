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
    protected $GoalId = null;

    protected $Value = null;

//    Can be omitted.
//    protected $IsMetrikaSourceOfValue = null;

    /**
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    public function getGoalId(): int
    {
        return $this->GoalId;
    }

    /**
     * @return $this
     */
    public function setGoalId(int $value)
    {
        $this->GoalId = $value;

        return $this;
    }

    public function getValue(): int
    {
        return $this->Value;
    }

    /**
     * @return $this
     */
    public function setValue(int $value)
    {
        $this->Value = $value;

        return $this;
    }

    /**
     * @see YesNoEnum
     */
    public function getIsMetrikaSourceOfValue(): ?string
    {
        return $this->IsMetrikaSourceOfValue ?? null;
    }

    /**
     * @see YesNoEnum
     *
     * @return $this
     */
    public function setIsMetrikaSourceOfValue(?string $value = null)
    {
        $this->IsMetrikaSourceOfValue = $value;

        return $this;
    }
}
