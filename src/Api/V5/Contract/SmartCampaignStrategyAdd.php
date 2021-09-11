<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class SmartCampaignStrategyAdd
{
    protected $Search = null;

    protected $Network = null;

    /**
     * Creates a new instance of SmartCampaignStrategyAdd.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets Search.
     */
    public function getSearch(): SmartCampaignSearchStrategyAdd
    {
        return $this->Search;
    }

    /**
     * Sets Search.
     *
     * @return $this
     */
    public function setSearch(SmartCampaignSearchStrategyAdd $value)
    {
        $this->Search = $value;

        return $this;
    }

    /**
     * Gets Network.
     */
    public function getNetwork(): SmartCampaignNetworkStrategyAdd
    {
        return $this->Network;
    }

    /**
     * Sets Network.
     *
     * @return $this
     */
    public function setNetwork(SmartCampaignNetworkStrategyAdd $value)
    {
        $this->Network = $value;

        return $this;
    }
}
