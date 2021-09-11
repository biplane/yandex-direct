<?php

declare(strict_types=1);

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
     * Gets TimeZoneName.
     */
    public function getTimeZoneName(): string
    {
        return $this->TimeZoneName;
    }

    /**
     * Sets TimeZoneName.
     *
     * @return $this
     */
    public function setTimeZoneName(string $value)
    {
        $this->TimeZoneName = $value;

        return $this;
    }

    /**
     * Gets UtcOffset.
     */
    public function getUtcOffset(): int
    {
        return $this->UtcOffset;
    }

    /**
     * Sets UtcOffset.
     *
     * @return $this
     */
    public function setUtcOffset(int $value)
    {
        $this->UtcOffset = $value;

        return $this;
    }
}
