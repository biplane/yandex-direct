<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class DynamicTextCampaignStrategy
{

    protected $Search = null;

    protected $Network = null;

    /**
     * Creates a new instance of DynamicTextCampaignStrategy.
     *
     * @return DynamicTextCampaignStrategy
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets Search.
     *
     * @return DynamicTextCampaignSearchStrategy|null
     */
    public function getSearch()
    {
        return $this->Search;
    }

    /**
     * Sets Search.
     *
     * @param DynamicTextCampaignSearchStrategy|null $value
     * @return $this
     */
    public function setSearch(DynamicTextCampaignSearchStrategy $value = null)
    {
        $this->Search = $value;

        return $this;
    }

    /**
     * Gets Network.
     *
     * @return DynamicTextCampaignNetworkStrategy|null
     */
    public function getNetwork()
    {
        return $this->Network;
    }

    /**
     * Sets Network.
     *
     * @param DynamicTextCampaignNetworkStrategy|null $value
     * @return $this
     */
    public function setNetwork(DynamicTextCampaignNetworkStrategy $value = null)
    {
        $this->Network = $value;

        return $this;
    }


}

