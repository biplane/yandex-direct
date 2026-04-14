<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class TimeZonesItem
{
    /** @var string */
    protected $TimeZone;

    /** @var string */
    protected $TimeZoneName;

    /** @var int */
    protected $UtcOffset;

    /**
     * Create a new instance.
     *
     * @return static
     */
    public static function create()
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
     * Get TimeZoneName
     */
    public function getTimeZoneName(): string
    {
        return $this->TimeZoneName;
    }

    /**
     * Set TimeZoneName
     *
     * @return $this
     */
    public function setTimeZoneName(string $value)
    {
        $this->TimeZoneName = $value;

        return $this;
    }

    /**
     * Get UtcOffset
     */
    public function getUtcOffset(): int
    {
        return $this->UtcOffset;
    }

    /**
     * Set UtcOffset
     *
     * @return $this
     */
    public function setUtcOffset(int $value)
    {
        $this->UtcOffset = $value;

        return $this;
    }
}
