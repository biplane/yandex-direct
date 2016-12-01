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
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets Search.
     *
     * @return MobileAppCampaignSearchStrategy|null
     */
    public function getSearch()
    {
        return $this->Search;
    }

    /**
     * Sets Search.
     *
     * @param MobileAppCampaignSearchStrategy|null $value
     * @return self
     */
    public function setSearch(MobileAppCampaignSearchStrategy $value = null)
    {
        $this->Search = $value;

        return $this;
    }

    /**
     * Gets Network.
     *
     * @return MobileAppCampaignNetworkStrategy|null
     */
    public function getNetwork()
    {
        return $this->Network;
    }

    /**
     * Sets Network.
     *
     * @param MobileAppCampaignNetworkStrategy|null $value
     * @return self
     */
    public function setNetwork(MobileAppCampaignNetworkStrategy $value = null)
    {
        $this->Network = $value;

        return $this;
    }


}

