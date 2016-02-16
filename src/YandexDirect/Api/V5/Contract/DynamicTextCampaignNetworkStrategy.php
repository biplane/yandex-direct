<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class DynamicTextCampaignNetworkStrategy
{

    protected $BiddingStrategyType = null;

    /**
     * Creates a new instance of DynamicTextCampaignNetworkStrategy.
     *
     * @return DynamicTextCampaignNetworkStrategy
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
    public function setBiddingStrategyType(DynamicTextCampaignNetworkStrategyTypeEnum $value)
    {
        $this->BiddingStrategyType = $value;

        return $this;
    }


}

