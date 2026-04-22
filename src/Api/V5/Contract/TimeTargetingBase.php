<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class TimeTargetingBase
{
//    Can be omitted.
//    protected $Schedule;

    /** @var 'YES'|'NO' */
    protected $ConsiderWorkingWeekends;

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
     * Get Schedule
     *
     * @return non-empty-list<string>|null
     */
    public function getSchedule(): ?array
    {
        return $this->Schedule ?? null;
    }

    /**
     * Set Schedule
     *
     * @param non-empty-list<string>|null $value
     *
     * @return $this
     */
    public function setSchedule(?array $value)
    {
        $this->Schedule = $value;

        return $this;
    }

    /**
     * Get ConsiderWorkingWeekends
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\YesNoEnum
     *
     * @return 'YES'|'NO'
     */
    public function getConsiderWorkingWeekends(): string
    {
        return $this->ConsiderWorkingWeekends;
    }

    /**
     * Set ConsiderWorkingWeekends
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\YesNoEnum
     *
     * @param 'YES'|'NO' $value
     *
     * @return $this
     */
    public function setConsiderWorkingWeekends(string $value)
    {
        $this->ConsiderWorkingWeekends = $value;

        return $this;
    }
}
