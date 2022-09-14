<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class DynamicTextCampaignNetworkStrategy extends DynamicTextCampaignStrategyBase
{
    protected $BiddingStrategyType = null;

//    Can be omitted.
//    protected $NetworkDefault = null;

    /**
     * @see DynamicTextCampaignNetworkStrategyTypeEnum
     */
    public function getBiddingStrategyType(): string
    {
        return $this->BiddingStrategyType;
    }

    /**
     * @see DynamicTextCampaignNetworkStrategyTypeEnum
     *
     * @return $this
     */
    public function setBiddingStrategyType(string $value)
    {
        $this->BiddingStrategyType = $value;

        return $this;
    }

    public function getNetworkDefault(): ?StrategyNetworkDefault
    {
        return $this->NetworkDefault ?? null;
    }

    /**
     * @return $this
     */
    public function setNetworkDefault(?StrategyNetworkDefault $value = null)
    {
        $this->NetworkDefault = $value;

        return $this;
    }
}
