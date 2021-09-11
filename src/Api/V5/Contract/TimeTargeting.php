<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class TimeTargeting extends TimeTargetingBase
{
//    Can be omit.
//    protected $HolidaysSchedule = null;

    /**
     * Creates a new instance of TimeTargeting.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets HolidaysSchedule.
     */
    public function getHolidaysSchedule(): ?TimeTargetingOnPublicHolidays
    {
        return $this->HolidaysSchedule ?? null;
    }

    /**
     * Sets HolidaysSchedule.
     *
     * @return $this
     */
    public function setHolidaysSchedule(?TimeTargetingOnPublicHolidays $value = null)
    {
        $this->HolidaysSchedule = $value;

        return $this;
    }
}
