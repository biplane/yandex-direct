<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V4\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class TimeZoneInfo
{
    /** @var string */
    protected $TimeZone;

    /** @var int */
    protected $GMTOffset;

    /** @var string */
    protected $Name;

    /**
     * Create a new instance.
     *
     * @return static
     */
    public static function create(): static
    {
        return new static();
    }

    /**
     * Get TimeZone
     */
    public function getTimeZone(): string
    {
        return $this->TimeZone;
    }

    /**
     * Set TimeZone
     *
     * @return $this
     */
    public function setTimeZone(string $value)
    {
        $this->TimeZone = $value;

        return $this;
    }

    /**
     * Get GMTOffset
     */
    public function getGMTOffset(): int
    {
        return $this->GMTOffset;
    }

    /**
     * Set GMTOffset
     *
     * @return $this
     */
    public function setGMTOffset(int $value)
    {
        $this->GMTOffset = $value;

        return $this;
    }

    /**
     * Get Name
     */
    public function getName(): string
    {
        return $this->Name;
    }

    /**
     * Set Name
     *
     * @return $this
     */
    public function setName(string $value)
    {
        $this->Name = $value;

        return $this;
    }
}
