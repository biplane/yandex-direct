<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class SmartCampaignNetworkStrategy extends SmartCampaignStrategyBase
{
    /** @var 'NETWORK_DEFAULT'|'AVERAGE_CPC_PER_CAMPAIGN'|'AVERAGE_CPC_PER_FILTER'|'AVERAGE_CPA_PER_CAMPAIGN'|'AVERAGE_CPA_PER_FILTER'|'PAY_FOR_CONVERSION_PER_CAMPAIGN'|'PAY_FOR_CONVERSION_PER_FILTER'|'AVERAGE_ROI'|'AVERAGE_CRR'|'PAY_FOR_CONVERSION_CRR'|'SERVING_OFF'|'UNKNOWN' */
    protected $BiddingStrategyType;

//    Can be omitted.
//    protected $NetworkDefault;

    /**
     * Create a new instance.
     *
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    /**
     * Get BiddingStrategyType
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\SmartCampaignNetworkStrategyTypeEnum
     *
     * @return 'NETWORK_DEFAULT'|'AVERAGE_CPC_PER_CAMPAIGN'|'AVERAGE_CPC_PER_FILTER'|'AVERAGE_CPA_PER_CAMPAIGN'|'AVERAGE_CPA_PER_FILTER'|'PAY_FOR_CONVERSION_PER_CAMPAIGN'|'PAY_FOR_CONVERSION_PER_FILTER'|'AVERAGE_ROI'|'AVERAGE_CRR'|'PAY_FOR_CONVERSION_CRR'|'SERVING_OFF'|'UNKNOWN'
     */
    public function getBiddingStrategyType(): string
    {
        return $this->BiddingStrategyType;
    }

    /**
     * Set BiddingStrategyType
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\SmartCampaignNetworkStrategyTypeEnum
     *
     * @param 'NETWORK_DEFAULT'|'AVERAGE_CPC_PER_CAMPAIGN'|'AVERAGE_CPC_PER_FILTER'|'AVERAGE_CPA_PER_CAMPAIGN'|'AVERAGE_CPA_PER_FILTER'|'PAY_FOR_CONVERSION_PER_CAMPAIGN'|'PAY_FOR_CONVERSION_PER_FILTER'|'AVERAGE_ROI'|'AVERAGE_CRR'|'PAY_FOR_CONVERSION_CRR'|'SERVING_OFF'|'UNKNOWN' $value
     *
     * @return $this
     */
    public function setBiddingStrategyType(string $value)
    {
        $this->BiddingStrategyType = $value;

        return $this;
    }

    /**
     * Get NetworkDefault
     */
    public function getNetworkDefault(): ?StrategyNetworkDefault
    {
        return $this->NetworkDefault ?? null;
    }

    /**
     * Set NetworkDefault
     *
     * @return $this
     */
    public function setNetworkDefault(?StrategyNetworkDefault $value)
    {
        $this->NetworkDefault = $value;

        return $this;
    }
}
