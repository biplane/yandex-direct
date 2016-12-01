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
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets Schedule.
     *
     * @return struct[]|null
     */
    public function getSchedule()
    {
        return $this->Schedule;
    }

    /**
     * Sets Schedule.
     *
     * @param struct[]|null $value
     * @return self
     */
    public function setSchedule(array $value = null)
    {
        $this->Schedule = $value;

        return $this;
    }

    /**
     * Gets ConsiderWorkingWeekends.
     *
     * @return string
     * @see YesNoEnum
     */
    public function getConsiderWorkingWeekends()
    {
        return $this->ConsiderWorkingWeekends;
    }

    /**
     * Sets ConsiderWorkingWeekends.
     *
     * @param string $value
     * @return self
     * @see YesNoEnum
     */
    public function setConsiderWorkingWeekends($value)
    {
        $this->ConsiderWorkingWeekends = $value;

        return $this;
    }


}

