<?php

namespace Biplane\YandexDirectBundle\Contract;

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
     * @return string
     */
    public function getShowOnHolidays()
    {
        return $this->ShowOnHolidays;
    }

    /**
     * @param string $ShowOnHolidays
     * @return TimeTargetInfo
     */
    public function setShowOnHolidays($ShowOnHolidays)
    {
        $this->ShowOnHolidays = $ShowOnHolidays;

        return $this;
    }

    /**
     * @return int
     */
    public function getHolidayShowFrom()
    {
        return $this->HolidayShowFrom;
    }

    /**
     * @param int $HolidayShowFrom
     * @return TimeTargetInfo
     */
    public function setHolidayShowFrom($HolidayShowFrom)
    {
        $this->HolidayShowFrom = $HolidayShowFrom;

        return $this;
    }

    /**
     * @return int
     */
    public function getHolidayShowTo()
    {
        return $this->HolidayShowTo;
    }

    /**
     * @param int $HolidayShowTo
     * @return TimeTargetInfo
     */
    public function setHolidayShowTo($HolidayShowTo)
    {
        $this->HolidayShowTo = $HolidayShowTo;

        return $this;
    }

    /**
     * @return TimeTargetItem[]
     */
    public function getDaysHours()
    {
        return $this->DaysHours;
    }

    /**
     * @param TimeTargetItem[] $DaysHours
     * @return TimeTargetInfo
     */
    public function setDaysHours(array $DaysHours)
    {
        $this->DaysHours = $DaysHours;

        return $this;
    }

    /**
     * @return string
     */
    public function getTimeZone()
    {
        return $this->TimeZone;
    }

    /**
     * @param string $TimeZone
     * @return TimeTargetInfo
     */
    public function setTimeZone($TimeZone)
    {
        $this->TimeZone = $TimeZone;

        return $this;
    }
}