<?php

namespace Biplane\YandexDirect\Api\V4\Contract;

/**
 * Auto-generated code.
 */
class BannerTagsInfo
{

    protected $BannerID = null;

    protected $TagIDS = null;

    /**
     * Creates a new instance of BannerTagsInfo.
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets BannerID.
     *
     * @return int
     */
    public function getBannerID()
    {
        return $this->BannerID;
    }

    /**
     * Sets BannerID.
     *
     * @param int $value
     * @return self
     */
    public function setBannerID($value)
    {
        $this->BannerID = $value;

        return $this;
    }

    /**
     * Gets TagIDS.
     *
     * @return int[]|null
     */
    public function getTagIDS()
    {
        return $this->TagIDS;
    }

    /**
     * Sets TagIDS.
     *
     * @param int[]|null $value
     * @return self
     */
    public function setTagIDS(array $value = null)
    {
        $this->TagIDS = $value;

        return $this;
    }


}

