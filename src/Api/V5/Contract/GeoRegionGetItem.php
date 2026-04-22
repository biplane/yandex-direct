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
//    protected $GeoRegionId;

//    Can be omitted.
//    protected $GeoRegionName;

//    Can be omitted.
//    protected $ParentGeoRegionNames;

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
    public function getGeoRegionId(): ?int
    {
        return $this->GeoRegionId ?? null;
    }

    /**
     * Set GeoRegionId
     *
     * @return $this
     */
    public function setGeoRegionId(?int $value)
    {
        $this->GeoRegionId = $value;

        return $this;
    }

    /**
     * Get GeoRegionName
     */
    public function getGeoRegionName(): ?string
    {
        return $this->GeoRegionName ?? null;
    }

    /**
     * Set GeoRegionName
     *
     * @return $this
     */
    public function setGeoRegionName(?string $value)
    {
        $this->GeoRegionName = $value;

        return $this;
    }

    /**
     * Get ParentGeoRegionNames
     *
     * @return non-empty-list<string>|null
     */
    public function getParentGeoRegionNames(): ?array
    {
        return $this->ParentGeoRegionNames ?? null;
    }

    /**
     * Set ParentGeoRegionNames
     *
     * @param non-empty-list<string>|null $value
     *
     * @return $this
     */
    public function setParentGeoRegionNames(?array $value)
    {
        $this->ParentGeoRegionNames = $value;

        return $this;
    }
}
