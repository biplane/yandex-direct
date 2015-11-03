<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class TimeTargetingOnPublicHolidays
{

    protected $SuspendOnHolidays = null;

    protected $BidPercent = null;

    protected $StartHour = null;

    protected $EndHour = null;

    /**
     * Creates a new instance of TimeTargetingOnPublicHolidays.
     *
     * @return TimeTargetingOnPublicHolidays
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets SuspendOnHolidays.
     *
     * @return YesNoEnum
     */
    public function getSuspendOnHolidays()
    {
        return $this->SuspendOnHolidays;
    }

    /**
     * Sets SuspendOnHolidays.
     *
     * @param YesNoEnum $value
     * @return $this
     */
    public function setSuspendOnHolidays(YesNoEnum $value)
    {
        $this->SuspendOnHolidays = $value;

        return $this;
    }

    /**
     * Gets BidPercent.
     *
     * @return int|null
     */
    public function getBidPercent()
    {
        return $this->BidPercent;
    }

    /**
     * Sets BidPercent.
     *
     * @param int|null $value
     * @return $this
     */
    public function setBidPercent($value = null)
    {
        $this->BidPercent = $value;

        return $this;
    }

    /**
     * Gets StartHour.
     *
     * @return int|null
     */
    public function getStartHour()
    {
        return $this->StartHour;
    }

    /**
     * Sets StartHour.
     *
     * @param int|null $value
     * @return $this
     */
    public function setStartHour($value = null)
    {
        $this->StartHour = $value;

        return $this;
    }

    /**
     * Gets EndHour.
     *
     * @return int|null
     */
    public function getEndHour()
    {
        return $this->EndHour;
    }

    /**
     * Sets EndHour.
     *
     * @param int|null $value
     * @return $this
     */
    public function setEndHour($value = null)
    {
        $this->EndHour = $value;

        return $this;
    }


}

