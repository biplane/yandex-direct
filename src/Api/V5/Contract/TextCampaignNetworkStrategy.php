<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;
use Override;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class TextCampaignNetworkStrategy extends TextCampaignStrategyBase
{
    /** @var 'AVERAGE_CPC'|'AVERAGE_CPA'|'PAY_FOR_CONVERSION'|'WB_MAXIMUM_CONVERSION_RATE'|'MAXIMUM_COVERAGE'|'NETWORK_DEFAULT'|'SERVING_OFF'|'UNKNOWN'|'WB_MAXIMUM_CLICKS'|'WEEKLY_CLICK_PACKAGE'|'AVERAGE_ROI'|'AVERAGE_CRR'|'PAY_FOR_CONVERSION_CRR'|'AVERAGE_CPA_MULTIPLE_GOALS'|'PAY_FOR_CONVERSION_MULTIPLE_GOALS'|'MAX_PROFIT' */
    protected $BiddingStrategyType;

//    Can be omitted.
//    protected $NetworkDefault;

    /**
     * Create a new instance.
     *
     * @return static
     */
    #[Override]
    public static function create(): static
    {
        return new static();
    }

    /**
     * Get BiddingStrategyType
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\TextCampaignNetworkStrategyTypeEnum
     *
     * @return 'AVERAGE_CPC'|'AVERAGE_CPA'|'PAY_FOR_CONVERSION'|'WB_MAXIMUM_CONVERSION_RATE'|'MAXIMUM_COVERAGE'|'NETWORK_DEFAULT'|'SERVING_OFF'|'UNKNOWN'|'WB_MAXIMUM_CLICKS'|'WEEKLY_CLICK_PACKAGE'|'AVERAGE_ROI'|'AVERAGE_CRR'|'PAY_FOR_CONVERSION_CRR'|'AVERAGE_CPA_MULTIPLE_GOALS'|'PAY_FOR_CONVERSION_MULTIPLE_GOALS'|'MAX_PROFIT'
     */
    public function getBiddingStrategyType(): string
    {
        return $this->BiddingStrategyType;
    }

    /**
     * Set BiddingStrategyType
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\TextCampaignNetworkStrategyTypeEnum
     *
     * @param 'AVERAGE_CPC'|'AVERAGE_CPA'|'PAY_FOR_CONVERSION'|'WB_MAXIMUM_CONVERSION_RATE'|'MAXIMUM_COVERAGE'|'NETWORK_DEFAULT'|'SERVING_OFF'|'UNKNOWN'|'WB_MAXIMUM_CLICKS'|'WEEKLY_CLICK_PACKAGE'|'AVERAGE_ROI'|'AVERAGE_CRR'|'PAY_FOR_CONVERSION_CRR'|'AVERAGE_CPA_MULTIPLE_GOALS'|'PAY_FOR_CONVERSION_MULTIPLE_GOALS'|'MAX_PROFIT' $value
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
