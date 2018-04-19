<?php

namespace Biplane\YandexDirect\Api\V4\Contract;

/**
 * Auto-generated code.
 */
class RegionInfo
{

    protected $RegionID = null;

    protected $ParentID = null;

    protected $RegionName = null;

    protected $RegionType = null;

    /**
     * Creates a new instance of RegionInfo.
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets RegionID.
     *
     * @return int
     */
    public function getRegionID()
    {
        return $this->RegionID;
    }

    /**
     * Sets RegionID.
     *
     * @param int $value
     * @return $this
     */
    public function setRegionID($value)
    {
        $this->RegionID = $value;

        return $this;
    }

    /**
     * Gets ParentID.
     *
     * @return int|null
     */
    public function getParentID()
    {
        return $this->ParentID;
    }

    /**
     * Sets ParentID.
     *
     * @param int|null $value
     * @return $this
     */
    public function setParentID($value = null)
    {
        $this->ParentID = $value;

        return $this;
    }

    /**
     * Gets RegionName.
     *
     * @return string
     */
    public function getRegionName()
    {
        return $this->RegionName;
    }

    /**
     * Sets RegionName.
     *
     * @param string $value
     * @return $this
     */
    public function setRegionName($value)
    {
        $this->RegionName = $value;

        return $this;
    }

    /**
     * Gets RegionType.
     *
     * @return string
     */
    public function getRegionType()
    {
        return $this->RegionType;
    }

    /**
     * Sets RegionType.
     *
     * @param string $value
     * @return $this
     */
    public function setRegionType($value)
    {
        $this->RegionType = $value;

        return $this;
    }


}

