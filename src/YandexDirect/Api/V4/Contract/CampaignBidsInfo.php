<?php

namespace Biplane\YandexDirect\Api\V4\Contract;

/**
 * @codeCoverageIgnore
 * @SuppressWarnings(PHPMD)
 */
class CampaignBidsInfo
{
    /**
     * @var int
     */
    protected $CampaignID;
    /**
     * @var int[]
     */
    protected $BannerIDS;

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
     * Gets the CampaignID.
     *
     * @return int
     */
    public function getCampaignID()
    {
        return $this->CampaignID;
    }

    /**
     * Sets the CampaignID.
     *
     * @param int $CampaignID
     *
     * @return CampaignBidsInfo
     */
    public function setCampaignID($CampaignID)
    {
        $this->CampaignID = $CampaignID;

        return $this;
    }

    /**
     * Gets the BannerIDS.
     *
     * @return int[]
     */
    public function getBannerIDS()
    {
        return $this->BannerIDS;
    }

    /**
     * Sets the BannerIDS.
     *
     * @param int[] $BannerIDS
     *
     * @return CampaignBidsInfo
     */
    public function setBannerIDS(array $BannerIDS)
    {
        $this->BannerIDS = $BannerIDS;

        return $this;
    }
}