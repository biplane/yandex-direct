<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class MetroStationsItem
{
    protected $GeoRegionId = null;

    protected $MetroStationId = null;

    protected $MetroStationName = null;

    /**
     * Creates a new instance of MetroStationsItem.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets GeoRegionId.
     */
    public function getGeoRegionId(): int
    {
        return $this->GeoRegionId;
    }

    /**
     * Sets GeoRegionId.
     *
     * @return $this
     */
    public function setGeoRegionId(int $value)
    {
        $this->GeoRegionId = $value;

        return $this;
    }

    /**
     * Gets MetroStationId.
     */
    public function getMetroStationId(): int
    {
        return $this->MetroStationId;
    }

    /**
     * Sets MetroStationId.
     *
     * @return $this
     */
    public function setMetroStationId(int $value)
    {
        $this->MetroStationId = $value;

        return $this;
    }

    /**
     * Gets MetroStationName.
     */
    public function getMetroStationName(): string
    {
        return $this->MetroStationName;
    }

    /**
     * Sets MetroStationName.
     *
     * @return $this
     */
    public function setMetroStationName(string $value)
    {
        $this->MetroStationName = $value;

        return $this;
    }
}
