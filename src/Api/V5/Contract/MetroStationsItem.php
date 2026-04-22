<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class MetroStationsItem
{
    /** @var int */
    protected $GeoRegionId;

    /** @var int */
    protected $MetroStationId;

    /** @var string */
    protected $MetroStationName;

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
     * Get GeoRegionId
     */
    public function getGeoRegionId(): int
    {
        return $this->GeoRegionId;
    }

    /**
     * Set GeoRegionId
     *
     * @return $this
     */
    public function setGeoRegionId(int $value)
    {
        $this->GeoRegionId = $value;

        return $this;
    }

    /**
     * Get MetroStationId
     */
    public function getMetroStationId(): int
    {
        return $this->MetroStationId;
    }

    /**
     * Set MetroStationId
     *
     * @return $this
     */
    public function setMetroStationId(int $value)
    {
        $this->MetroStationId = $value;

        return $this;
    }

    /**
     * Get MetroStationName
     */
    public function getMetroStationName(): string
    {
        return $this->MetroStationName;
    }

    /**
     * Set MetroStationName
     *
     * @return $this
     */
    public function setMetroStationName(string $value)
    {
        $this->MetroStationName = $value;

        return $this;
    }
}
