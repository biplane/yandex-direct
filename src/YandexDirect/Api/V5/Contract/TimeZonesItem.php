<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class TimeZonesItem
{

    protected $TimeZone = null;

    protected $TimeZoneName = null;

    protected $UtcOffset = null;

    /**
     * Creates a new instance of TimeZonesItem.
     *
     * @return TimeZonesItem
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets TimeZone.
     *
     * @return string
     */
    public function getTimeZone()
    {
        return $this->TimeZone;
    }

    /**
     * Sets TimeZone.
     *
     * @param string $value
     * @return $this
     */
    public function setTimeZone($value)
    {
        $this->TimeZone = $value;

        return $this;
    }

    /**
     * Gets TimeZoneName.
     *
     * @return string
     */
    public function getTimeZoneName()
    {
        return $this->TimeZoneName;
    }

    /**
     * Sets TimeZoneName.
     *
     * @param string $value
     * @return $this
     */
    public function setTimeZoneName($value)
    {
        $this->TimeZoneName = $value;

        return $this;
    }

    /**
     * Gets UtcOffset.
     *
     * @return int
     */
    public function getUtcOffset()
    {
        return $this->UtcOffset;
    }

    /**
     * Sets UtcOffset.
     *
     * @param int $value
     * @return $this
     */
    public function setUtcOffset($value)
    {
        $this->UtcOffset = $value;

        return $this;
    }


}

