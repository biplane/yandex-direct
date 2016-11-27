<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class SmsSettings
{

    protected $Events = null;

    protected $TimeFrom = null;

    protected $TimeTo = null;

    /**
     * Creates a new instance of SmsSettings.
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets Events.
     *
     * @return string[]|null
     * @see SmsEventsEnum
     */
    public function getEvents()
    {
        return $this->Events;
    }

    /**
     * Sets Events.
     *
     * @param string[]|null $value
     * @return self
     * @see SmsEventsEnum
     */
    public function setEvents(array $value = null)
    {
        $this->Events = $value;

        return $this;
    }

    /**
     * Gets TimeFrom.
     *
     * @return string|null
     */
    public function getTimeFrom()
    {
        return $this->TimeFrom;
    }

    /**
     * Sets TimeFrom.
     *
     * @param string|null $value
     * @return self
     */
    public function setTimeFrom($value = null)
    {
        $this->TimeFrom = $value;

        return $this;
    }

    /**
     * Gets TimeTo.
     *
     * @return string|null
     */
    public function getTimeTo()
    {
        return $this->TimeTo;
    }

    /**
     * Sets TimeTo.
     *
     * @param string|null $value
     * @return self
     */
    public function setTimeTo($value = null)
    {
        $this->TimeTo = $value;

        return $this;
    }


}

