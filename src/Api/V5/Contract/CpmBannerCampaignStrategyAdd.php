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
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    public function getSearch(): CpmBannerCampaignSearchStrategyAdd
    {
        return $this->Search;
    }

    /**
     * @return $this
     */
    public function setSearch(CpmBannerCampaignSearchStrategyAdd $value)
    {
        $this->Search = $value;

        return $this;
    }

    public function getNetwork(): CpmBannerCampaignNetworkStrategyAdd
    {
        return $this->Network;
    }

    /**
     * @return $this
     */
    public function setNetwork(CpmBannerCampaignNetworkStrategyAdd $value)
    {
        $this->Network = $value;

        return $this;
    }
}
