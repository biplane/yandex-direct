<?php

namespace Biplane\YandexDirectBundle\Contract;

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
     * @return string
     */
    public function getTimeZone()
    {
        return $this->TimeZone;
    }

    /**
     * @param string $TimeZone
     * @return TimeZoneInfo
     */
    public function setTimeZone($TimeZone)
    {
        $this->TimeZone = $TimeZone;

        return $this;
    }

    /**
     * @return int
     */
    public function getGMTOffset()
    {
        return $this->GMTOffset;
    }

    /**
     * @param int $GMTOffset
     * @return TimeZoneInfo
     */
    public function setGMTOffset($GMTOffset)
    {
        $this->GMTOffset = $GMTOffset;

        return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->Name;
    }

    /**
     * @param string $Name
     * @return TimeZoneInfo
     */
    public function setName($Name)
    {
        $this->Name = $Name;

        return $this;
    }
}