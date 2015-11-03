<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class TextCampaignStrategy
{

    protected $Search = null;

    protected $Network = null;

    /**
     * Creates a new instance of TextCampaignStrategy.
     *
     * @return TextCampaignStrategy
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets Search.
     *
     * @return TextCampaignSearchStrategy
     */
    public function getSearch()
    {
        return $this->Search;
    }

    /**
     * Sets Search.
     *
     * @param TextCampaignSearchStrategy $value
     * @return $this
     */
    public function setSearch(TextCampaignSearchStrategy $value)
    {
        $this->Search = $value;

        return $this;
    }

    /**
     * Gets Network.
     *
     * @return TextCampaignNetworkStrategy
     */
    public function getNetwork()
    {
        return $this->Network;
    }

    /**
     * Sets Network.
     *
     * @param TextCampaignNetworkStrategy $value
     * @return $this
     */
    public function setNetwork(TextCampaignNetworkStrategy $value)
    {
        $this->Network = $value;

        return $this;
    }


}

