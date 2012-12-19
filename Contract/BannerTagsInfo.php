<?php

namespace Biplane\YandexDirectBundle\Contract;

/**
 * @codeCoverageIgnore
 * @SuppressWarnings(PHPMD)
 */
class BannerTagsInfo
{
    /**
     * @var int
     */
    protected $BannerID;
    /**
     * @var int[]
     */
    protected $TagIDS;

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
     * Gets the BannerID.
     *
     * @return int
     */
    public function getBannerID()
    {
        return $this->BannerID;
    }

    /**
     * Sets the BannerID.
     *
     * @param int $BannerID
     *
     * @return BannerTagsInfo
     */
    public function setBannerID($BannerID)
    {
        $this->BannerID = $BannerID;

        return $this;
    }

    /**
     * Gets the TagIDS.
     *
     * @return int[]
     */
    public function getTagIDS()
    {
        return $this->TagIDS;
    }

    /**
     * Sets the TagIDS.
     *
     * @param int[] $TagIDS
     *
     * @return BannerTagsInfo
     */
    public function setTagIDS(array $TagIDS)
    {
        $this->TagIDS = $TagIDS;

        return $this;
    }
}