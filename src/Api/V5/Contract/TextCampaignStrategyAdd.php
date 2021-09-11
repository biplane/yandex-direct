<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class TextCampaignStrategyAdd
{
    protected $Search = null;

    protected $Network = null;

    /**
     * Creates a new instance of TextCampaignStrategyAdd.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets Search.
     */
    public function getSearch(): TextCampaignSearchStrategyAdd
    {
        return $this->Search;
    }

    /**
     * Sets Search.
     *
     * @return $this
     */
    public function setSearch(TextCampaignSearchStrategyAdd $value)
    {
        $this->Search = $value;

        return $this;
    }

    /**
     * Gets Network.
     */
    public function getNetwork(): TextCampaignNetworkStrategyAdd
    {
        return $this->Network;
    }

    /**
     * Sets Network.
     *
     * @return $this
     */
    public function setNetwork(TextCampaignNetworkStrategyAdd $value)
    {
        $this->Network = $value;

        return $this;
    }
}
