<?php

namespace Biplane\YandexDirect\Api\V4\Contract;

/**
 * Auto-generated code.
 */
class CampaignBidsInfo
{

    protected $CampaignID = null;

    protected $BannerIDS = null;

    /**
     * Creates a new instance of CampaignBidsInfo.
     *
     * @return CampaignBidsInfo
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets CampaignID.
     *
     * @return int|null
     */
    public function getCampaignID()
    {
        return $this->CampaignID;
    }

    /**
     * Sets CampaignID.
     *
     * @param int|null $value
     * @return $this
     */
    public function setCampaignID($value = null)
    {
        $this->CampaignID = $value;

        return $this;
    }

    /**
     * Gets BannerIDS.
     *
     * @return int[]|null
     */
    public function getBannerIDS()
    {
        return $this->BannerIDS;
    }

    /**
     * Sets BannerIDS.
     *
     * @param array|null $value
     * @return $this
     */
    public function setBannerIDS(array $value = null)
    {
        $this->BannerIDS = $value;

        return $this;
    }


}

