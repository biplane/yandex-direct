<?php

namespace Biplane\YandexDirect\Api\V4\Contract;

/**
 * Auto-generated code.
 */
class GetChangesRequest
{

    protected $CampaignIDS = null;

    protected $BannerIDS = null;

    protected $Logins = null;

    protected $Timestamp = null;

    /**
     * Creates a new instance of GetChangesRequest.
     *
     * @return GetChangesRequest
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets CampaignIDS.
     *
     * @return int[]|null
     */
    public function getCampaignIDS()
    {
        return $this->CampaignIDS;
    }

    /**
     * Sets CampaignIDS.
     *
     * @param array|null $value
     * @return $this
     */
    public function setCampaignIDS(array $value = null)
    {
        $this->CampaignIDS = $value;

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

    /**
     * Gets Logins.
     *
     * @return string[]|null
     */
    public function getLogins()
    {
        return $this->Logins;
    }

    /**
     * Sets Logins.
     *
     * @param array|null $value
     * @return $this
     */
    public function setLogins(array $value = null)
    {
        $this->Logins = $value;

        return $this;
    }

    /**
     * Gets Timestamp.
     *
     * @return string|null
     */
    public function getTimestamp()
    {
        return $this->Timestamp;
    }

    /**
     * Sets Timestamp.
     *
     * @param string|null $value
     * @return $this
     */
    public function setTimestamp($value = null)
    {
        $this->Timestamp = $value;

        return $this;
    }


}

