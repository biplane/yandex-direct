<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class TextCampaignNetworkStrategy extends TextCampaignStrategyBase
{

    protected $BiddingStrategyType = null;

    protected $NetworkDefault = null;

    /**
     * Creates a new instance of TextCampaignNetworkStrategy.
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets BiddingStrategyType.
     *
     * @return string
     * @see TextCampaignNetworkStrategyTypeEnum
     */
    public function getBiddingStrategyType()
    {
        return $this->BiddingStrategyType;
    }

    /**
     * Sets BiddingStrategyType.
     *
     * @param string $value
     * @return self
     * @see TextCampaignNetworkStrategyTypeEnum
     */
    public function setBiddingStrategyType($value)
    {
        $this->BiddingStrategyType = $value;

        return $this;
    }

    /**
     * Gets NetworkDefault.
     *
     * @return StrategyNetworkDefault|null
     */
    public function getNetworkDefault()
    {
        return $this->NetworkDefault;
    }

    /**
     * Sets NetworkDefault.
     *
     * @param StrategyNetworkDefault|null $value
     * @return self
     */
    public function setNetworkDefault(StrategyNetworkDefault $value = null)
    {
        $this->NetworkDefault = $value;

        return $this;
    }


}

