<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class TimeTargeting
{

    protected $Schedule = null;

    protected $ConsiderWorkingWeekends = null;

    protected $HolidaysSchedule = null;

    /**
     * Creates a new instance of TimeTargeting.
     *
     * @return TimeTargeting
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets Schedule.
     *
     * @return string[]|null
     */
    public function getSchedule()
    {
        return $this->Schedule;
    }

    /**
     * Sets Schedule.
     *
     * @param string[]|null $value
     * @return $this
     */
    public function setSchedule(array $value = null)
    {
        $this->Schedule = $value;

        return $this;
    }

    /**
     * Gets ConsiderWorkingWeekends.
     *
     * @return YesNoEnum
     */
    public function getConsiderWorkingWeekends()
    {
        return $this->ConsiderWorkingWeekends;
    }

    /**
     * Sets ConsiderWorkingWeekends.
     *
     * @param YesNoEnum $value
     * @return $this
     */
    public function setConsiderWorkingWeekends(YesNoEnum $value)
    {
        $this->ConsiderWorkingWeekends = $value;

        return $this;
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
     * @return $this
     */
    public function setHolidaysSchedule(TimeTargetingOnPublicHolidays $value = null)
    {
        $this->HolidaysSchedule = $value;

        return $this;
    }


}

