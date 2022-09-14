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
    protected $GeoRegionId = null;

    protected $MetroStationId = null;

    protected $MetroStationName = null;

    /**
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    public function getGeoRegionId(): int
    {
        return $this->GeoRegionId;
    }

    /**
     * @return $this
     */
    public function setGeoRegionId(int $value)
    {
        $this->GeoRegionId = $value;

        return $this;
    }

    public function getMetroStationId(): int
    {
        return $this->MetroStationId;
    }

    /**
     * @return $this
     */
    public function setMetroStationId(int $value)
    {
        $this->MetroStationId = $value;

        return $this;
    }

    public function getMetroStationName(): string
    {
        return $this->MetroStationName;
    }

    /**
     * @return $this
     */
    public function setMetroStationName(string $value)
    {
        $this->MetroStationName = $value;

        return $this;
    }
}
