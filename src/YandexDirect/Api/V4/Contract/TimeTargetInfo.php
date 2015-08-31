<?php

namespace Biplane\YandexDirect\Api\V4\Contract;

/**
 * @codeCoverageIgnore
 * @SuppressWarnings(PHPMD)
 */
class TimeTargetInfo
{
    /**
     * @var string
     */
    protected $ShowOnHolidays;
    /**
     * @var int
     */
    protected $HolidayShowFrom;
    /**
     * @var int
     */
    protected $HolidayShowTo;
    /**
     * @var TimeTargetItem[]
     */
    protected $DaysHours;
    /**
     * @var string
     */
    protected $TimeZone;
    /**
     * @var string
     */
    protected $WorkingHolidays;

    /**
     * Creates a new instance.
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets the ShowOnHolidays.
     *
     * @return string
     */
    public function getShowOnHolidays()
    {
        return $this->ShowOnHolidays;
    }

    /**
     * Sets the ShowOnHolidays.
     *
     * @param string $ShowOnHolidays
     *
     * @return TimeTargetInfo
     */
    public function setShowOnHolidays($ShowOnHolidays)
    {
        $this->ShowOnHolidays = $ShowOnHolidays;

        return $this;
    }

    /**
     * Gets the HolidayShowFrom.
     *
     * @return int
     */
    public function getHolidayShowFrom()
    {
        return $this->HolidayShowFrom;
    }

    /**
     * Sets the HolidayShowFrom.
     *
     * @param int $HolidayShowFrom
     *
     * @return TimeTargetInfo
     */
    public function setHolidayShowFrom($HolidayShowFrom)
    {
        $this->HolidayShowFrom = $HolidayShowFrom;

        return $this;
    }

    /**
     * Gets the HolidayShowTo.
     *
     * @return int
     */
    public function getHolidayShowTo()
    {
        return $this->HolidayShowTo;
    }

    /**
     * Sets the HolidayShowTo.
     *
     * @param int $HolidayShowTo
     *
     * @return TimeTargetInfo
     */
    public function setHolidayShowTo($HolidayShowTo)
    {
        $this->HolidayShowTo = $HolidayShowTo;

        return $this;
    }

    /**
     * Gets the DaysHours.
     *
     * @return TimeTargetItem[]
     */
    public function getDaysHours()
    {
        return $this->DaysHours;
    }

    /**
     * Sets the DaysHours.
     *
     * @param TimeTargetItem[] $DaysHours
     *
     * @return TimeTargetInfo
     */
    public function setDaysHours(array $DaysHours)
    {
        $this->DaysHours = $DaysHours;

        return $this;
    }

    /**
     * Gets the TimeZone.
     *
     * @return string
     */
    public function getTimeZone()
    {
        return $this->TimeZone;
    }

    /**
     * Sets the TimeZone.
     *
     * @param string $TimeZone
     *
     * @return TimeTargetInfo
     */
    public function setTimeZone($TimeZone)
    {
        $this->TimeZone = $TimeZone;

        return $this;
    }

    /**
     * Gets the WorkingHolidays.
     *
     * @return string
     */
    public function getWorkingHolidays()
    {
        return $this->WorkingHolidays;
    }

    /**
     * Sets the WorkingHolidays.
     *
     * @param string $WorkingHolidays
     *
     * @return TimeTargetInfo
     */
    public function setWorkingHolidays($WorkingHolidays)
    {
        $this->WorkingHolidays = $WorkingHolidays;

        return $this;
    }
}