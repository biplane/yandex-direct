<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class DynamicTextCampaignStrategyAdd
{

    protected $Search = null;

    protected $Network = null;

    /**
     * Creates a new instance of DynamicTextCampaignStrategyAdd.
     *
     * @return DynamicTextCampaignStrategyAdd
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets Search.
     *
     * @return DynamicTextCampaignSearchStrategyAdd
     */
    public function getSearch()
    {
        return $this->Search;
    }

    /**
     * Sets Search.
     *
     * @param DynamicTextCampaignSearchStrategyAdd $value
     * @return $this
     */
    public function setSearch(DynamicTextCampaignSearchStrategyAdd $value)
    {
        $this->Search = $value;

        return $this;
    }

    /**
     * Gets Network.
     *
     * @return DynamicTextCampaignNetworkStrategyAdd
     */
    public function getNetwork()
    {
        return $this->Network;
    }

    /**
     * Sets Network.
     *
     * @param DynamicTextCampaignNetworkStrategyAdd $value
     * @return $this
     */
    public function setNetwork(DynamicTextCampaignNetworkStrategyAdd $value)
    {
        $this->Network = $value;

        return $this;
    }


}

