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
     * @return TextCampaignSearchStrategy|null
     */
    public function getSearch()
    {
        return $this->Search;
    }

    /**
     * Sets Search.
     *
     * @param TextCampaignSearchStrategy|null $value
     * @return $this
     */
    public function setSearch(TextCampaignSearchStrategy $value = null)
    {
        $this->Search = $value;

        return $this;
    }

    /**
     * Gets Network.
     *
     * @return TextCampaignNetworkStrategy|null
     */
    public function getNetwork()
    {
        return $this->Network;
    }

    /**
     * Sets Network.
     *
     * @param TextCampaignNetworkStrategy|null $value
     * @return $this
     */
    public function setNetwork(TextCampaignNetworkStrategy $value = null)
    {
        $this->Network = $value;

        return $this;
    }


}

