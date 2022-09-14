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
//    protected $Schedule = null;

    protected $ConsiderWorkingWeekends = null;

    /**
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    /**
     * @return string[]|null
     */
    public function getSchedule(): ?array
    {
        return $this->Schedule ?? null;
    }

    /**
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
     * @see YesNoEnum
     */
    public function getConsiderWorkingWeekends(): string
    {
        return $this->ConsiderWorkingWeekends;
    }

    /**
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
