<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class CpmBannerCampaignStrategyAdd
{

    protected $Search = null;

    protected $Network = null;

    /**
     * Creates a new instance of CpmBannerCampaignStrategyAdd.
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets Search.
     *
     * @return CpmBannerCampaignSearchStrategyAdd
     */
    public function getSearch()
    {
        return $this->Search;
    }

    /**
     * Sets Search.
     *
     * @param CpmBannerCampaignSearchStrategyAdd $value
     * @return $this
     */
    public function setSearch(CpmBannerCampaignSearchStrategyAdd $value)
    {
        $this->Search = $value;

        return $this;
    }

    /**
     * Gets Network.
     *
     * @return CpmBannerCampaignNetworkStrategyAdd
     */
    public function getNetwork()
    {
        return $this->Network;
    }

    /**
     * Sets Network.
     *
     * @param CpmBannerCampaignNetworkStrategyAdd $value
     * @return $this
     */
    public function setNetwork(CpmBannerCampaignNetworkStrategyAdd $value)
    {
        $this->Network = $value;

        return $this;
    }


}

