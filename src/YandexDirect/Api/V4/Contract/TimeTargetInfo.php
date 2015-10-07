<?php

namespace Biplane\YandexDirect\Api\V4\Contract;

/**
 * Auto-generated code.
 */
class TimeTargetInfo
{

    protected $ShowOnHolidays = null;

    protected $HolidayShowFrom = null;

    protected $HolidayShowTo = null;

    protected $DaysHours = array(
        
    );

    protected $TimeZone = null;

    protected $WorkingHolidays = null;

    /**
     * Creates a new instance of TimeTargetInfo.
     *
     * @return TimeTargetInfo
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets ShowOnHolidays.
     *
     * @return string|null
     */
    public function getShowOnHolidays()
    {
        return $this->ShowOnHolidays;
    }

    /**
     * Sets ShowOnHolidays.
     *
     * @param string|null $value
     * @return $this
     */
    public function setShowOnHolidays($value = null)
    {
        $this->ShowOnHolidays = $value;

        return $this;
    }

    /**
     * Gets HolidayShowFrom.
     *
     * @return int|null
     */
    public function getHolidayShowFrom()
    {
        return $this->HolidayShowFrom;
    }

    /**
     * Sets HolidayShowFrom.
     *
     * @param int|null $value
     * @return $this
     */
    public function setHolidayShowFrom($value = null)
    {
        $this->HolidayShowFrom = $value;

        return $this;
    }

    /**
     * Gets HolidayShowTo.
     *
     * @return int|null
     */
    public function getHolidayShowTo()
    {
        return $this->HolidayShowTo;
    }

    /**
     * Sets HolidayShowTo.
     *
     * @param int|null $value
     * @return $this
     */
    public function setHolidayShowTo($value = null)
    {
        $this->HolidayShowTo = $value;

        return $this;
    }

    /**
     * Gets DaysHours.
     *
     * @return TimeTargetItem[]
     */
    public function getDaysHours()
    {
        return $this->DaysHours;
    }

    /**
     * Sets DaysHours.
     *
     * @param TimeTargetItem[] $value
     * @return $this
     */
    public function setDaysHours(array $value)
    {
        $this->DaysHours = $value;

        return $this;
    }

    /**
     * Gets TimeZone.
     *
     * @return string|null
     */
    public function getTimeZone()
    {
        return $this->TimeZone;
    }

    /**
     * Sets TimeZone.
     *
     * @param string|null $value
     * @return $this
     */
    public function setTimeZone($value = null)
    {
        $this->TimeZone = $value;

        return $this;
    }

    /**
     * Gets WorkingHolidays.
     *
     * @return string|null
     */
    public function getWorkingHolidays()
    {
        return $this->WorkingHolidays;
    }

    /**
     * Sets WorkingHolidays.
     *
     * @param string|null $value
     * @return $this
     */
    public function setWorkingHolidays($value = null)
    {
        $this->WorkingHolidays = $value;

        return $this;
    }


}

