<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class DynamicTextCampaignNetworkStrategyAdd
{

    protected $BiddingStrategyType = null;

    /**
     * Creates a new instance of DynamicTextCampaignNetworkStrategyAdd.
     *
     * @return DynamicTextCampaignNetworkStrategyAdd
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets BiddingStrategyType.
     *
     * @return DynamicTextCampaignNetworkStrategyTypeEnum
     */
    public function getBiddingStrategyType()
    {
        return $this->BiddingStrategyType;
    }

    /**
     * Sets BiddingStrategyType.
     *
     * @param DynamicTextCampaignNetworkStrategyTypeEnum $value
     * @return $this
     */
    public function setBiddingStrategyType($value)
    {
        $this->BiddingStrategyType = $value;

        return $this;
    }


}

