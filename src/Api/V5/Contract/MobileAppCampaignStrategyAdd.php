<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class MobileAppCampaignStrategyAdd
{
    protected $Search = null;

    protected $Network = null;

    /**
     * Creates a new instance of MobileAppCampaignStrategyAdd.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets Search.
     */
    public function getSearch(): MobileAppCampaignSearchStrategyAdd
    {
        return $this->Search;
    }

    /**
     * Sets Search.
     *
     * @return $this
     */
    public function setSearch(MobileAppCampaignSearchStrategyAdd $value)
    {
        $this->Search = $value;

        return $this;
    }

    /**
     * Gets Network.
     */
    public function getNetwork(): MobileAppCampaignNetworkStrategyAdd
    {
        return $this->Network;
    }

    /**
     * Sets Network.
     *
     * @return $this
     */
    public function setNetwork(MobileAppCampaignNetworkStrategyAdd $value)
    {
        $this->Network = $value;

        return $this;
    }
}
