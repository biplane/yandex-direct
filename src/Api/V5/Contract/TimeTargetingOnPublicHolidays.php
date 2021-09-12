<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class TimeTargetingOnPublicHolidays
{
    protected $SuspendOnHolidays = null;

//    Can be omitted.
//    protected $BidPercent = null;

//    Can be omitted.
//    protected $StartHour = null;

//    Can be omitted.
//    protected $EndHour = null;

    /**
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    /**
     * @see YesNoEnum
     */
    public function getSuspendOnHolidays(): string
    {
        return $this->SuspendOnHolidays;
    }

    /**
     * @see YesNoEnum
     *
     * @return $this
     */
    public function setSuspendOnHolidays(string $value)
    {
        $this->SuspendOnHolidays = $value;

        return $this;
    }

    public function getBidPercent(): ?int
    {
        return $this->BidPercent ?? null;
    }

    /**
     * @return $this
     */
    public function setBidPercent(?int $value = null)
    {
        $this->BidPercent = $value;

        return $this;
    }

    public function getStartHour(): ?int
    {
        return $this->StartHour ?? null;
    }

    /**
     * @return $this
     */
    public function setStartHour(?int $value = null)
    {
        $this->StartHour = $value;

        return $this;
    }

    public function getEndHour(): ?int
    {
        return $this->EndHour ?? null;
    }

    /**
     * @return $this
     */
    public function setEndHour(?int $value = null)
    {
        $this->EndHour = $value;

        return $this;
    }
}
