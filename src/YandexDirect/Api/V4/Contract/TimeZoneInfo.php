<?php

namespace Biplane\YandexDirect\Api\V4\Contract;

/**
 * @codeCoverageIgnore
 * @SuppressWarnings(PHPMD)
 */
class TimeZoneInfo
{
    /**
     * @var string
     */
    protected $TimeZone;
    /**
     * @var int
     */
    protected $GMTOffset;
    /**
     * @var string
     */
    protected $Name;

    /**
     * Creates a new instance.
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets the TimeZone.
     *
     * @return string
     */
    public function getTimeZone()
    {
        return $this->TimeZone;
    }

    /**
     * Sets the TimeZone.
     *
     * @param string $TimeZone
     *
     * @return TimeZoneInfo
     */
    public function setTimeZone($TimeZone)
    {
        $this->TimeZone = $TimeZone;

        return $this;
    }

    /**
     * Gets the GMTOffset.
     *
     * @return int
     */
    public function getGMTOffset()
    {
        return $this->GMTOffset;
    }

    /**
     * Sets the GMTOffset.
     *
     * @param int $GMTOffset
     *
     * @return TimeZoneInfo
     */
    public function setGMTOffset($GMTOffset)
    {
        $this->GMTOffset = $GMTOffset;

        return $this;
    }

    /**
     * Gets the Name.
     *
     * @return string
     */
    public function getName()
    {
        return $this->Name;
    }

    /**
     * Sets the Name.
     *
     * @param string $Name
     *
     * @return TimeZoneInfo
     */
    public function setName($Name)
    {
        $this->Name = $Name;

        return $this;
    }
}