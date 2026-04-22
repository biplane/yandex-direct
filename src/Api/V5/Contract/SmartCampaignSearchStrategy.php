<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;
use Override;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class SmartCampaignSearchStrategy extends SmartCampaignStrategyBase
{
    /** @var 'AVERAGE_CPC_PER_CAMPAIGN'|'AVERAGE_CPC_PER_FILTER'|'AVERAGE_CPA_PER_CAMPAIGN'|'AVERAGE_CPA_PER_FILTER'|'PAY_FOR_CONVERSION_PER_CAMPAIGN'|'PAY_FOR_CONVERSION_PER_FILTER'|'AVERAGE_ROI'|'AVERAGE_CRR'|'PAY_FOR_CONVERSION_CRR'|'SERVING_OFF'|'UNKNOWN' */
    protected $BiddingStrategyType;

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
     * @see \Biplane\YandexDirect\Api\V5\Contract\SmartCampaignSearchStrategyTypeEnum
     *
     * @return 'AVERAGE_CPC_PER_CAMPAIGN'|'AVERAGE_CPC_PER_FILTER'|'AVERAGE_CPA_PER_CAMPAIGN'|'AVERAGE_CPA_PER_FILTER'|'PAY_FOR_CONVERSION_PER_CAMPAIGN'|'PAY_FOR_CONVERSION_PER_FILTER'|'AVERAGE_ROI'|'AVERAGE_CRR'|'PAY_FOR_CONVERSION_CRR'|'SERVING_OFF'|'UNKNOWN'
     */
    public function getBiddingStrategyType(): string
    {
        return $this->BiddingStrategyType;
    }

    /**
     * Set BiddingStrategyType
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\SmartCampaignSearchStrategyTypeEnum
     *
     * @param 'AVERAGE_CPC_PER_CAMPAIGN'|'AVERAGE_CPC_PER_FILTER'|'AVERAGE_CPA_PER_CAMPAIGN'|'AVERAGE_CPA_PER_FILTER'|'PAY_FOR_CONVERSION_PER_CAMPAIGN'|'PAY_FOR_CONVERSION_PER_FILTER'|'AVERAGE_ROI'|'AVERAGE_CRR'|'PAY_FOR_CONVERSION_CRR'|'SERVING_OFF'|'UNKNOWN' $value
     *
     * @return $this
     */
    public function setBiddingStrategyType(string $value)
    {
        $this->BiddingStrategyType = $value;

        return $this;
    }
}
