<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class SmartCampaignStrategy
{

//    Can be omit.
//    protected $Search = null;

//    Can be omit.
//    protected $Network = null;

    /**
     * Creates a new instance of SmartCampaignStrategy.
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
     * @return SmartCampaignSearchStrategy|null
     */
    public function getSearch()
    {
        return isset($this->Search) ? $this->Search : null;
    }

    /**
     * Sets Search.
     *
     * @param SmartCampaignSearchStrategy|null $value
     * @return $this
     */
    public function setSearch(SmartCampaignSearchStrategy $value = null)
    {
        $this->Search = $value;

        return $this;
    }

    /**
     * Gets Network.
     *
     * @return SmartCampaignNetworkStrategy|null
     */
    public function getNetwork()
    {
        return isset($this->Network) ? $this->Network : null;
    }

    /**
     * Sets Network.
     *
     * @param SmartCampaignNetworkStrategy|null $value
     * @return $this
     */
    public function setNetwork(SmartCampaignNetworkStrategy $value = null)
    {
        $this->Network = $value;

        return $this;
    }


}

