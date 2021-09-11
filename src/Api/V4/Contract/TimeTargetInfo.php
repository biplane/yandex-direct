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
     * Creates a new instance of TimeTargetInfo.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets ShowOnHolidays.
     */
    public function getShowOnHolidays(): ?string
    {
        return $this->ShowOnHolidays;
    }

    /**
     * Sets ShowOnHolidays.
     *
     * @return $this
     */
    public function setShowOnHolidays(?string $value = null)
    {
        $this->ShowOnHolidays = $value;

        return $this;
    }

    /**
     * Gets HolidayShowFrom.
     */
    public function getHolidayShowFrom(): ?int
    {
        return $this->HolidayShowFrom;
    }

    /**
     * Sets HolidayShowFrom.
     *
     * @return $this
     */
    public function setHolidayShowFrom(?int $value = null)
    {
        $this->HolidayShowFrom = $value;

        return $this;
    }

    /**
     * Gets HolidayShowTo.
     */
    public function getHolidayShowTo(): ?int
    {
        return $this->HolidayShowTo;
    }

    /**
     * Sets HolidayShowTo.
     *
     * @return $this
     */
    public function setHolidayShowTo(?int $value = null)
    {
        $this->HolidayShowTo = $value;

        return $this;
    }

    /**
     * Gets DaysHours.
     *
     * @return TimeTargetItem[]
     */
    public function getDaysHours(): array
    {
        return $this->DaysHours;
    }

    /**
     * Sets DaysHours.
     *
     * @param TimeTargetItem[] $value
     *
     * @return $this
     */
    public function setDaysHours(array $value)
    {
        $this->DaysHours = $value;

        return $this;
    }

    /**
     * Gets TimeZone.
     */
    public function getTimeZone(): ?string
    {
        return $this->TimeZone;
    }

    /**
     * Sets TimeZone.
     *
     * @return $this
     */
    public function setTimeZone(?string $value = null)
    {
        $this->TimeZone = $value;

        return $this;
    }

    /**
     * Gets WorkingHolidays.
     */
    public function getWorkingHolidays(): ?string
    {
        return $this->WorkingHolidays;
    }

    /**
     * Sets WorkingHolidays.
     *
     * @return $this
     */
    public function setWorkingHolidays(?string $value = null)
    {
        $this->WorkingHolidays = $value;

        return $this;
    }
}
