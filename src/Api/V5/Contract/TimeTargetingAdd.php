<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class TimeTargetingAdd extends TimeTargetingBase
{
//    Can be omitted.
//    protected $HolidaysSchedule = null;

    public function getHolidaysSchedule(): ?TimeTargetingOnPublicHolidays
    {
        return $this->HolidaysSchedule ?? null;
    }

    /**
     * @return $this
     */
    public function setHolidaysSchedule(?TimeTargetingOnPublicHolidays $value = null)
    {
        $this->HolidaysSchedule = $value;

        return $this;
    }
}
