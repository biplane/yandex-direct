<?php

namespace Biplane\YandexDirect\Api\V4\Contract;

/**
 * Auto-generated code.
 */
class TimeZoneInfo
{

    protected $TimeZone = null;

    protected $GMTOffset = null;

    protected $Name = null;

    /**
     * Creates a new instance of TimeZoneInfo.
     *
     * @return TimeZoneInfo
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
     * Gets GMTOffset.
     *
     * @return int
     */
    public function getGMTOffset()
    {
        return $this->GMTOffset;
    }

    /**
     * Sets GMTOffset.
     *
     * @param int $value
     * @return $this
     */
    public function setGMTOffset($value)
    {
        $this->GMTOffset = $value;

        return $this;
    }

    /**
     * Gets Name.
     *
     * @return string
     */
    public function getName()
    {
        return $this->Name;
    }

    /**
     * Sets Name.
     *
     * @param string $value
     * @return $this
     */
    public function setName($value)
    {
        $this->Name = $value;

        return $this;
    }


}

