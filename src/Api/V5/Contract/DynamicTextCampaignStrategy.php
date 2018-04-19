<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class DynamicTextCampaignStrategy
{

//    Can be omit.
//    protected $Search = null;

//    Can be omit.
//    protected $Network = null;

    /**
     * Creates a new instance of DynamicTextCampaignStrategy.
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
     * @return DynamicTextCampaignSearchStrategy|null
     */
    public function getSearch()
    {
        return isset($this->Search) ? $this->Search : null;
    }

    /**
     * Sets Search.
     *
     * @param DynamicTextCampaignSearchStrategy|null $value
     * @return self
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
        return isset($this->Network) ? $this->Network : null;
    }

    /**
     * Sets Network.
     *
     * @param DynamicTextCampaignNetworkStrategy|null $value
     * @return self
     */
    public function setNetwork(DynamicTextCampaignNetworkStrategy $value = null)
    {
        $this->Network = $value;

        return $this;
    }


}

