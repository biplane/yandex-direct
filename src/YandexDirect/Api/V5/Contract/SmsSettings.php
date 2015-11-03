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
     * @return SmsSettings
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets Events.
     *
     * @return SmsEventsEnum[]|null
     */
    public function getEvents()
    {
        return $this->Events;
    }

    /**
     * Sets Events.
     *
     * @param SmsEventsEnum[]|null $value
     * @return $this
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
     * @return $this
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
     * @return $this
     */
    public function setTimeTo($value = null)
    {
        $this->TimeTo = $value;

        return $this;
    }


}

