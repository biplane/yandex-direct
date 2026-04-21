<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class SmartCampaignStrategyAdd
{
    /** @var SmartCampaignSearchStrategyAdd */
    protected $Search;

    /** @var SmartCampaignNetworkStrategyAdd */
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
    public function getSearch(): SmartCampaignSearchStrategyAdd
    {
        return $this->Search;
    }

    /**
     * Set Search
     *
     * @return $this
     */
    public function setSearch(SmartCampaignSearchStrategyAdd $value)
    {
        $this->Search = $value;

        return $this;
    }

    /**
     * Get Network
     */
    public function getNetwork(): SmartCampaignNetworkStrategyAdd
    {
        return $this->Network;
    }

    /**
     * Set Network
     *
     * @return $this
     */
    public function setNetwork(SmartCampaignNetworkStrategyAdd $value)
    {
        $this->Network = $value;

        return $this;
    }
}
