<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class TimeTargetingBase
{

    protected $Schedule = null;

    protected $ConsiderWorkingWeekends = null;

    /**
     * Creates a new instance of TimeTargetingBase.
     *
     * @return TimeTargetingBase
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


}

