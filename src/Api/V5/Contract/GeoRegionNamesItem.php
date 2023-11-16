<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class GeoRegionNamesItem
{
    protected $GeoRegionId = null;

    protected $GeoRegionName = null;

    protected $GeoRegionType = null;

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

    public function getGeoRegionName(): string
    {
        return $this->GeoRegionName;
    }

    /**
     * @return $this
     */
    public function setGeoRegionName(string $value)
    {
        $this->GeoRegionName = $value;

        return $this;
    }

    public function getGeoRegionType(): string
    {
        return $this->GeoRegionType;
    }

    /**
     * @return $this
     */
    public function setGeoRegionType(string $value)
    {
        $this->GeoRegionType = $value;

        return $this;
    }
}
