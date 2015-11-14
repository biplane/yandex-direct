<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class TextCampaignNetworkStrategyAdd extends TextCampaignStrategyAddBase
{

    protected $BiddingStrategyType = null;

    protected $NetworkDefault = null;

    /**
     * Creates a new instance of TextCampaignNetworkStrategyAdd.
     *
     * @return TextCampaignNetworkStrategyAdd
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets BiddingStrategyType.
     *
     * @return TextCampaignNetworkStrategyTypeEnum
     */
    public function getBiddingStrategyType()
    {
        return $this->BiddingStrategyType;
    }

    /**
     * Sets BiddingStrategyType.
     *
     * @param TextCampaignNetworkStrategyTypeEnum $value
     * @return $this
     */
    public function setBiddingStrategyType(TextCampaignNetworkStrategyTypeEnum $value)
    {
        $this->BiddingStrategyType = $value;

        return $this;
    }

    /**
     * Gets NetworkDefault.
     *
     * @return StrategyNetworkDefaultAdd|null
     */
    public function getNetworkDefault()
    {
        return $this->NetworkDefault;
    }

    /**
     * Sets NetworkDefault.
     *
     * @param StrategyNetworkDefaultAdd|null $value
     * @return $this
     */
    public function setNetworkDefault(StrategyNetworkDefaultAdd $value = null)
    {
        $this->NetworkDefault = $value;

        return $this;
    }


}

