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
    protected $TimeZone = null;

    protected $TimeZoneName = null;

    protected $UtcOffset = null;

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

    public function getTimeZoneName(): string
    {
        return $this->TimeZoneName;
    }

    /**
     * @return $this
     */
    public function setTimeZoneName(string $value)
    {
        $this->TimeZoneName = $value;

        return $this;
    }

    public function getUtcOffset(): int
    {
        return $this->UtcOffset;
    }

    /**
     * @return $this
     */
    public function setUtcOffset(int $value)
    {
        $this->UtcOffset = $value;

        return $this;
    }
}
