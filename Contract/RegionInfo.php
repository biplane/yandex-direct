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
     * @return int
     */
    public function getRegionID()
    {
        return $this->RegionID;
    }

    /**
     * @param int $RegionID
     * @return RegionInfo
     */
    public function setRegionID($RegionID)
    {
        $this->RegionID = $RegionID;

        return $this;
    }

    /**
     * @return int
     */
    public function getParentID()
    {
        return $this->ParentID;
    }

    /**
     * @param int $ParentID
     * @return RegionInfo
     */
    public function setParentID($ParentID)
    {
        $this->ParentID = $ParentID;

        return $this;
    }

    /**
     * @return string
     */
    public function getRegionName()
    {
        return $this->RegionName;
    }

    /**
     * @param string $RegionName
     * @return RegionInfo
     */
    public function setRegionName($RegionName)
    {
        $this->RegionName = $RegionName;

        return $this;
    }
}