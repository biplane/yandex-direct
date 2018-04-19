<?php

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
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets SuspendOnHolidays.
     *
     * @return string
     * @see YesNoEnum
     */
    public function getSuspendOnHolidays()
    {
        return $this->SuspendOnHolidays;
    }

    /**
     * Sets SuspendOnHolidays.
     *
     * @param string $value
     * @return self
     * @see YesNoEnum
     */
    public function setSuspendOnHolidays($value)
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
        return isset($this->BidPercent) ? $this->BidPercent : null;
    }

    /**
     * Sets BidPercent.
     *
     * @param int|null $value
     * @return self
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
        return isset($this->StartHour) ? $this->StartHour : null;
    }

    /**
     * Sets StartHour.
     *
     * @param int|null $value
     * @return self
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
        return isset($this->EndHour) ? $this->EndHour : null;
    }

    /**
     * Sets EndHour.
     *
     * @param int|null $value
     * @return self
     */
    public function setEndHour($value = null)
    {
        $this->EndHour = $value;

        return $this;
    }


}

