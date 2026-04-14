<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V4\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class RegionInfo
{
    /** @var int */
    protected $RegionID;

    /** @var int|null */
    protected $ParentID = null;

    /** @var string */
    protected $RegionName;

    /** @var string */
    protected $RegionType;

    /**
     * Create a new instance.
     *
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    /**
     * Get RegionID
     */
    public function getRegionID(): int
    {
        return $this->RegionID;
    }

    /**
     * Set RegionID
     *
     * @return $this
     */
    public function setRegionID(int $value)
    {
        $this->RegionID = $value;

        return $this;
    }

    /**
     * Get ParentID
     */
    public function getParentID(): ?int
    {
        return $this->ParentID;
    }

    /**
     * Set ParentID
     *
     * @return $this
     */
    public function setParentID(?int $value)
    {
        $this->ParentID = $value;

        return $this;
    }

    /**
     * Get RegionName
     */
    public function getRegionName(): string
    {
        return $this->RegionName;
    }

    /**
     * Set RegionName
     *
     * @return $this
     */
    public function setRegionName(string $value)
    {
        $this->RegionName = $value;

        return $this;
    }

    /**
     * Get RegionType
     */
    public function getRegionType(): string
    {
        return $this->RegionType;
    }

    /**
     * Set RegionType
     *
     * @return $this
     */
    public function setRegionType(string $value)
    {
        $this->RegionType = $value;

        return $this;
    }
}
