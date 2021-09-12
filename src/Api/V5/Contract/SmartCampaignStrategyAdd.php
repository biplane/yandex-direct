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
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    public function getSearch(): SmartCampaignSearchStrategyAdd
    {
        return $this->Search;
    }

    /**
     * @return $this
     */
    public function setSearch(SmartCampaignSearchStrategyAdd $value)
    {
        $this->Search = $value;

        return $this;
    }

    public function getNetwork(): SmartCampaignNetworkStrategyAdd
    {
        return $this->Network;
    }

    /**
     * @return $this
     */
    public function setNetwork(SmartCampaignNetworkStrategyAdd $value)
    {
        $this->Network = $value;

        return $this;
    }
}
