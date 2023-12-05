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
    protected $Search = null;

    protected $Network = null;

    /**
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    public function getSearch(): UnifiedCampaignSearchStrategyAdd
    {
        return $this->Search;
    }

    /**
     * @return $this
     */
    public function setSearch(UnifiedCampaignSearchStrategyAdd $value)
    {
        $this->Search = $value;

        return $this;
    }

    public function getNetwork(): UnifiedCampaignNetworkStrategyAdd
    {
        return $this->Network;
    }

    /**
     * @return $this
     */
    public function setNetwork(UnifiedCampaignNetworkStrategyAdd $value)
    {
        $this->Network = $value;

        return $this;
    }
}
