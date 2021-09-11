<?php

declare(strict_types=1);

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
     * Gets GeoRegionName.
     */
    public function getGeoRegionName(): string
    {
        return $this->GeoRegionName;
    }

    /**
     * Sets GeoRegionName.
     *
     * @return $this
     */
    public function setGeoRegionName(string $value)
    {
        $this->GeoRegionName = $value;

        return $this;
    }

    /**
     * Gets GeoRegionType.
     */
    public function getGeoRegionType(): string
    {
        return $this->GeoRegionType;
    }

    /**
     * Sets GeoRegionType.
     *
     * @return $this
     */
    public function setGeoRegionType(string $value)
    {
        $this->GeoRegionType = $value;

        return $this;
    }

    /**
     * Gets ParentId.
     */
    public function getParentId(): ?int
    {
        return $this->ParentId;
    }

    /**
     * Sets ParentId.
     *
     * @return $this
     */
    public function setParentId(?int $value = null)
    {
        $this->ParentId = $value;

        return $this;
    }
}
