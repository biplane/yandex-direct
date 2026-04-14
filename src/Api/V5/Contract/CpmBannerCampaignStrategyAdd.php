<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class CpmBannerCampaignStrategyAdd
{
    /** @var CpmBannerCampaignSearchStrategyAdd */
    protected $Search;

    /** @var CpmBannerCampaignNetworkStrategyAdd */
    protected $Network;

    /**
     * Create a new instance.
     *
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    /**
     * Get Search
     */
    public function getSearch(): CpmBannerCampaignSearchStrategyAdd
    {
        return $this->Search;
    }

    /**
     * Set Search
     *
     * @return $this
     */
    public function setSearch(CpmBannerCampaignSearchStrategyAdd $value)
    {
        $this->Search = $value;

        return $this;
    }

    /**
     * Get Network
     */
    public function getNetwork(): CpmBannerCampaignNetworkStrategyAdd
    {
        return $this->Network;
    }

    /**
     * Set Network
     *
     * @return $this
     */
    public function setNetwork(CpmBannerCampaignNetworkStrategyAdd $value)
    {
        $this->Network = $value;

        return $this;
    }
}
