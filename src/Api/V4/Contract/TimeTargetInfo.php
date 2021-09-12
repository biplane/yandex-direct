<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V4\Contract;

/**
 * Auto-generated code.
 */
class TimeTargetInfo
{
    protected $ShowOnHolidays = null;

    protected $HolidayShowFrom = null;

    protected $HolidayShowTo = null;

    protected $DaysHours = [];

    protected $TimeZone = null;

    protected $WorkingHolidays = null;

    /**
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    public function getShowOnHolidays(): ?string
    {
        return $this->ShowOnHolidays;
    }

    /**
     * @return $this
     */
    public function setShowOnHolidays(?string $value = null)
    {
        $this->ShowOnHolidays = $value;

        return $this;
    }

    public function getHolidayShowFrom(): ?int
    {
        return $this->HolidayShowFrom;
    }

    /**
     * @return $this
     */
    public function setHolidayShowFrom(?int $value = null)
    {
        $this->HolidayShowFrom = $value;

        return $this;
    }

    public function getHolidayShowTo(): ?int
    {
        return $this->HolidayShowTo;
    }

    /**
     * @return $this
     */
    public function setHolidayShowTo(?int $value = null)
    {
        $this->HolidayShowTo = $value;

        return $this;
    }

    /**
     * @return TimeTargetItem[]
     */
    public function getDaysHours(): array
    {
        return $this->DaysHours;
    }

    /**
     * @param TimeTargetItem[] $value
     *
     * @return $this
     */
    public function setDaysHours(array $value)
    {
        $this->DaysHours = $value;

        return $this;
    }

    public function getTimeZone(): ?string
    {
        return $this->TimeZone;
    }

    /**
     * @return $this
     */
    public function setTimeZone(?string $value = null)
    {
        $this->TimeZone = $value;

        return $this;
    }

    public function getWorkingHolidays(): ?string
    {
        return $this->WorkingHolidays;
    }

    /**
     * @return $this
     */
    public function setWorkingHolidays(?string $value = null)
    {
        $this->WorkingHolidays = $value;

        return $this;
    }
}
