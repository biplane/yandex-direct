<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class SmartCampaignNetworkStrategy extends SmartCampaignStrategyBase
{
    protected $BiddingStrategyType = null;

//    Can be omit.
//    protected $NetworkDefault = null;

    /**
     * Creates a new instance of SmartCampaignNetworkStrategy.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets BiddingStrategyType.
     *
     * @see SmartCampaignNetworkStrategyTypeEnum
     */
    public function getBiddingStrategyType(): string
    {
        return $this->BiddingStrategyType;
    }

    /**
     * Sets BiddingStrategyType.
     *
     * @see SmartCampaignNetworkStrategyTypeEnum
     *
     * @return $this
     */
    public function setBiddingStrategyType(string $value)
    {
        $this->BiddingStrategyType = $value;

        return $this;
    }

    /**
     * Gets NetworkDefault.
     */
    public function getNetworkDefault(): ?StrategyNetworkDefault
    {
        return $this->NetworkDefault ?? null;
    }

    /**
     * Sets NetworkDefault.
     *
     * @return $this
     */
    public function setNetworkDefault(?StrategyNetworkDefault $value = null)
    {
        $this->NetworkDefault = $value;

        return $this;
    }
}
