<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class TimeTargeting extends TimeTargetingBase
{

    protected $HolidaysSchedule = null;

    /**
     * Creates a new instance of TimeTargeting.
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets HolidaysSchedule.
     *
     * @return TimeTargetingOnPublicHolidays|null
     */
    public function getHolidaysSchedule()
    {
        return $this->HolidaysSchedule;
    }

    /**
     * Sets HolidaysSchedule.
     *
     * @param TimeTargetingOnPublicHolidays|null $value
     * @return self
     */
    public function setHolidaysSchedule(TimeTargetingOnPublicHolidays $value = null)
    {
        $this->HolidaysSchedule = $value;

        return $this;
    }


}

