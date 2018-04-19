<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class GeoRegionsItem
{

    protected $GeoRegionId = null;

    protected $GeoRegionName = null;

    protected $GeoRegionType = null;

    protected $ParentId = null;

    /**
     * Creates a new instance of GeoRegionsItem.
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
     * @return $this
     */
    public function setGeoRegionId($value)
    {
        $this->GeoRegionId = $value;

        return $this;
    }

    /**
     * Gets GeoRegionName.
     *
     * @return string
     */
    public function getGeoRegionName()
    {
        return $this->GeoRegionName;
    }

    /**
     * Sets GeoRegionName.
     *
     * @param string $value
     * @return $this
     */
    public function setGeoRegionName($value)
    {
        $this->GeoRegionName = $value;

        return $this;
    }

    /**
     * Gets GeoRegionType.
     *
     * @return string
     */
    public function getGeoRegionType()
    {
        return $this->GeoRegionType;
    }

    /**
     * Sets GeoRegionType.
     *
     * @param string $value
     * @return $this
     */
    public function setGeoRegionType($value)
    {
        $this->GeoRegionType = $value;

        return $this;
    }

    /**
     * Gets ParentId.
     *
     * @return int|null
     */
    public function getParentId()
    {
        return $this->ParentId;
    }

    /**
     * Sets ParentId.
     *
     * @param int|null $value
     * @return $this
     */
    public function setParentId($value = null)
    {
        $this->ParentId = $value;

        return $this;
    }


}

