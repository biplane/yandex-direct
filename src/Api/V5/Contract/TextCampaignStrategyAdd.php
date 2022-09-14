<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class TextCampaignStrategyAdd
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

    public function getSearch(): TextCampaignSearchStrategyAdd
    {
        return $this->Search;
    }

    /**
     * @return $this
     */
    public function setSearch(TextCampaignSearchStrategyAdd $value)
    {
        $this->Search = $value;

        return $this;
    }

    public function getNetwork(): TextCampaignNetworkStrategyAdd
    {
        return $this->Network;
    }

    /**
     * @return $this
     */
    public function setNetwork(TextCampaignNetworkStrategyAdd $value)
    {
        $this->Network = $value;

        return $this;
    }
}
