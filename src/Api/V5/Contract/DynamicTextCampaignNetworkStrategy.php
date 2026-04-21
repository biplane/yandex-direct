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
    /** @var 'NETWORK_DEFAULT'|'MAXIMUM_COVERAGE'|'WB_MAXIMUM_CONVERSION_RATE'|'WB_MAXIMUM_CLICKS'|'AVERAGE_CPC'|'AVERAGE_CPA'|'PAY_FOR_CONVERSION'|'AVERAGE_ROI'|'AVERAGE_CRR'|'PAY_FOR_CONVERSION_CRR'|'WEEKLY_CLICK_PACKAGE'|'SERVING_OFF'|'UNKNOWN' */
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
     * @see \Biplane\YandexDirect\Api\V5\Contract\DynamicTextCampaignNetworkStrategyTypeEnum
     *
     * @return 'NETWORK_DEFAULT'|'MAXIMUM_COVERAGE'|'WB_MAXIMUM_CONVERSION_RATE'|'WB_MAXIMUM_CLICKS'|'AVERAGE_CPC'|'AVERAGE_CPA'|'PAY_FOR_CONVERSION'|'AVERAGE_ROI'|'AVERAGE_CRR'|'PAY_FOR_CONVERSION_CRR'|'WEEKLY_CLICK_PACKAGE'|'SERVING_OFF'|'UNKNOWN'
     */
    public function getBiddingStrategyType(): string
    {
        return $this->BiddingStrategyType;
    }

    /**
     * Set BiddingStrategyType
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\DynamicTextCampaignNetworkStrategyTypeEnum
     *
     * @param 'NETWORK_DEFAULT'|'MAXIMUM_COVERAGE'|'WB_MAXIMUM_CONVERSION_RATE'|'WB_MAXIMUM_CLICKS'|'AVERAGE_CPC'|'AVERAGE_CPA'|'PAY_FOR_CONVERSION'|'AVERAGE_ROI'|'AVERAGE_CRR'|'PAY_FOR_CONVERSION_CRR'|'WEEKLY_CLICK_PACKAGE'|'SERVING_OFF'|'UNKNOWN' $value
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
