<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class TimeTargetingOnPublicHolidays
{
    protected $SuspendOnHolidays = null;

//    Can be omit.
//    protected $BidPercent = null;

//    Can be omit.
//    protected $StartHour = null;

//    Can be omit.
//    protected $EndHour = null;

    /**
     * Creates a new instance of TimeTargetingOnPublicHolidays.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets SuspendOnHolidays.
     *
     * @see YesNoEnum
     */
    public function getSuspendOnHolidays(): string
    {
        return $this->SuspendOnHolidays;
    }

    /**
     * Sets SuspendOnHolidays.
     *
     * @see YesNoEnum
     *
     * @return $this
     */
    public function setSuspendOnHolidays(string $value)
    {
        $this->SuspendOnHolidays = $value;

        return $this;
    }

    /**
     * Gets BidPercent.
     */
    public function getBidPercent(): ?int
    {
        return $this->BidPercent ?? null;
    }

    /**
     * Sets BidPercent.
     *
     * @return $this
     */
    public function setBidPercent(?int $value = null)
    {
        $this->BidPercent = $value;

        return $this;
    }

    /**
     * Gets StartHour.
     */
    public function getStartHour(): ?int
    {
        return $this->StartHour ?? null;
    }

    /**
     * Sets StartHour.
     *
     * @return $this
     */
    public function setStartHour(?int $value = null)
    {
        $this->StartHour = $value;

        return $this;
    }

    /**
     * Gets EndHour.
     */
    public function getEndHour(): ?int
    {
        return $this->EndHour ?? null;
    }

    /**
     * Sets EndHour.
     *
     * @return $this
     */
    public function setEndHour(?int $value = null)
    {
        $this->EndHour = $value;

        return $this;
    }
}
