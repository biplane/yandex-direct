<?php

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
        return isset($this->Schedule) ? $this->Schedule : null;
    }

    /**
     * Sets Schedule.
     *
     * @param struct[]|null $value
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
     * @return $this
     * @see YesNoEnum
     */
    public function setConsiderWorkingWeekends($value)
    {
        $this->ConsiderWorkingWeekends = $value;

        return $this;
    }


}

