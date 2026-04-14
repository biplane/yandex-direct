<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class DynamicTextCampaignStrategyAdd
{
    /** @var DynamicTextCampaignSearchStrategyAdd */
    protected $Search;

    /** @var DynamicTextCampaignNetworkStrategyAdd */
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
    public function getSearch(): DynamicTextCampaignSearchStrategyAdd
    {
        return $this->Search;
    }

    /**
     * Set Search
     *
     * @return $this
     */
    public function setSearch(DynamicTextCampaignSearchStrategyAdd $value)
    {
        $this->Search = $value;

        return $this;
    }

    /**
     * Get Network
     */
    public function getNetwork(): DynamicTextCampaignNetworkStrategyAdd
    {
        return $this->Network;
    }

    /**
     * Set Network
     *
     * @return $this
     */
    public function setNetwork(DynamicTextCampaignNetworkStrategyAdd $value)
    {
        $this->Network = $value;

        return $this;
    }
}
