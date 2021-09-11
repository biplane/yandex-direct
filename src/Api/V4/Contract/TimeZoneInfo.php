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
     * Creates a new instance of TimeZoneInfo.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets TimeZone.
     */
    public function getTimeZone(): string
    {
        return $this->TimeZone;
    }

    /**
     * Sets TimeZone.
     *
     * @return $this
     */
    public function setTimeZone(string $value)
    {
        $this->TimeZone = $value;

        return $this;
    }

    /**
     * Gets GMTOffset.
     */
    public function getGMTOffset(): int
    {
        return $this->GMTOffset;
    }

    /**
     * Sets GMTOffset.
     *
     * @return $this
     */
    public function setGMTOffset(int $value)
    {
        $this->GMTOffset = $value;

        return $this;
    }

    /**
     * Gets Name.
     */
    public function getName(): string
    {
        return $this->Name;
    }

    /**
     * Sets Name.
     *
     * @return $this
     */
    public function setName(string $value)
    {
        $this->Name = $value;

        return $this;
    }
}
