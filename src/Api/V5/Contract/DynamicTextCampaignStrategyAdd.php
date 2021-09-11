<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class DynamicTextCampaignStrategyAdd
{
    protected $Search = null;

    protected $Network = null;

    /**
     * Creates a new instance of DynamicTextCampaignStrategyAdd.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets Search.
     */
    public function getSearch(): DynamicTextCampaignSearchStrategyAdd
    {
        return $this->Search;
    }

    /**
     * Sets Search.
     *
     * @return $this
     */
    public function setSearch(DynamicTextCampaignSearchStrategyAdd $value)
    {
        $this->Search = $value;

        return $this;
    }

    /**
     * Gets Network.
     */
    public function getNetwork(): DynamicTextCampaignNetworkStrategyAdd
    {
        return $this->Network;
    }

    /**
     * Sets Network.
     *
     * @return $this
     */
    public function setNetwork(DynamicTextCampaignNetworkStrategyAdd $value)
    {
        $this->Network = $value;

        return $this;
    }
}
