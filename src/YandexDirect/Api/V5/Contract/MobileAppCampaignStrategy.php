<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class MobileAppCampaignStrategy
{

    protected $Search = null;

    protected $Network = null;

    /**
     * Creates a new instance of MobileAppCampaignStrategy.
     *
     * @return MobileAppCampaignStrategy
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets Search.
     *
     * @return MobileAppCampaignSearchStrategy
     */
    public function getSearch()
    {
        return $this->Search;
    }

    /**
     * Sets Search.
     *
     * @param MobileAppCampaignSearchStrategy $value
     * @return $this
     */
    public function setSearch(MobileAppCampaignSearchStrategy $value)
    {
        $this->Search = $value;

        return $this;
    }

    /**
     * Gets Network.
     *
     * @return MobileAppCampaignNetworkStrategy
     */
    public function getNetwork()
    {
        return $this->Network;
    }

    /**
     * Sets Network.
     *
     * @param MobileAppCampaignNetworkStrategy $value
     * @return $this
     */
    public function setNetwork(MobileAppCampaignNetworkStrategy $value)
    {
        $this->Network = $value;

        return $this;
    }


}

