<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class CpmBannerCampaignStrategy
{

//    Can be omit.
//    protected $Search = null;

//    Can be omit.
//    protected $Network = null;

    /**
     * Creates a new instance of CpmBannerCampaignStrategy.
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
     * @return CpmBannerCampaignSearchStrategy|null
     */
    public function getSearch()
    {
        return isset($this->Search) ? $this->Search : null;
    }

    /**
     * Sets Search.
     *
     * @param CpmBannerCampaignSearchStrategy|null $value
     * @return $this
     */
    public function setSearch(CpmBannerCampaignSearchStrategy $value = null)
    {
        $this->Search = $value;

        return $this;
    }

    /**
     * Gets Network.
     *
     * @return CpmBannerCampaignNetworkStrategy|null
     */
    public function getNetwork()
    {
        return isset($this->Network) ? $this->Network : null;
    }

    /**
     * Sets Network.
     *
     * @param CpmBannerCampaignNetworkStrategy|null $value
     * @return $this
     */
    public function setNetwork(CpmBannerCampaignNetworkStrategy $value = null)
    {
        $this->Network = $value;

        return $this;
    }


}

