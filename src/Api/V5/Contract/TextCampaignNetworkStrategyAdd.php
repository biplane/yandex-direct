<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class TextCampaignNetworkStrategyAdd extends TextCampaignStrategyAddBase
{
    protected $BiddingStrategyType = null;

//    Can be omitted.
//    protected $NetworkDefault = null;

    /**
     * @see TextCampaignNetworkStrategyTypeEnum
     */
    public function getBiddingStrategyType(): string
    {
        return $this->BiddingStrategyType;
    }

    /**
     * @see TextCampaignNetworkStrategyTypeEnum
     *
     * @return $this
     */
    public function setBiddingStrategyType(string $value)
    {
        $this->BiddingStrategyType = $value;

        return $this;
    }

    public function getNetworkDefault(): ?StrategyNetworkDefaultAdd
    {
        return $this->NetworkDefault ?? null;
    }

    /**
     * @return $this
     */
    public function setNetworkDefault(?StrategyNetworkDefaultAdd $value = null)
    {
        $this->NetworkDefault = $value;

        return $this;
    }
}
