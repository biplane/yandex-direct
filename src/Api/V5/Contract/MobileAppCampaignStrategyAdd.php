<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class MobileAppCampaignStrategyAdd
{
    /** @var MobileAppCampaignSearchStrategyAdd */
    protected $Search;

    /** @var MobileAppCampaignNetworkStrategyAdd */
    protected $Network;

    /**
     * Create a new instance.
     *
     * @return static
     */
    public static function create(): static
    {
        return new static();
    }

    /**
     * Get Search
     */
    public function getSearch(): MobileAppCampaignSearchStrategyAdd
    {
        return $this->Search;
    }

    /**
     * Set Search
     *
     * @return $this
     */
    public function setSearch(MobileAppCampaignSearchStrategyAdd $value)
    {
        $this->Search = $value;

        return $this;
    }

    /**
     * Get Network
     */
    public function getNetwork(): MobileAppCampaignNetworkStrategyAdd
    {
        return $this->Network;
    }

    /**
     * Set Network
     *
     * @return $this
     */
    public function setNetwork(MobileAppCampaignNetworkStrategyAdd $value)
    {
        $this->Network = $value;

        return $this;
    }
}
