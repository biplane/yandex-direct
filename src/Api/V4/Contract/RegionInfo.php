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
    protected $RegionID = null;

    protected $ParentID = null;

    protected $RegionName = null;

    protected $RegionType = null;

    /**
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    public function getRegionID(): int
    {
        return $this->RegionID;
    }

    /**
     * @return $this
     */
    public function setRegionID(int $value)
    {
        $this->RegionID = $value;

        return $this;
    }

    public function getParentID(): ?int
    {
        return $this->ParentID;
    }

    /**
     * @return $this
     */
    public function setParentID(?int $value = null)
    {
        $this->ParentID = $value;

        return $this;
    }

    public function getRegionName(): string
    {
        return $this->RegionName;
    }

    /**
     * @return $this
     */
    public function setRegionName(string $value)
    {
        $this->RegionName = $value;

        return $this;
    }

    public function getRegionType(): string
    {
        return $this->RegionType;
    }

    /**
     * @return $this
     */
    public function setRegionType(string $value)
    {
        $this->RegionType = $value;

        return $this;
    }
}
