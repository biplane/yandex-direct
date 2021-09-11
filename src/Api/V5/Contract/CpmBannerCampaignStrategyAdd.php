<?php

declare(strict_types=1);

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
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets Search.
     */
    public function getSearch(): CpmBannerCampaignSearchStrategyAdd
    {
        return $this->Search;
    }

    /**
     * Sets Search.
     *
     * @return $this
     */
    public function setSearch(CpmBannerCampaignSearchStrategyAdd $value)
    {
        $this->Search = $value;

        return $this;
    }

    /**
     * Gets Network.
     */
    public function getNetwork(): CpmBannerCampaignNetworkStrategyAdd
    {
        return $this->Network;
    }

    /**
     * Sets Network.
     *
     * @return $this
     */
    public function setNetwork(CpmBannerCampaignNetworkStrategyAdd $value)
    {
        $this->Network = $value;

        return $this;
    }
}
