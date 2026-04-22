<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class UnifiedCampaignStrategyAdd
{
    /** @var UnifiedCampaignSearchStrategyAdd */
    protected $Search;

    /** @var UnifiedCampaignNetworkStrategyAdd */
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
    public function getSearch(): UnifiedCampaignSearchStrategyAdd
    {
        return $this->Search;
    }

    /**
     * Set Search
     *
     * @return $this
     */
    public function setSearch(UnifiedCampaignSearchStrategyAdd $value)
    {
        $this->Search = $value;

        return $this;
    }

    /**
     * Get Network
     */
    public function getNetwork(): UnifiedCampaignNetworkStrategyAdd
    {
        return $this->Network;
    }

    /**
     * Set Network
     *
     * @return $this
     */
    public function setNetwork(UnifiedCampaignNetworkStrategyAdd $value)
    {
        $this->Network = $value;

        return $this;
    }
}
