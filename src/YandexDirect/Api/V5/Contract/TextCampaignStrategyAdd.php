<?php

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
     *
     * @return TextCampaignStrategyAdd
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets Search.
     *
     * @return TextCampaignSearchStrategyAdd
     */
    public function getSearch()
    {
        return $this->Search;
    }

    /**
     * Sets Search.
     *
     * @param TextCampaignSearchStrategyAdd $value
     * @return $this
     */
    public function setSearch(TextCampaignSearchStrategyAdd $value)
    {
        $this->Search = $value;

        return $this;
    }

    /**
     * Gets Network.
     *
     * @return TextCampaignNetworkStrategyAdd
     */
    public function getNetwork()
    {
        return $this->Network;
    }

    /**
     * Sets Network.
     *
     * @param TextCampaignNetworkStrategyAdd $value
     * @return $this
     */
    public function setNetwork(TextCampaignNetworkStrategyAdd $value)
    {
        $this->Network = $value;

        return $this;
    }


}

