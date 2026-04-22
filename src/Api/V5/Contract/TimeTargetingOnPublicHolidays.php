<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class TimeTargetingOnPublicHolidays
{
    /** @var 'YES'|'NO' */
    protected $SuspendOnHolidays;

//    Can be omitted.
//    protected $BidPercent;

//    Can be omitted.
//    protected $StartHour;

//    Can be omitted.
//    protected $EndHour;

    /**
     * Create a new instance.
     *
     * @return static
     */
    public static function create(): static
    {
        return new static();
    }

    /**
     * Get SuspendOnHolidays
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\YesNoEnum
     *
     * @return 'YES'|'NO'
     */
    public function getSuspendOnHolidays(): string
    {
        return $this->SuspendOnHolidays;
    }

    /**
     * Set SuspendOnHolidays
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\YesNoEnum
     *
     * @param 'YES'|'NO' $value
     *
     * @return $this
     */
    public function setSuspendOnHolidays(string $value)
    {
        $this->SuspendOnHolidays = $value;

        return $this;
    }

    /**
     * Get BidPercent
     */
    public function getBidPercent(): ?int
    {
        return $this->BidPercent ?? null;
    }

    /**
     * Set BidPercent
     *
     * @return $this
     */
    public function setBidPercent(?int $value)
    {
        $this->BidPercent = $value;

        return $this;
    }

    /**
     * Get StartHour
     */
    public function getStartHour(): ?int
    {
        return $this->StartHour ?? null;
    }

    /**
     * Set StartHour
     *
     * @return $this
     */
    public function setStartHour(?int $value)
    {
        $this->StartHour = $value;

        return $this;
    }

    /**
     * Get EndHour
     */
    public function getEndHour(): ?int
    {
        return $this->EndHour ?? null;
    }

    /**
     * Set EndHour
     *
     * @return $this
     */
    public function setEndHour(?int $value)
    {
        $this->EndHour = $value;

        return $this;
    }
}
