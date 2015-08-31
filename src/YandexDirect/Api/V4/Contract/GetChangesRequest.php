<?php

namespace Biplane\YandexDirect\Api\V4\Contract;

/**
 * @codeCoverageIgnore
 * @SuppressWarnings(PHPMD)
 */
class GetChangesRequest
{
    /**
     * @var int[]
     */
    protected $CampaignIDS;
    /**
     * @var int[]
     */
    protected $BannerIDS;
    /**
     * @var string[]
     */
    protected $Logins;
    /**
     * @var string
     */
    protected $Timestamp;

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
     * Gets the CampaignIDS.
     *
     * @return int[]
     */
    public function getCampaignIDS()
    {
        return $this->CampaignIDS;
    }

    /**
     * Sets the CampaignIDS.
     *
     * @param int[] $CampaignIDS
     *
     * @return GetChangesRequest
     */
    public function setCampaignIDS(array $CampaignIDS)
    {
        $this->CampaignIDS = $CampaignIDS;

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
     * @return GetChangesRequest
     */
    public function setBannerIDS(array $BannerIDS)
    {
        $this->BannerIDS = $BannerIDS;

        return $this;
    }

    /**
     * Gets the Logins.
     *
     * @return string[]
     */
    public function getLogins()
    {
        return $this->Logins;
    }

    /**
     * Sets the Logins.
     *
     * @param string[] $Logins
     *
     * @return GetChangesRequest
     */
    public function setLogins(array $Logins)
    {
        $this->Logins = $Logins;

        return $this;
    }

    /**
     * Gets the Timestamp.
     *
     * @return string
     */
    public function getTimestamp()
    {
        return $this->Timestamp;
    }

    /**
     * Sets the Timestamp.
     *
     * @param string $Timestamp
     *
     * @return GetChangesRequest
     */
    public function setTimestamp($Timestamp)
    {
        $this->Timestamp = $Timestamp;

        return $this;
    }
}