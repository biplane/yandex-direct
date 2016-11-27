<?php

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
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets GeoRegionId.
     *
     * @return int
     */
    public function getGeoRegionId()
    {
        return $this->GeoRegionId;
    }

    /**
     * Sets GeoRegionId.
     *
     * @param int $value
     * @return self
     */
    public function setGeoRegionId($value)
    {
        $this->GeoRegionId = $value;

        return $this;
    }

    /**
     * Gets MetroStationId.
     *
     * @return int
     */
    public function getMetroStationId()
    {
        return $this->MetroStationId;
    }

    /**
     * Sets MetroStationId.
     *
     * @param int $value
     * @return self
     */
    public function setMetroStationId($value)
    {
        $this->MetroStationId = $value;

        return $this;
    }

    /**
     * Gets MetroStationName.
     *
     * @return string
     */
    public function getMetroStationName()
    {
        return $this->MetroStationName;
    }

    /**
     * Sets MetroStationName.
     *
     * @param string $value
     * @return self
     */
    public function setMetroStationName($value)
    {
        $this->MetroStationName = $value;

        return $this;
    }


}

