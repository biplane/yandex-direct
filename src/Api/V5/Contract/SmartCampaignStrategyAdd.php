<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class SmartCampaignStrategyAdd
{

    protected $Search = null;

    protected $Network = null;

    /**
     * Creates a new instance of SmartCampaignStrategyAdd.
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
     * @return SmartCampaignSearchStrategyAdd
     */
    public function getSearch()
    {
        return $this->Search;
    }

    /**
     * Sets Search.
     *
     * @param SmartCampaignSearchStrategyAdd $value
     * @return $this
     */
    public function setSearch(SmartCampaignSearchStrategyAdd $value)
    {
        $this->Search = $value;

        return $this;
    }

    /**
     * Gets Network.
     *
     * @return SmartCampaignNetworkStrategyAdd
     */
    public function getNetwork()
    {
        return $this->Network;
    }

    /**
     * Sets Network.
     *
     * @param SmartCampaignNetworkStrategyAdd $value
     * @return $this
     */
    public function setNetwork(SmartCampaignNetworkStrategyAdd $value)
    {
        $this->Network = $value;

        return $this;
    }


}

