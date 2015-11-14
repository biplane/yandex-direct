<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class MobileAppCampaignStrategyAdd
{

    protected $Search = null;

    protected $Network = null;

    /**
     * Creates a new instance of MobileAppCampaignStrategyAdd.
     *
     * @return MobileAppCampaignStrategyAdd
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets Search.
     *
     * @return MobileAppCampaignSearchStrategyAdd
     */
    public function getSearch()
    {
        return $this->Search;
    }

    /**
     * Sets Search.
     *
     * @param MobileAppCampaignSearchStrategyAdd $value
     * @return $this
     */
    public function setSearch(MobileAppCampaignSearchStrategyAdd $value)
    {
        $this->Search = $value;

        return $this;
    }

    /**
     * Gets Network.
     *
     * @return MobileAppCampaignNetworkStrategyAdd
     */
    public function getNetwork()
    {
        return $this->Network;
    }

    /**
     * Sets Network.
     *
     * @param MobileAppCampaignNetworkStrategyAdd $value
     * @return $this
     */
    public function setNetwork(MobileAppCampaignNetworkStrategyAdd $value)
    {
        $this->Network = $value;

        return $this;
    }


}

