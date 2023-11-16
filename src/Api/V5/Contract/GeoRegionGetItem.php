<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class GeoRegionGetItem
{
//    Can be omitted.
//    protected $GeoRegionId = null;

//    Can be omitted.
//    protected $GeoRegionName = null;

//    Can be omitted.
//    protected $ParentGeoRegionNames = null;

    /**
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    public function getGeoRegionId(): ?int
    {
        return $this->GeoRegionId ?? null;
    }

    /**
     * @return $this
     */
    public function setGeoRegionId(?int $value = null)
    {
        $this->GeoRegionId = $value;

        return $this;
    }

    public function getGeoRegionName(): ?string
    {
        return $this->GeoRegionName ?? null;
    }

    /**
     * @return $this
     */
    public function setGeoRegionName(?string $value = null)
    {
        $this->GeoRegionName = $value;

        return $this;
    }

    /**
     * @return string[]|null
     */
    public function getParentGeoRegionNames(): ?array
    {
        return $this->ParentGeoRegionNames ?? null;
    }

    /**
     * @param string[]|null $value
     *
     * @return $this
     */
    public function setParentGeoRegionNames(?array $value = null)
    {
        $this->ParentGeoRegionNames = $value;

        return $this;
    }
}
