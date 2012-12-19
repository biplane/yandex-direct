<?php

namespace Biplane\YandexDirectBundle\Contract;

/**
 * @codeCoverageIgnore
 * @SuppressWarnings(PHPMD)
 */
class RegionInfo
{
    /**
     * @var int
     */
    protected $RegionID;
    /**
     * @var int
     */
    protected $ParentID;
    /**
     * @var string
     */
    protected $RegionName;
    /**
     * @var string
     */
    protected $RegionType;

    /**
     * Creates a new instance.
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets the RegionID.
     *
     * @return int
     */
    public function getRegionID()
    {
        return $this->RegionID;
    }

    /**
     * Sets the RegionID.
     *
     * @param int $RegionID
     *
     * @return RegionInfo
     */
    public function setRegionID($RegionID)
    {
        $this->RegionID = $RegionID;

        return $this;
    }

    /**
     * Gets the ParentID.
     *
     * @return int
     */
    public function getParentID()
    {
        return $this->ParentID;
    }

    /**
     * Sets the ParentID.
     *
     * @param int $ParentID
     *
     * @return RegionInfo
     */
    public function setParentID($ParentID)
    {
        $this->ParentID = $ParentID;

        return $this;
    }

    /**
     * Gets the RegionName.
     *
     * @return string
     */
    public function getRegionName()
    {
        return $this->RegionName;
    }

    /**
     * Sets the RegionName.
     *
     * @param string $RegionName
     *
     * @return RegionInfo
     */
    public function setRegionName($RegionName)
    {
        $this->RegionName = $RegionName;

        return $this;
    }

    /**
     * Gets the RegionType.
     *
     * @return string
     */
    public function getRegionType()
    {
        return $this->RegionType;
    }

    /**
     * Sets the RegionType.
     *
     * @param string $RegionType
     *
     * @return RegionInfo
     */
    public function setRegionType($RegionType)
    {
        $this->RegionType = $RegionType;

        return $this;
    }
}