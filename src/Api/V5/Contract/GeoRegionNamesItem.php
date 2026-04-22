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
    /** @var int */
    protected $GeoRegionId;

    /** @var string */
    protected $GeoRegionName;

    /** @var string */
    protected $GeoRegionType;

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
     * Get GeoRegionName
     */
    public function getGeoRegionName(): string
    {
        return $this->GeoRegionName;
    }

    /**
     * Set GeoRegionName
     *
     * @return $this
     */
    public function setGeoRegionName(string $value)
    {
        $this->GeoRegionName = $value;

        return $this;
    }

    /**
     * Get GeoRegionType
     */
    public function getGeoRegionType(): string
    {
        return $this->GeoRegionType;
    }

    /**
     * Set GeoRegionType
     *
     * @return $this
     */
    public function setGeoRegionType(string $value)
    {
        $this->GeoRegionType = $value;

        return $this;
    }
}
