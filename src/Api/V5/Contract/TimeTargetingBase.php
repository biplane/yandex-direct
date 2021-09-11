<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class TimeTargetingBase
{
//    Can be omit.
//    protected $Schedule = null;

    protected $ConsiderWorkingWeekends = null;

    /**
     * Creates a new instance of TimeTargetingBase.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets Schedule.
     *
     * @return string[]|null
     */
    public function getSchedule(): ?array
    {
        return $this->Schedule ?? null;
    }

    /**
     * Sets Schedule.
     *
     * @param string[]|null $value
     *
     * @return $this
     */
    public function setSchedule(?array $value = null)
    {
        $this->Schedule = $value;

        return $this;
    }

    /**
     * Gets ConsiderWorkingWeekends.
     *
     * @see YesNoEnum
     */
    public function getConsiderWorkingWeekends(): string
    {
        return $this->ConsiderWorkingWeekends;
    }

    /**
     * Sets ConsiderWorkingWeekends.
     *
     * @see YesNoEnum
     *
     * @return $this
     */
    public function setConsiderWorkingWeekends(string $value)
    {
        $this->ConsiderWorkingWeekends = $value;

        return $this;
    }
}
