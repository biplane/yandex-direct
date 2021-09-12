<?php

declare(strict_types=1);

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
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    public function getTimeZone(): string
    {
        return $this->TimeZone;
    }

    /**
     * @return $this
     */
    public function setTimeZone(string $value)
    {
        $this->TimeZone = $value;

        return $this;
    }

    public function getGMTOffset(): int
    {
        return $this->GMTOffset;
    }

    /**
     * @return $this
     */
    public function setGMTOffset(int $value)
    {
        $this->GMTOffset = $value;

        return $this;
    }

    public function getName(): string
    {
        return $this->Name;
    }

    /**
     * @return $this
     */
    public function setName(string $value)
    {
        $this->Name = $value;

        return $this;
    }
}
